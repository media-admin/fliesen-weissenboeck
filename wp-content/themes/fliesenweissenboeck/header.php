<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
    
	    <!-- <title>Fliesenverlegung Christian Weißenböck - Unsere Erfahrung ist Ihr Vorteil!</title> -->
	    
	    <?php if (is_front_page() ) : ?>	
	    
		    <title>Startseite | <?php bloginfo('name'); ?></title>   
	    
	    <?php else : ?>
	    
	    	<title><?php wp_title($sep = ''); ?> | <?php bloginfo('name'); ?></title>
	    	
	    <?php endif; ?>
	    
	    
	    
	    <!-- Favicon und Tiles Varianten-->
	    
	    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-128.png" sizes="128x128" />
		
		<meta name="application-name" content="Fliesenverlegung Christian Weißenböck"/>
		
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		
		<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-310x310.png" />

	    
	    	     
	    <!-- Import Bulma Framework-->
	    <link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/vendor/bulma-0.9.0/css/bulma.min.css'>
	    
	    
	    <!-- Import FontAwesome-->
	    <link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/vendor/fontawesome-free-5.14.0-web/css/all.min.css'>  	    
	     
	    
	    <!-- Import Styles-->
	    <link rel="stylesheet" href='<?php bloginfo('stylesheet_url'); ?>'>
	    
	    
	    <!-- Button Back-to-Top -->
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		
		<script>
			$(document).ready(function(){
			
				// Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
				var back_to_top_button = ['<a href="#top" class="back-to-top"><img src="<?php bloginfo("template_directory"); ?>/img/topbutton.svg"</a>'].join("");
				$("body").append(back_to_top_button)
			
				// Der Button wird ausgeblendet
				$(".back-to-top").hide();
			
				// Funktion für das Scroll-Verhalten
				$(function () {
					$(window).scroll(function () {
						if ($(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
							$('.back-to-top').fadeIn();
						} else {
							$('.back-to-top').fadeOut();
						}
					});
			
					$('.back-to-top').click(function () { // Klick auf den Button
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});
			
			});
		</script>
		
		<?php if ( is_singular() && pings_open() ) { ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			
		<?php }

		wp_head(); ?>  
		
	</head>
  
	<body <?php body_class(); ?>>  
	  
		<div class="container container__outer">	 
  
			<div class="container top__bar">
				&nbsp;  
			</div>
			  
			<section class="branding">
			  
			    <div class="container">
				    
			    	<h1 class="title">
			        	Fliesen Weißenböck
			      	</h1>
			      
				  	<a href="https://www.fliesen-weissenboeck.at"><img class="brand-logo brand-logo--mobile" src="<?php bloginfo('template_directory'); ?>/img/fliesen-weissenboeck-logo-hoch.svg" alt="Logo Fliesen Weißenböck (Hochformat)"></a>
				  	<a href="https://www.fliesen-weissenboeck.at"><img class="brand-logo brand-logo--desktop" src="<?php bloginfo('template_directory'); ?>/img/fliesen-weissenboeck-logo-quer.svg" alt="Logo Fliesen Weißenböck (Querformat)"></a>
			           
				  	<p class="subtitle">
			        	... unsere Erfahrung ist Ihr Vorteil!
			      	</p>
			      
			    </div>
		    
		  	</section>
		  	
		  	
		  	<?php if (is_front_page() ) : ?>		  
		  	
		  	<div class="slider" >
			  
		    	<div class="container">
			    	
			    	<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-01.jpg" alt="Team Fliesen Weißenböck in Farbe">
					<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-02.jpg" alt="Christian Weißenböck beim Entladen von Verlegematerialien">
					<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-03.jpg" alt="Fliesen Weißenböck Mitarbeiter beim Tragen einer Großfliese">
					<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-04.jpg" alt="Fliesen Weißenböck Mitarbeiter beim Zuschnitt eriner Großformat-Fliese">
					<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-05.jpg" alt="Christian Weißenböck beim Verladen von Materialien">
					<img class="slider__image slider__item animated-fading" src="<?php bloginfo('template_directory'); ?>/img/slider-06.jpg" alt="Fliesen Weißenböck Mitarbeiter beim Verladen von Großformat-Fliesen">
					
					<div class="button-container" style="width: 100%">
					    <div class="slider__button-left w3-hover-text" onclick="plusDivs(-1)">&#10094;</div>
					    <div class="slider__button-right w3-hover-text" onclick="plusDivs(1)">&#10095;</div>
					    
					    <div class="dots-container" style="width: 100%"> 
					    
						    <span class="slider__badge slider__dot" onclick="currentDiv(1)"></span>
						    <span class="slider__badge slider__dot" onclick="currentDiv(2)"></span>
						    <span class="slider__badge slider__dot" onclick="currentDiv(3)"></span>
						    <span class="slider__badge slider__dot" onclick="currentDiv(4)"></span>
						    <span class="slider__badge slider__dot" onclick="currentDiv(5)"></span>
						    <span class="slider__badge slider__dot" onclick="currentDiv(6)"></span>
						
						</div>
					
					</div>
					
					<script>
				
						var slideIndex = 1;
						showDivs(slideIndex);
						
						function plusDivs(n) {
						  showDivs(slideIndex += n);
						  						    

						}
						
						
						function currentDiv(n) {
						  showDivs(slideIndex = n);
						}
						
						
						function showDivs(n) {
						  var i;
						  var x = document.getElementsByClassName("slider__item");
						  var dots = document.getElementsByClassName("slider__dot");
						  if (n > x.length) {slideIndex = 1}
						  if (n < 1) {slideIndex = x.length}
						  
						  for (i = 0; i < x.length; i++) {
						    x[i].style.display = "none";  
						  }
						  
						  for (i = 0; i < dots.length; i++) {
						    dots[i].className = dots[i].className.replace(" is-current", "");
						  }
						  
						  x[slideIndex-1].style.display = "block";
						  dots[slideIndex-1].className += " is-current";
						  
						}
						
					</script>

				</div>
		    
		  	</div>
		  	
		  	<?php elseif(is_page('150') ) : ?>
		  		
		  		<div class="slider" >
			  
			    	<div class="container">
				    	
				    	<img class="slider__image" src="<?php bloginfo('template_directory'); ?>/img/team_komplett-sw.jpg" alt="Teamfoto Fliesen Weißenböck in Schwarz-Weiß">
					
					</div>

				</div>
		    		  		
		  	<?php else : ?>
		  	
		  		<div class="slider" >
			  
			    	<div class="container">
				    	
				    	<img class="slider__image" src="<?php bloginfo('template_directory'); ?>/img/slider-01.jpg" alt="Teamfoto Fliesen Weißenböck in Farbe">
					
					</div>

				</div>
								
		  	<?php endif; ?>
		  	
		    	  
		  	<header>

				<nav class="navbar" role="navigation" aria-label="main navigation">

					<div class="navbar-menu is-active">
					<!-- shown on mobile -->
					
						<ul class="header__menu">
							
							<!-- Burger Button to open/show the overlay navigation menu -->
							
							<li class="header__menu__item"><a role="button" class="navbar-burger burger header__menu__item" href="mailto:christian.weissenboeck@tmo.at" target="_blank" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-envelope"></i></a></li>
							<li class="header__menu__item"><a role="button" class="navbar-burger burger header__menu__item" href="tel:004369910629688" target="_blank" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-phone"></i></a></li>
							<li class="header__menu__item"><span onclick="openNav()"><a role="button" class="navbar-burger burger header__menu__item" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-bars"></i></a></span></li>

						</ul>
						
					</div>
					
					
					<script>
						
					/* Open when someone clicks on the span element */
					function openNav() {
					  document.getElementById("myNav").style.width = "100%";
					}
					
					/* Close when someone clicks on the "x" symbol inside the overlay */
					function closeNav() {
					  document.getElementById("myNav").style.width = "0%";
					}	
				
					</script>
					
					
					<!-- OVERLAY -->
					
					<div id="myNav" class="overlay">
					
					  <!-- Button to close the overlay navigation -->
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					  <!-- Overlay content -->
					  <div class="overlay-content">
						  
						<img class="brand-logo brand-logo--mobile overlay-brand-logo" src="<?php bloginfo('template_directory'); ?>/img/fliesen-weissenboeck-logo-hoch.svg" alt="Logo Fliesen Weißenböck (Hochformat)">
			           
					  	<p class="subtitle overlay-subtitle">
				        	... unsere Erfahrung ist Ihr Vorteil!
				      	</p>  
						  
						
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container' => '',
							'fallback_cb' => '__return_false'
						) ); ?>
						
											  
					    <a class="overlay-navbar-item" href="/leistungen">Leistungen</a>
					    <a class="overlay-navbar-item has-dropdown" href="/galerie-badverfliesung">Galerie</a>
					    
					    	<div class="navbar-dropdown">
						        	
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-badverfliesung">Badverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-wc-verfliesung">WC-Verfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-stufenverfliesung">Stufenverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-steinverblender">Steinverblender</a>
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-bodenverfliesung">Bodenverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item" href="/galerie-vorher-nachher">Vorher – Nachher</a>
						        <hr class="navbar-divider">
						          
						    </div>

					    <a class="overlay-navbar-item" href="/fliesen-schauraum">Fliesenschauraum</a>
					    <a class="overlay-navbar-item" href="/partner-lieferanten">Partner und Lieferanten</a>
					    <a class="overlay-navbar-item" href="/team">Team</a>
					    <a class="overlay-navbar-item" href="/firmenchronik">Firmenchronik</a>
					    <a class="overlay-navbar-item" href="/kontakt">Kontakt</a>
					  </div>
					  
					  <hr class="navbar-divider">
					
					</div>
					
					
					<div class="navbar-menu">
					<!-- hidden on mobile -->
					
						<div id="navbarDesktop" class="navbar-menu">
					  
						    <div class="navbar-start">
						      <a class="navbar-item" href="/leistungen">
						        Leistungen
						      </a>
						
						      <div class="navbar-item has-dropdown is-hoverable">
						        <a class="navbar-link" href="/galerie-badverfliesung">
						          Galerie
						        </a>
						
						        <div class="navbar-dropdown">
						        	
						        	<a class="navbar-item" href="/galerie-badverfliesung">
						            	Badverfliesung
						        	</a>
									
									<a class="navbar-item" href="/galerie-wc-verfliesung">
						            	WC-Verfliesung
						        	</a>
						        	
									<a class="navbar-item" href="/galerie-stufenverfliesung">
										Stufenverfliesung
						        	</a>
						        	
									<a class="navbar-item" href="/galerie-steinverblender">
						            	Steinverblender
						        	</a>
						          
									<a class="navbar-item" href="/galerie-bodenverfliesung">
						            	Bodenverfliesung
						        	</a>
						          
									<a class="navbar-item" href="/galerie-vorher-nachher">
										Vorher – Nachher
						        	</a>
						          	<hr class="navbar-divider">
						          
						        </div>
						        
						      </div>
						        
						        <a class="navbar-item" href="/fliesen-schauraum">
						        	Fliesenschauraum
						        </a>
						        
						        <a class="navbar-item" href="/partner-lieferanten">
							    	Partner und Lieferanten
							    </a>
							    
							    <a class="navbar-item" href="/team">
							    	Team
							    </a>
							    
							    <a class="navbar-item" href="/firmenchronik">
							    	Firmenchronik
							    </a>
							    
							    <a class="navbar-item" href="/kontakt">
							    	Kontakt
							    </a>
						        						    
						    <div class="navbar-end">
						    </div>
						      
						</div>
						
					</div>

			  	</nav>
				  
		  	</header>
		  	
		  	
		  	<!-- Responsive Navigation Menu -->
		  	
		  	<script>
					
				document.addEventListener('DOMContentLoaded', () => {

				// Get all "navbar-burger" elements
				const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
					
				// Check if there are any navbar burgers
				 if ($navbarBurgers.length > 0) {
					
					// Add a click event on each of them
				    $navbarBurgers.forEach( el => {
				    el.addEventListener('click', () => {
					
				        // Get the target from the "data-target" attribute
				        const target = el.dataset.target;
				        const $target = document.getElementById(target);
					
				        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
				        el.classList.toggle('is-active');
				        $target.classList.toggle('is-active');
					
				      });
				    });
				  }
					
				});
				  
				</script>
		  	
		  