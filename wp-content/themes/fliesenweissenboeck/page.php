<?php get_header(); ?>

<div class="pageheading">
			
		<div class="main-message__container">
		
		<h1><?php the_title(); ?></h1>
		
		<h2 class="main-message"><?php the_field('subtitle'); ?></h2>
							  	
	<div class="heading__container">
	
		<h2 class="heading__main"><?php the_field('heading_main_light'); ?> <strong><?php the_field('heading_main_strong'); ?></strong></h2>
		
		<hr class="heading__hr"> 
		
		<h3 class="sub-heading"><?php the_field('heading_sub'); ?></h3>
		
	</div>
		

<div class="inner">
	
	<div class="main">
		
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry page">
         	<?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
 
   </div><!-- main -->

</div><!-- inner -->

<?php get_footer(); ?>