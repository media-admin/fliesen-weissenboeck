<?php 
/*
Template Name: Galerie-Seite Badverfliesung
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
				        
		    <div class="columns">
				            
			    <div class="column">
				    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_01.jpg" alt="Foto Beispiel Badverfliesung 1" onclick="openModal();currentSlide(1)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_04.jpg" alt="Foto Beispiel Badverfliesung 4" onclick="openModal();currentSlide(4)">	
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_07.jpg" alt="Foto Beispiel Badverfliesung 7" onclick="openModal();currentSlide(7)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_10.jpg" alt="Foto Beispiel Badverfliesung 10" onclick="openModal();currentSlide(10)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_13.jpeg" alt="Foto Beispiel Badverfliesung 13" onclick="openModal();currentSlide(13)">	
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_16.jpg" alt="Foto Beispiel Badverfliesung 16" onclick="openModal();currentSlide(16)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_19.jpg" alt="Foto Beispiel Badverfliesung 19" onclick="openModal();currentSlide(19)">	
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_22.jpg" alt="Foto Beispiel Badverfliesung 22" onclick="openModal();currentSlide(22)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_22.jpg" alt="Foto Beispiel Badverfliesung 24" onclick="openModal();currentSlide(22)">

			        			                
				</div>
			                
				<div class="column">
			    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_02.jpg" alt="Foto Beispiel Badverfliesung 2" onclick="openModal();currentSlide(2)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_05.jpg" alt="Foto Beispiel Badverfliesung 5" onclick="openModal();currentSlide(5)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_08.jpg" alt="Foto Beispiel Badverfliesung 8" onclick="openModal();currentSlide(8)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_11.jpeg" alt="Foto Beispiel Badverfliesung 11" onclick="openModal();currentSlide(11)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_14.jpg" alt="Foto Beispiel Badverfliesung 14" onclick="openModal();currentSlide(14)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_17.jpg" alt="Foto Beispiel Badverfliesung 17" onclick="openModal();currentSlide(17)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_20.jpeg" alt="Foto Beispiel Badverfliesung 20" onclick="openModal();currentSlide(20)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_23.jpg" alt="Foto Beispiel Badverfliesung 23" onclick="openModal();currentSlide(23)">
			        			                
			    </div>
			                
			    <div class="column">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_03.jpg" alt="Foto Beispiel Badverfliesung 3" onclick="openModal();currentSlide(3)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_06.jpg" alt="Foto Beispiel Badverfliesung 6" onclick="openModal();currentSlide(6)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_09.jpg" alt="Foto Beispiel Badverfliesung 9" onclick="openModal();currentSlide(9)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_12.jpg" alt="Foto Beispiel Badverfliesung 12" onclick="openModal();currentSlide(12)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_15.jpeg" alt="Foto Beispiel Badverfliesung 15" onclick="openModal();currentSlide(15)">
			                    
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_18.jpg" alt="Foto Beispiel Badverfliesung 18" onclick="openModal();currentSlide(18)">
			        
			        <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_21.jpeg" alt="Foto Beispiel Badverfliesung 21" onclick="openModal();currentSlide(21)">
			        			        			        			                
			    </div>
			            
			</div>
			            
			            
			<div class="modal" id="myModal">
			            
			    <div class="modal-content is-vcentered">
			                
			        <div class="item-slide">
			            <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_01.jpg" alt="Foto Beispiel Badverfliesung 1">
			        </div>
			                
			        <div class="item-slide">
			           	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_02.jpg" alt="Foto Beispiel Badverfliesung 2">
			        </div>
			                
			        <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_03.jpg" alt="Foto Beispiel Badverfliesung 3">
			        </div>
			               
			        <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_04.jpg" alt="Foto Beispiel Badverfliesung 4">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_05.jpg" alt="Foto Beispiel Badverfliesung 5">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_06.jpg" alt="Foto Beispiel Badverfliesung 6">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_07.jpg" alt="Foto Beispiel Badverfliesung 7">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_08.jpg" alt="Foto Beispiel Badverfliesung 8">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_09.jpg" alt="Foto Beispiel Badverfliesung 9">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_10.jpg" alt="Foto Beispiel Badverfliesung 10">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_11.jpeg" alt="Foto Beispiel Badverfliesung 11">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_12.jpg" alt="Foto Beispiel Badverfliesung 12">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_13.jpeg" alt="Foto Beispiel Badverfliesung 13">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_14.jpg" alt="Foto Beispiel Badverfliesung 14">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_15.jpeg" alt="Foto Beispiel Badverfliesung 15">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_16.jpg" alt="Foto Beispiel Badverfliesung 16">
			                </div>
			                
			                <div class="item-slide">
			                	<img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_17.jpg" alt="Foto Beispiel Badverfliesung 17">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_18.jpg" alt="Foto Beispiel Badverfliesung 18">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_19.jpg" alt="Foto Beispiel Badverfliesung 19">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_20.jpeg" alt="Foto Beispiel Badverfliesung 20">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_21.jpeg" alt="Foto Beispiel Badverfliesung 21">
			                </div>
			                			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_22.jpg" alt="Foto Beispiel Badverfliesung 22">
			                </div>
			                  
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_23.jpg" alt="Foto Beispiel Badverfliesung 23">
			                </div>
			                
			                <div class="item-slide">
			                    <img src="<?php bloginfo('template_directory'); ?>/img/badverfliesung/bad_24.jpg" alt="Foto Beispiel Badverfliesung 24">
			                </div>
			                  
			             </div>
			                
			                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			                
			                <a class="next" onclick="plusSlides(1)">&#10095;</a>
			                
			              <button onclick="closeModal()" class="modal-close is-large" aria-label="close"></button>
			              
			        </div>
			    
			    </div>
			    
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