<?php
/**
 * Theme Funktionen und allgemeine Definitionen für die Website "fliesen-weissenboeck.at"
 */


/* Allgemeine Theme Funktionen */

function weissenboeck_features() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'weissenboeck_features');




/* Styles and Scripts */

function weissenboeck_register_styles() {

  // Import FontAwesome
  wp_register_style( 'fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free-5.14.0-web/css/all.min.css' );
  wp_enqueue_style( 'fontawesome' );

  // Import Bulma Framework
  wp_register_style( 'bulma', get_template_directory_uri() . '/vendor/bulma-0.9.0/css/bulma.min.css' );
  wp_enqueue_style( 'bulma' );

  // Import Cookie Script Stylesheets
  wp_register_style( 'cookie-style', get_template_directory_uri() . '/assets/styles/dywc.css' );
  wp_enqueue_style( 'cookie-style' );

  // Import Theme Styles via style.css
  wp_register_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'weissenboeck_register_styles' );



function weissenboeck_register_scripts() {

  // Import JQery 1.4.3
  wp_register_script( 'jquery-1-4-3', get_template_directory_uri() . '/vendor/jquery-1.4.3/jquery.min.js', '', null, true );
  wp_enqueue_script( 'jquery-1-4-3' );

  // Import JQery 1.11.0
  wp_register_script( 'jquery-1-11-0', '//code.jquery.com/jquery-1.11.0.min.js', '', null, true );
  wp_enqueue_script( 'jquery-1-11-0' );

  // Import JQery Migrate 1.2.1
  wp_register_script( 'jquery--migrate-1-2-1', '//code.jquery.com/jquery-migrate-1.2.1.min.js', '', null, true );
  wp_enqueue_script( 'jquery--migrate-1-2-1' );

  // Import Button Back-to-Top
  wp_register_script( 'button-back-to-top', get_template_directory_uri() . '/assets/scripts/button-back-to-top.js', '', null, true );
  wp_enqueue_script( 'button-back-to-top' );

  // Import Cookie Notice Scripts
  wp_register_script( 'dywc', get_template_directory_uri() . '/assets/scripts/dywc.js', '', null, true );
  wp_enqueue_script( 'dywc' );

  wp_register_script( 'cookie-notice', get_template_directory_uri() . '/assets/scripts/cookie-notice.js', '', null, true );
  wp_enqueue_script( 'cookie-notice' );

}

add_action( 'wp_enqueue_scripts', 'weissenboeck_register_scripts' );








/* Menü Support */

function weissenboeck_register_menu() {
	register_nav_menu( 'nav-menu-main', 'Haupt-Navigationsmenü', 'weissenboeck' );
	register_nav_menu( 'footer-menu', 'Footer-Menü', 'weissenboeck' );
}

add_action( 'after_setup_theme', 'weissenboeck_register_menu' );



/* Include the Theme's Custom Shortcode Library */

include('custom-shortcodes.php');




/* Beitragsformate */

add_theme_support( 'post-formats', array( 'gallery' ) );



/* Beitragsbilder */

add_theme_support( 'post-thumbnails' );



/* Adds the Slug to the body tag's class  */

function add_slug_body_class( $classes ) {
     global $post;
  if ( isset( $post ) ) {
     $classes[] = $post->post_name;
  }
  return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );



/* Ersetzt die IP bei Kommentaren (IP-Anonymisierung lt. DSGVO) */

function replace_comment_ip() {
   return "127.0.0.1";
}

add_filter( 'pre_comment_user_ip', 'replace_comment_ip', 50);



/* --- CUSTOM POST TYPES --- */


function weissenboeck_post_types() {
	add_post_type_support( 'team', 'thumbnail' );
	add_post_type_support( 'team', 'excerpt' );

	add_filter( 'wpex_gallery_metabox_post_types', function( $types ) {
	$types[] = 'gallery';
	return $types;
} );


	/* Custom Post Type "TEAM */

	register_post_type('team', array(
		'show_in_rest' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Teammitglieder',
			'add_new_item' => 'Neues Teammitglied',
			'edit_item' => 'Teammitglieder bearbeiten',
			'all_items' => 'Alle Teammitglied',
			'singular_name' => 'Teammitglied',
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		),
		'menu_icon' => 'dashicons-format-status'

	));


	/* Custom Post Type "GALERIE */

	register_post_type( 'project_gallery', array(
		'show_in_rest' => true,
		'public' => true,
        'labels' => array(
            'name' =>  'Galerie',
            'singular_name' => 'Galerie',
            'all_items' => 'Alle Bilder',
            'supports' => array( 'title', 'thumbnail' ),
        ),
        'has_archive' => false,
        'exclude_from_search' => true,
        'rewrite' => array('slug' => 'gallery-item'),
        'menu_position' => 4,
        'show_in_admin_bar'   => false,
        'show_in_nav_menus'   => false,
        'publicly_queryable'  => false,
        'menu_icon' => 'dashicons-format-gallery'
    ));


}

add_action('init', 'weissenboeck_post_types');


/* Anzeige der Vorschaubilder in der Galerie */

function weissenboeck_get_backend_preview_thumb($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
        return $post_thumbnail_img[0];
    }
}

function weissenboeck_preview_thumb_column_head($defaults) {
    $defaults['featured_image'] = 'Image';
    return $defaults;
}
add_filter('manage_posts_columns', 'weissenboeck_preview_thumb_column_head');

function weissenboeck_preview_thumb_column($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = weissenboeck_get_backend_preview_thumb($post_ID);
            if ($post_featured_image) {
                echo '<img src="' . $post_featured_image . '" />';
            }
    }
}
add_action('manage_posts_custom_column', 'weissenboeck_preview_thumb_column', 10, 2);



/* --- CUSTOM LOGIN BEREICH --- */

/* Eigenes Styling des Login-Bereichs */

function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}

add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );


/* Funktion "Remember-me" standardmäßig aktivieren */

function login_checked_remember_me() {
add_filter( 'login_footer', 'rememberme_checked' );
}

add_action( 'init', 'login_checked_remember_me' );

function rememberme_checked() {
echo "<script>document.getElementById('rememberme').checked = true;</script>";
}


/* Standardmößige Fehlermeldung beim Anmelden überschreiben */

function login_error_override()
{
    return 'Die Zugangsdaten sind leider nicht korrekt.';
}

add_filter('login_errors', 'login_error_override');



/* Umleitung der standardmäßigen Login-Seite auf die Custom Login Page */

function redirect_login_page() {
  $login_page  = home_url( '/login/' );
  $page_viewed = basename($_SERVER['REQUEST_URI']);

  if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($login_page);
    exit;
  }
}

add_action('init','redirect_login_page');







/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */

function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            $redirect_to = admin_url();
            return $redirect_to;
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );





/* Abfangen der Login-Fehlversuche */

function login_failed() {
  $login_page  = home_url( '/login/' );
  wp_redirect( $login_page . '?login=failed' );
  exit;
}

add_action( 'wp_login_failed', 'login_failed' );


function verify_username_password( $user, $username, $password ) {
  $login_page  = home_url( '/login/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}

add_filter( 'authenticate', 'verify_username_password', 1, 3);





/* Abfangen der Umleitung auf die Login-Seite nach dem Ausloggen */

function logout_page() {
  $login_page  = home_url( '/login/' );
  wp_redirect( $login_page . "?login=false" );
  exit;
}
add_action('wp_logout','logout_page');
