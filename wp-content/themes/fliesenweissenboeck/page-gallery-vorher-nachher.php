<?php 
/*
Template Name: Galerie-Seite Vorher-Nachher
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
			  					
			<section class="masonry container--white">
					
			    <div class="container is-fluid">
					
					<p class="gallery-description">Umbau im Gasthaus Reichenauerhof, Inhaber Josef Unterberger, 2651 Reichenau an der Rax, Hauptstraße 49, <a href="https://www.reichenauerhof.com" target="_blank">www.reichenauerhof.com</a></p>
				        
			        <div class="columns">
				            
					    <div class="column">
						    
					        <img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_04.jpg" alt="Foto Vorher/Nachher Reichenauerhof #1" onclick="openModal();currentSlide(1)">       
					                
					    </div>
					                
					    <div class="column">
					    
					        <img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_05.jpg" alt="Foto Vorher/Nachher Reichenauerhof #2" onclick="openModal();currentSlide(2)">
					                
					    </div>
					                
					    <div class="column">
					                    
					        <img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_06.jpg" alt="Foto Vorher/Nachher Reichenauerhof #3" onclick="openModal();currentSlide(3)">
					        			                
					    </div>
			            
					</div>
					
					<hr>
					
					<p class="gallery-description">Verschiedene Umbauarbeiten bei privaten Auftraggebern</a></p>
					
					<div class="columns">
							
						<div class="column">
							
							<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_01.jpg" alt="Foto Vorher/Nachher Privat #1" onclick="openModal();currentSlide(1)">       
									
						</div>
									
						<div class="column">
						
							<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_02.jpg" alt="Foto Vorher/Nachher Privat #2" onclick="openModal();currentSlide(2)">
									
						</div>
									
						<div class="column">
										
							<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_03.jpg" alt="Foto Vorher/Nachher Privat #3" onclick="openModal();currentSlide(3)">
														
						</div>
						
					</div>
					
					
					
					
			            
			            
			        <div class="modal" id="myModal">
			            
			            <div class="modal-content is-vcentered">
							
							<div class="item-slide">
								<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_04.jpg">
							</div>
							
							<div class="item-slide">
								<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_05.jpg">
							</div>
							
							<div class="item-slide">
								<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_06.jpg">
							</div>
							
							<hr>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_01.jpg">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_02.jpg">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/vorher-nachher/vorher-nachher_03.jpg">
			                </div>
			                			                  
			             </div>
			                
			                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			                
			                <a class="next" onclick="plusSlides(1)">&#10095;</a>
			                
			              <button onclick="closeModal()" class="modal-close is-large" aria-label="close"></button>
			              
			        </div>
			    
			    </div>
			    
			    </section>
			
				<?php echo do_shortcode("[contact_infos]"); ?>
			
			</section>
			    
			    
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
			    
			
				<?php echo do_shortcode("[contact_infos]"); ?>
			
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
		
				

<?php get_footer(); ?>