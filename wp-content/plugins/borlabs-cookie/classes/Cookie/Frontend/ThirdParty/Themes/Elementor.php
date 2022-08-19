<?php
/*
 * ----------------------------------------------------------------------
 *
 *                          Borlabs Cookie
 *                      developed by Borlabs
 *
 * ----------------------------------------------------------------------
 *
 * Copyright 2018-2021 Borlabs - Benjamin A. Bornschein. All rights reserved.
 * This file may not be redistributed in whole or significant part.
 * Content of this file is protected by international copyright laws.
 *
 * ----------------- Borlabs Cookie IS NOT FREE SOFTWARE -----------------
 *
 * @copyright Borlabs - Benjamin A. Bornschein, https://borlabs.io
 * @author Benjamin A. Bornschein, Borlabs ben@borlabs.io
 *
 */

namespace BorlabsCookie\Cookie\Frontend\ThirdParty\Themes;

use BorlabsCookie\Cookie\Frontend\ContentBlocker;
use BorlabsCookie\Cookie\Frontend\JavaScript;

class Elementor
{
    private static $instance;

    public $blockedYouTubeURL = '';
    public $settings = [];

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
    }

    public function __clone()
    {
        trigger_error('Cloning is not allowed.', E_USER_ERROR);
    }

    public function __wakeup()
    {
        trigger_error('Unserialize is forbidden.', E_USER_ERROR);
    }

    /**
     * detectYouTubeVideoWidget function.
     *
     * @access public
     *
     * @param mixed $elementBaseObj
     *
     * @return void
     */
    public function detectYouTubeVideoWidget($elementBaseObj = null)
    {
        // Get settings of the Content Blocker
        $contentBlockerData = ContentBlocker::getInstance()->getContentBlockerData('youtube');

        // Only modify when YouTube Content Blocker is active
        if (empty($contentBlockerData)) {
            return;
        }

        $elementType = $elementBaseObj->get_type();

        if ($elementType === 'widget') {
            $frontendSettings = $elementBaseObj->get_frontend_settings();

            if (
                !empty($frontendSettings) && !empty($frontendSettings['video_type'])
                && $frontendSettings['video_type'] === 'youtube'
            ) {
                if (isset($frontendSettings['lightbox']) && $frontendSettings['lightbox'] === 'yes') {
                    return;
                }

                ob_start();
                $elementBaseObj->remove_render_attribute('_wrapper', 'data-settings', null);
                $this->blockedYouTubeURL = $frontendSettings['youtube_url'];
                $this->settings = $frontendSettings;

                add_action(
                    'elementor/frontend/widget/after_render',
                    [
                        \BorlabsCookie\Cookie\Frontend\ThirdParty\Themes\Elementor::getInstance(),
                        'modifyYouTubeVideoWidget',
                    ]
                );
            }
        }
    }

    public function modifyYouTubeVideoWidget()
    {
        if (!empty($this->blockedYouTubeURL)) {
            $widgetHTML = ob_get_contents();
            ob_end_clean();

            $atts = [];
            $atts['rel'] = 0;
            $atts['enablejsapi'] = 1;
            $atts['origin'] = get_site_url();

            if (isset($this->settings['controls'])) {
                $atts['controls'] = $this->settings['controls'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['play_on_mobile'])) {
                $atts['playsinline'] = $this->settings['play_on_mobile'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['modestbranding'])) {
                $atts['modestbranding'] = $this->settings['modestbranding'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['autoplay'])) {
                $atts['autoplay'] = $this->settings['autoplay'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['mute'])) {
                $atts['mute'] = $this->settings['mute'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['loop'])) {
                $atts['loop'] = $this->settings['loop'] === 'yes' ? 1 : 0;
            }
            if (isset($this->settings['start'])) {
                $atts['start'] = intval($this->settings['start']);
            }
            if (isset($this->settings['end'])) {
                $atts['end'] = intval($this->settings['end']);
            }
            if (!empty($this->settings['image_overlay']['url'])) {
                $atts['thumbnail'] = $this->settings['image_overlay']['url'];
                $widgetHTML = str_replace('elementor-custom-embed-image-overlay', 'borlabs-hide', $widgetHTML);
            }
            if (isset($this->settings['yt_privacy'])) {
                $atts['changeURLToNoCookie'] = $this->settings['yt_privacy'] === 'yes' ? 1 : 0;
            }

            $videoIframe = wp_oembed_get($this->blockedYouTubeURL);
            $blockedIframe = \BorlabsCookie\Cookie\Frontend\ContentBlocker::getInstance()->handleContentBlocking(
                $videoIframe,
                $this->blockedYouTubeURL,
                '',
                '',
                $atts
            );

            echo str_replace(
                '<div class="elementor-video"></div>',
                '<div class="elementor-video">' . $blockedIframe . '</div>',
                $widgetHTML
            );

            $this->blockedYouTubeURL = '';
            $this->settings = [];

            remove_action(
                'elementor/frontend/widget/after_render',
                [\BorlabsCookie\Cookie\Frontend\ThirdParty\Themes\Elementor::getInstance(), 'modifyYouTubeVideoWidget']
            );
        }
    }

    /**
     * detectFacebook function.
     *
     * @access public
     *
     * @param mixed $content
     *
     * @return void
     */
    public function detectFacebook($content, $widget)
    {
        if (
            strpos($content, 'elementor-facebook-widget fb-page') !== false
            || strpos(
                $content,
                'elementor-facebook-widget fb-post'
            ) !== false
        ) {
            // Get settings of the Content Blocker
            $contentBlockerData = ContentBlocker::getInstance()->getContentBlockerData('facebook');

            // Add updated settings, global js, and init js of the Content Blocker
            JavaScript::getInstance()->addContentBlocker(
                $contentBlockerData['content_blocker_id'],
                $contentBlockerData['globalJS'],
                $contentBlockerData['initJS']
                . " if (typeof elementorFrontend.init === \"function\") { elementorFrontend.init(); } ",
                $contentBlockerData['settings']
            );

            $content = ContentBlocker::getInstance()->handleContentBlocking($content, '', 'facebook');
        }

        return $content;
    }

    /**
     * detectIframes function.
     *
     * @access public
     *
     * @param mixed $content
     * @param mixed $widget
     *
     * @return void
     */
    public function detectIframes($content, $widget)
    {
        $content = ContentBlocker::getInstance()->detectIframes($content);

        return $content;
    }
}
