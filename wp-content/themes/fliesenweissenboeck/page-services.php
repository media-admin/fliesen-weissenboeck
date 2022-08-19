<?php 
/*
Template Name: Seite Leistungen
*/
get_header(); ?>

<section class="content">
			  				  	
	<div class="main-message__container">
			<h1><?php the_title(); ?></h1>
			<h2 class="main-message"><?php the_field('subtitle'); ?></h2>
		</div>
			  	
			  	<div class="heading__container">
			  		<h2 class="heading__main"><?php the_field('heading_main_light'); ?> <strong><?php the_field('heading_main_strong'); ?></strong></h2>
			  		<hr class="heading__hr"> 
			  		<h3 class="sub-heading"><?php the_field('heading_sub'); ?></h3>
				</div>
			  	
	<div class="container container--white">
		<p class="main-message">Zusammen haben wir mehr als 100 Jahre echte Handwerks-Berufserfahrung</p>
	</div>  
				
	<div class="container container--white"> 	
				  	
	  	<?php echo do_shortcode("[services_detailed]"); ?>			 	
				
	</div>	
	
	<?php echo do_shortcode("[cta_contact]"); ?>	
	
	<?php echo do_shortcode("[galleries_overview]"); ?>
	
	<hr class="red">
	
	<?php echo do_shortcode("[contact_infos]"); ?>
			
</section>
			  	
			
<?php get_footer(); ?>