<?php 
/*
Template Name: Seite Team
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
				
	<?php echo do_shortcode("[team]"); ?>
			  	
	<div class="container container--transparent__hr--red">
			  	
	  	<div class="strength__text">
					  	
		  	<h2 class="heading--red">Gemeinsame <strong>Stärken</strong></h2>
				  	
		  	<p class="content__text--light">
				Mit insgesamt 100 Jahren an Berufserfahrung sowie viel Tatendrang und Hingabe sehen wir uns auf folgenden Gebieten als die Spezialisten im Bezirk.
			</p>
				  	
	  	</div>  	
				  	
	  	<?php echo do_shortcode("[team_strengths]"); ?>			 	
				
	</div>	
	
	
	<div class="container">	  		
		
		<div class="heading__container">
			<h2>Unsere <strong>Leistungen</strong></h2>
			<hr class="heading__hr"> 
			<h3 class="sub-heading">Im Überblick</h3>
		</div>
				  	
	  	<?php echo do_shortcode("[services_detailed]"); ?>			 	
				
	</div>	
	
	
	<?php echo do_shortcode("[cta_contact]"); ?>
	
	<?php echo do_shortcode("[contact_infos]"); ?>
			
</section>
			  	
			
<?php get_footer(); ?>