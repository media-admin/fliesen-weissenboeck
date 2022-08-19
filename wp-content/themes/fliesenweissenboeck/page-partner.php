<?php 
/*
Template Name: Seite Partner und Lieferanten
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
	
	<div class="container">	  		
				  	
	  	<?php echo do_shortcode("[partners]"); ?>			 	
				
	</div>	

	
	<?php echo do_shortcode("[galleries_overview]"); ?>
			  	
	<div class="container">	  		
		
		<div class="heading__container">
			<h2>Unsere <strong>Leistungen</strong></h2>
			<hr class="heading__hr"> 
			<h3 class="sub-heading">Im Überblick</h3>
		</div>
				  	
	  	<?php echo do_shortcode("[services_detailed]"); ?>			 	
				
	</div>	
	
	
	<?php echo do_shortcode("[cta_contact]"); ?>	
	
	
	<section class="container container--darkgray">
				  	
		<div class="content__text">
			  	
			<p class="content__text--light">
				Vom Erstkontakt bis zur Übergabe der geleisteten Arbeit  können Sie sich bei uns auf eine fachgerechte Kundenbetreuung verlassen. 
				Eine Beratung vor Ort bei Ihnen zu Hause gehört hier selbstverständlich zu unserem Service.
			</p>
						
			<p class="content__text--light">
				Die Einhaltung von zugesagten Terminen hat dabei immer oberste Priorität – denn es gibt nichts schlimmeres als unzuverlässige Handwerker.
			</p>
		
			<p class="content__text--light">
				Gerade bei Bäderumbauten ist ein reibungsloser Ablauf notwendig, um die Zeitspanne der Arbeiten möglichst kurz zu halten. 
				Hierfür können wir Ihnen auch gerne zuverlässige Partnerfirmen vermitteln.
			</p>
					
		</div>
			  	
	</section>
		
	<?php echo do_shortcode("[contact_infos]"); ?>
			
</section>
			  	
			
<?php get_footer(); ?>