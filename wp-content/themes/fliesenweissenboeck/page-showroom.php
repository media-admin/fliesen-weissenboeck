<?php
/*
Template Name: Seite Schauraum
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
				
				
				<div class="partner__introduction container--white container">
							
					<p class="content__text">
						Damit Sie von Anfang an eine konkrete Vorstellung bzw. ein Bild im Kopf haben, wie das zukünftige Ergebnis aussehen wird, bieten wir Ihnen die Möglichkeit, in Ihrer direkten Umgebung ein umfassendes Fliesen-Sortiment live zu betrachten.
					</p>
							
				</div>
				
		  	
			  	<div class="container container__showroom">
				  	
					<div class="column-left">	
				  	
					  	<h3>Unser Partner</h3>
					  	
					  	<img class="showroom-partner__logo" src="<?php bloginfo('template_directory'); ?>/img/logo-fliesen-kuchner.svg" alt="Logo Fliesen- & Natursteinstudio Jürgen Kuchner">
					  	
					  	<p class="showroom-partner__description">
						  	Seit 2008 ist Jürgen Kuchner der kompetente Ansprechpartner rund ums Thema Fliesen & Natursteine.<br/><br/>
						  	Seine offenen Art in Kombination mit jahrelang gesammeltem Know-How macht ihn zu Ihrem perfekten Berater zu verschiedensten Materialien und Lösungen.
					  	</p>
					  	
					</div>
					
					<div class="column-right">
					  	
					  	<img class="showroom-partner__portrait" src="<?php bloginfo('template_directory'); ?>/img/portrait-juergen-kuchner@2x.png" alt="Foto Jürgen Kuchner">
					  	
					  	<p class="showroom-partner__name">Jürgen <strong>Kuchner</strong></p>
						
					</div>
					
					<ul class="showroom-partner-services__list">
							<li>Fliesen und Naturstein</li>
							<li>Stiegenanlagen</li>
							<li>Balkonplatten</li>
							<li>Schwimmbadumrandungen</li>
							<li>Mauerabdeckungen</li>
							<li>Fensterbretter</li>
						</ul>
					
				</div>
				  	
				<div class="container">
				  	
					<img class="column-left__img" src="<?php bloginfo('template_directory'); ?>/img/showroom_fliesen-kuchner-01@2x.png" alt="Foto Showroom 1 Fliesen- & Natursteinstudio Jürgen Kuchner">
				  		
					<img class="column-right__img" src="<?php bloginfo('template_directory'); ?>/img/showroom_fliesen-kuchner-02@2x.png" alt="Foto Showroom 2 Fliesen- & Natursteinstudio Jürgen Kuchner">
					
					<p class="showroom-partner__termin-hinweis">
						Termine ausschließlich nach telefonischer Vereinbarung					  	
					</p>
									  	
			  	</div>
			  	
			  	<div class="container kontakt__container container--white">
				
					<img class="column-left__img" src="<?php bloginfo('template_directory'); ?>/img/showroom_fliesen-kuchner-03@2x.png" alt="Foto Showroom 3 Fliesen- & Natursteinstudio Jürgen Kuchner">
					
					<div class="column-right__img route__container">
						
						<h3 class="kontakt__heading">Schauraum Standort</h3>
						<hr class="h3__heading">
						
						<div class="showroom-partner__location">
							<p>Wartmannstetterstrasse 10<br/>
								2630 Ternitz
							</p>
							
							<a class="button--red" href="https://maps.google.at" target="_self">Route planen</a>
							
						</div>
						
					</div>  
					
					<img class="showroom__partner" src="<?php bloginfo('template_directory'); ?>/img/partner_kuchner-posing@2x.png" alt="Slider-Bild">
					
			  	</div>
			  	
			  	<hr class="red">					
		  	
				<div class="container kontakt__container container--white">
					
					<h3 class="kontakt__heading">Kontakt</h3>
					<hr class="h3__heading">
					
					<div class="partner-phone">
						<p>Telefon<br/>
							<a href="tel:004366473653455" target="_blank">+43 664 736 534 55</a>
						</p>
					</div>
					
					<div class="partner-mail">
						<p>E-Mail<br/>
							<a href="mailto:fliesen.kuchner@aon.at?subject=Website-Anfrage: " target="_blank">fliesen.kuchner@aon.at</a>
						</p>
					</div>
					
				</div>  
				
				<?php echo do_shortcode("[galleries_overview]"); ?>
					
				<hr class="red">

		  	</section>

<?php get_footer(); ?>