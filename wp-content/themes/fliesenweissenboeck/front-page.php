<?php
/**
Template Name: Startseite
*/

get_header(); ?>



<section class="content">
			  	
			  	<div class="main-message__container">
				  	<h2 class="main-message">Wir lassen Ihre Träume wahr werden!</h2>
			  	</div>
			  	
			  	<div class="heading__container">
				  	<h2>Unsere <strong>Leistungen</strong></h2>
				  	<hr class="heading__hr"> 
				  	<h3 class="sub-heading">Wenn Qualität gefragt ist</h3>
			  	</div>
		  	
			  	<?php echo do_shortcode("[services_overview]"); ?>
		  	
			  	<section class="container container--darkgray">
				  	
				  	<hr class="container--darkgray__hr--blue">
				  	
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
		  	
			  	<div class="heading__container">
				  	<h2>Fliesen <strong>Schauraum</strong></h2>
				  	<hr class="heading__hr"> 
				  	<h3 class="sub-heading">Direkt vor Ort und persönlich</h3>
			  	</div>
		  	
			  	<div class="container image-container container__partner container--white">
				  	
				  	<img class="partner-logo" src="<?php bloginfo('template_directory'); ?>/img/logo-fliesen-kuchner.svg" alt="Logo Fliesen- & Natursteinstudio Jürgen Kuchner">
				  	
				  	<div class="container">
				  	
				  		<img class="partner-image partner-image--larger image_fullwidth" src="<?php bloginfo('template_directory'); ?>/img/partner_kuchner-posing@2x.png" alt="Jürgen Kuchner">
				  	
			  		</div>
				  	
			  	</div>
		  	
				<div class="container partner-services__container container--darkgray">
					<ul class="partner-services__list">
						<li>Fliesen und Naturstein</li>
						<li>Stiegenanlagen</li>
						<li>Balkonplatten</li>
						<li>Schwimmbadumrandungen</li>
						<li>Mauerabdeckungen</li>
						<li>Fensterbretter</li>
					</ul>
				</div>  	
		  	
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
				
				<section>
			  				  	
			  	<div class="heading__container">
				  	<h2>Unser <strong>Team</strong></h2>
				  	<hr class="heading__hr"> 
				  	<h3 class="sub-heading">Wir sind jederzeit gerne für Sie da</h3>
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
			  	
				</section>
				
				<?php echo do_shortcode("[contact_infos]"); ?>

		  	</section>

<?php get_footer(); ?>