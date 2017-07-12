<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<div id="footer-copy-v">		
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a>.
			&copy; <?php echo date('Y');?> Все права защищены.						
			</div>
			
			<div class="menu2-footer-copy-v-0">
				<?php wp_nav_menu( array( 'theme_location' => 'menu2-footer-copy-v', 'container_class' => 'menu2-footer-copy-v menu2-footer-copy-v-2' ) ); ?>
			</div>
			
		</div><!-- .site-info -->		
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
