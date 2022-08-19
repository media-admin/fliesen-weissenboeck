<!DOCTYPE html>
<html lang="de">
	
	<head>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    
	    <title>Fliesenverlegung Christian Weißenböck - Unsere Erfahrung ist Ihr Vorteil!</title>
	       
	     
	    <!-- Import Bulma Framework-->
	    <link rel="stylesheet" href='vendor/bulma-0.9.0/css/bulma.min.css'>
	    
	    <!-- Import FontAwesome-->
	    <link rel="stylesheet" href='vendor/fontawesome-free-5.14.0-web/css/all.css'>  
	     
	     
	    <!-- Import Google Fonts-->
	    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;600;700&display=swap'>
	
	    
	    <!-- Import Styles-->
	    <link rel="stylesheet" href='style.css'>
	    
	    
	    <!-- Button Back-to-Top -->
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		
		<script>
			$(document).ready(function(){
			
				// Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
				var back_to_top_button = ['<a href="#top" class="back-to-top"><img src="img/topbutton.svg"</a>'].join("");
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

	  
	</head>
  
	<body>  
	  
		<div class="container container__outer">	 
  
			<div class="container top__bar">
				&nbsp;  
			</div>
			  
			<section class="branding">
			  
			    <div class="container">
				    
			    	<h1 class="title">
			        	Fliesen Weißenböck
			      	</h1>
			      
				  	<img class="brand-logo brand-logo--mobile" src="img/fliesen-weissenboeck-logo-hoch.svg" alt="Logo Fliesen Weißenböck (Hochformat)">
				  	<img class="brand-logo brand-logo--desktop" src="img/fliesen-weissenboeck-logo-quer.svg" alt="Logo Fliesen Weißenböck (Querformat)">
			           
				  	<p class="subtitle">
			        	... unsere Erfahrung ist Ihr Vorteil!
			      	</p>
			      
			    </div>
		    
		  	</section>
		  
		  
		  	<div class="slider" >
			  
		    	<div class="container">
			    	
			    	<img class="slider__image slider__item" src="img/slider-01.jpg" style="width: 100%">
					<img class="slider__image slider__item" src="img/slider-02.jpg" style="width: 100%">
					<img class="slider__image slider__item" src="img/slider-03.jpg" style="width: 100%">
					<img class="slider__image slider__item" src="img/slider-04.jpg" style="width: 100%">
					<img class="slider__image slider__item" src="img/slider-05.jpg" style="width: 100%">
					<img class="slider__image slider__item" src="img/slider-06.jpg" style="width: 100%">
					
					<div class="button-container" style="width: 100%">
					    <div class="slider__button-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
					    <div class="slider__button-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
					    
					    <span class="slider__badge slider__dot w3-hover-white" onclick="currentDiv(1)"></span>
					    <span class="slider__badge slider__dot w3-hover-white" onclick="currentDiv(2)"></span>
					    <span class="slider__badge slider__dot w3-hover-white" onclick="currentDiv(3)"></span>
					
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
						    dots[i].className = dots[i].className.replace(" w3-white", "");
						  }
						  
						  x[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " w3-white";
						  
						}
						
					</script>

				</div>
		    
		  	</div>
		    	  
		  	<header>

				<nav class="navbar" role="navigation" aria-label="main navigation">

					<div class="navbar-menu is-active">
					<!-- shown on mobile -->
					
						<ul class="header__menu">
							
							<!-- Burger Button to open/show the overlay navigation menu -->
							
						  	<li class="header__menu__item"><span onclick="openNav()"><a role="button" class="navbar-burger burger header__menu__item" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-bars"></i></a></span></li>
							<li class="header__menu__item"><a role="button" class="navbar-burger burger header__menu__item" href="#" target="_blank" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-map"></i></a></li>
							<li class="header__menu__item"><a role="button" class="navbar-burger burger header__menu__item" href="#" target="_blank" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-envelope"></i></a></li>
							<li class="header__menu__item"><a role="button" class="navbar-burger burger header__menu__item" href="#" target="_blank" aria-label="menu" aria-expanded="false" data-target="navbarDesktop"><i class="fa fa-phone-alt"></i></a></li>
						
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
						  
						<img class="brand-logo brand-logo--mobile overlay-brand-logo" src="img/fliesen-weissenboeck-logo-hoch.svg" alt="Logo Fliesen Weißenböck (Hochformat)">
			           
					  	<p class="subtitle overlay-subtitle">
				        	... unsere Erfahrung ist Ihr Vorteil!
				      	</p>  
						  
						  
					    <a class="overlay-navbar-item" href="#">Leistungen</a>
					    <a class="overlay-navbar-item has-dropdown" href="#">Galerie</a>
					    
					    	<div class="navbar-dropdown">
						        	
						        <a class="navbar-item overlay-navbar-sub-item">Badverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item">WC-Verfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item">Stufenverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item">Steinverblender</a>
						        <a class="navbar-item ">Bodenverfliesung</a>
						        <a class="navbar-item overlay-navbar-sub-item">Vorher – Nachher</a>
						        <hr class="navbar-divider">
						          
						    </div>

					    <a class="overlay-navbar-item" href="#">Fliesenschauraum</a>
					    <a class="overlay-navbar-item" href="#">Partner und Lieferanten</a>
					    <a class="overlay-navbar-item" href="#">Team</a>
					    <a class="overlay-navbar-item" href="#">Firmenchronik</a>
					    <a class="overlay-navbar-item" href="#">Kontakt</a>
					  </div>
					  
					  <hr class="navbar-divider">
					
					</div>
					
					
					<div class="navbar-menu">
					<!-- hidden on mobile -->
					
						<div id="navbarDesktop" class="navbar-menu">
					  
						    <div class="navbar-start">
						      <a class="navbar-item">
						        Leistungen
						      </a>
						
						      <div class="navbar-item has-dropdown is-hoverable">
						        <a class="navbar-link">
						          Galerie
						        </a>
						
						        <div class="navbar-dropdown">
						        	
						        	<a class="navbar-item">
						            	Badverfliesung
						        	</a>
									
									<a class="navbar-item">
						            	WC-Verfliesung
						        	</a>
						        	
									<a class="navbar-item">
										Stufenverfliesung
						        	</a>
						        	
									<a class="navbar-item">
						            	Steinverblender
						        	</a>
						          
									<a class="navbar-item">
						            	Bodenverfliesung
						        	</a>
						          
									<a class="navbar-item">
										Vorher – Nachher
						        	</a>
						          	<hr class="navbar-divider">
						          
						        </div>
						        
						        <a class="navbar-item">
						        	Fliesenschauraum
						        </a>
						        
						        <a class="navbar-item">
							    	Partner und Lieferanten
							    </a>
							    
							    <a class="navbar-item">
							    	Team
							    </a>
							    
							    <a class="navbar-item">
							    	Firmenchronik
							    </a>
							    
							    <a class="navbar-item">
							    	Kontakt
							    </a>
						        
						    </div>
						    
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
		  	
		  
		  	<section class="content">
			  	
			  	<div class="main-message__container">
				  	<h2 class="main-message">Wir lassen Ihre Träume wahr werden!</h2>
			  	</div>
			  	
			  	<div class="heading__container">
				  	<h2>Unsere <strong>Leistungen</strong></h2>
				  	<hr class="heading__hr"> 
				  	<h3 class="sub-heading">Wenn Qualität gefragt ist</h3>
			  	</div>
				
				<section class="masonry container--white">
					
			        <div class="container is-fluid">
				        
			            <div class="columns">
				            
			                <div class="column">
			                    <img src="https://source.unsplash.com/800x1000/?nature,water" onclick="openModal();currentSlide(1)">
			                    <img src="https://source.unsplash.com/800x550/?nature,water" onclick="openModal();currentSlide(4)">
			                </div>
			                <div class="column">
			                    <img src="https://source.unsplash.com/800x600/?nature,water" onclick="openModal();currentSlide(2)">
			                    <img src="https://source.unsplash.com/800x650/?nature,water" onclick="openModal();currentSlide(5)">
			                </div>
			                <div class="column">
			                    <img src="https://source.unsplash.com/800x900/?nature,water" onclick="openModal();currentSlide(3)">
			                    <img src="https://source.unsplash.com/800x700/?nature,water" onclick="openModal();currentSlide(6)">
			                </div>
			            </div>
			
			            <div class="modal" id="myModal">
			                <div class="modal-content is-vcentered">
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x1000/?nature,water">
			                  </div>
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x600/?nature,water">
			                  </div>
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x900/?nature,water">
			                  </div>
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x550/?nature,water">
			                  </div>
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x650/?nature,water">
			                  </div>
			                  <div class="item-slide">
			                    <img src="https://source.unsplash.com/800x700/?nature,water">
			                  </div>
			                </div>
			                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			                <a class="next" onclick="plusSlides(1)">&#10095;</a>
			              <button onclick="closeModal()" class="modal-close is-large" aria-label="close"></button>
			            </div>
			        </div>
			    </section>
				
				
				<script>
					
					function openModal() {
						document.getElementById('myModal').style.display = "block";
					}
				
				
					function closeModal() {
						document.getElementById('myModal').style.display = "none";
					}
				
				
					var slideIndex = 1;
					showSlides(slideIndex);
				
					function plusSlides(n) {
						showSlides(slideIndex += n);
					}
				
				
					function currentSlide(n) {
						showSlides(slideIndex = n);
					}
				
				
					function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("item-slide");
						var captionText = document.getElementById("caption");
						
						if (n > slides.length) {slideIndex = 1}
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
					    	slides[i].style.display = "none";
						}
					  
						slides[slideIndex-1].style.display = "block";
					
					}
					
				</script>				
				
				
				
				
				
				<section class="container container--transparent__hr--red">
		  	
		  			<div class="content__text content__contactinfos">

		  				<div class="contact__phone">
			  				
			  				<h3 class="contactinfos__heading">Telefon</h3>
			  				
			  				<p class="content__text--light"><a href="tel:004369910629688">+43 699 106 29 688</a></p>
			  				
		  				</div>
		  				
		  				<div class="contact__mail">
			  					  				
			  				<h3 class="contactinfos__heading">E-Mail</h3>
			  				
			  				<p class="content__text--light"><a href="mailto:christian.weissenboeck@tmo.at">christian.weissenboeck@tmo.at</a></p>
			  					
		  				</div>
		  				
		  				<div class="contact__hours">
			  							  				
			  				<h3 class="contactinfos__heading">Geschäftszeiten</h3>
			  				
			  				<p class="content__text--light">Termine wochentags nach telefonischer Vereinbarung</p>
			  				
		  				</div>
		  				
		  				<div class="contact__address">
			  							  				
			  				<h3 class="contactinfos__heading">Adresse</h3>
			  				
			  				<p class="content__text--light">Tannenweg 1<br/>
				  				2620 Ramplach</p>
			  				
		  				</div>
		  				
		  				<div class="contact__maps">
			  							  							  				
			  				<h3 class="contactinfos__heading">Anfahrt</h3>
			  				
			  				<div class="map-frame">
				  				<iframe class="google-maps map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2685.345888626523!2d16.09114121610411!3d47.697121889712896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476dd106004e9e0d%3A0x8051042bb92acfd9!2sRamplach%201%2C%202620%20Ramplach!5e0!3m2!1sde!2sat!4v1597709220121!5m2!1sde!2sat" width="100%" height="100%" frameborder="1px" style="border:1px solid #707070;" allowfullscreen="" aria-hidden="false" tabindex="0">
				  				</iframe>
				  				
				  			</div>
			  				
		  				</div>

		  			</div>
		  	
		  		</section>

		  	</section>
		  
		  
			<footer class="container">
				  
				<div class="navbar__footer">
					
					<div class="copyright">
						© 2020 - Fliesenverlegung Christian Weißenböck
				  	</div>
				  	
				  	<nav class="footer__menu">
						<ul>
							<li class="footer__menu__item"><a href="#" target="_blank">Sitemap</a></li>
							<li class="footer__menu__item"><a href="#" target="_blank">Impressum</a></li>
							<li class="footer__menu__item"><a href="#" target="_blank">Datenschutz</a></li>
						</ul>
					</nav>	
					
			  	</div>  
			  
			  	<!--
				  	<div class="footer__social-media">
					
					<ul>
						<li class="footer__social-media__item"><a href="https://facebook.com" target="_blank"><i class="fa-facebook-f"></i></a></li>
						<li class="footer__social-media__item"><a href="https://instagram.com" target="_blank"><i class="fa-instagram"></i></a></li>
					</ul>
				  
			  	</div>
			  	
			  	-->		  
					  
			</footer>
  
  		</div>
  		
  		<!-- --- SLIDER CAROUSEL --- -->
   	
  	</body>
  
</html>