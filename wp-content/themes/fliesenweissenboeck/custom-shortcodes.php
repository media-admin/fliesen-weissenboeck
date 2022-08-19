<?php
 
 	
	function contact_infos_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/contact_infos_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'contact_infos', 'contact_infos_shortcode' );


 	
	function services_detailed_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/services_detailed_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'services_detailed', 'services_detailed_shortcode' );
	
	
	
	function services_overview_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/services_overview_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'services_overview', 'services_overview_shortcode' );
	
	
	
	function team_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/team_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'team', 'team_shortcode' );
	
	
	function team_strengths_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/team_strengths_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'team_strengths', 'team_strengths_shortcode' );
	
	
	function partners_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/partners_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'partners', 'partners_shortcode' );
	
	
	
	function cta_contact_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/cta_contact_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'cta_contact', 'cta_contact_shortcode' );
	
	
	function galleries_overview_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/galleries_overview_shortcode');
		return ob_get_clean();   
	} 
	
	add_shortcode( 'galleries_overview', 'galleries_overview_shortcode' );
	
	

?>