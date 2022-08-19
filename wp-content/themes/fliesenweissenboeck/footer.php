<footer class="container">
				  
				<div class="navbar__footer">
					
					<div class="copyright">
						© <?php echo date("Y"); ?> - Fliesenverlegung Christian Weißenböck
				  	</div>
				  	
				  	
				  	
				  	<nav class="footer__menu">
					  	
					  	<?php wp_nav_menu( array( 'Footer-Menü' => 'footer-menu' ) ); ?>

					</nav>	
					
			  	</div>  	  
					  
			</footer>
  
  		</div>
  		
  		<?php wp_footer(); ?>
   	
  	</body>
  
</html>