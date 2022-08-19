<?php get_header(); ?>
<body class="page-<?php the_ID(); ?> orgwrap">
<div id="wrapper">

	<div id="header">
		<div class="inner">
    		
            <div id="logo">
            	<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
            </div>
            
            <div id="adresse">
            <?php
			if(is_active_sidebar('adresse-org')){
			dynamic_sidebar('adresse-org');
			}
			?>
            </div>
           
            <div style="clear:both;"></div>
            
        </div>
        
	</div>
	<div class="inner">
	<div class="slideshow"><?php putRevSlider("startseite") ?></div>
    <div id="hauptnavi">
    	<?php wp_nav_menu( array('menu' => 'Main Menu') ); ?>
	</div>
    <div style="clear:left;"></div>
    <div id="subnavi">
    	<?php
		if(is_active_sidebar('org-menu')){
		dynamic_sidebar('org-menu');
		}
		?><script>selectnav('menu-org'); </script>
	</div>
           
    <div class="main-full startseite org" style="padding: 0 20px;">
 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>
            <hr class="org" style="margin:30px 0px 5px;" />
            <div class="post-info">
            	<span class="thetime">
				<i class="fa fa-calendar"></i> <?php the_time('d. M. Y') ?>
				</span>
				<span class="thecategory">
				<i class="fa fa-tags"></i> <?php the_category(', '); ?>
				</span>
			</div>
            <hr class="org" style="margin:0px 0px 15px;" />
<?php endwhile; endif; ?>
			
	</div>
	<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>