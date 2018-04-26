<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package built
 */
global $redux_demo;
?>

	  <!-- FOOTER -->
      <footer class="footer-area">
		<div class="container">
			<div class="footer-logo"> 
				<a href="#"><img src="<?php echo $redux_demo['footer-logo']['url']; ?>" alt="" /></a>
			</div>
			
			 <div class="footer-menu"> 
				<?php wp_nav_menu(array(
				'theme_location'	=> 'footer-menu',
				)); ?>
				
			</div>
		</div>
      </footer>
    </main>

   <?php wp_footer(); ?>
  </body>
</html>
