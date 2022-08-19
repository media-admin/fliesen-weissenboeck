<?php
/**
 * Template part for displaying page content in page-teammitglieder.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

<div class="container container-teammitglieder">
				
	<div class="grid-teammitglieder">
			
			
	<?php
	
	$teammitglieder = new WP_Query(array(
	
		'post_per_page' => -1,
		'post_type' => 'teammitglied',
						
	));
					
	while($teammitglieder->have_posts()) {
	
		$teammitglieder->the_post(); ?>
						
		<div class="card-teammitglied">
						
			<img class="teammitglied__img" src="
							
			<?php $image = the_post_thumbnail();?>
			<img src="<?php $image[0]; ?>" alt="">
						
								
			<div class="teammitglied__name">
				<h2><?php the_title(); ?></h2>
			</div><!-- .teammitglied__name -->
			
							
			<div class="teammitglied__funktion">
				<p><?php the_field('funktion'); ?></p>
			</div><!-- .teammitglied__funktion  -->
			
			
			<div class="teammitglied__ausbildung">	
				<p><?php the_field('ausbildung'); ?></p>
			</div><!-- .teammitglied__ausbildung -->
			
			
			<div class="teammitglied__motto">	
				<p><?php the_field('motto'); ?></p>
			</div><!-- .teammitglied__motto -->		
			
			
			<div class="teammitglied__telefon">	
				<p>
					<a href=" tel:<?php the_field('telefonnummer'); ?> "><?php the_field('telefonnummer'); ?></a>
				</p>

			</div><!-- .teammitglied__telefon -->
			
			
			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
			
			
			<div class="teammitglied__email">	
				<p>
					<a href=" mailto:<?php the_field('email'); ?> "><?php the_field('email'); ?></a>
				</p>
			</div><!-- .teammitglied__email -->
			
			
			<div class="teammitglied__position--kontakt">	
				<p><?php the_field('position_fur_kontaktseite'); ?></p>
			</div><!-- .teammitglied__position--kontakt -->
			
							
		</div><!-- .card-teammitglied -->
						
	<?php
							
	}
						
?>