<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<div id="footer-logo" align="center">
			<a href="http://www.uiowa.edu/">
		<img src="//dsps.lib.uiowa.edu/atiowa/wp-content/uploads/sites/10/2016/02/uiwordmark-only.png" alt="University of Iowa wordmark"></a>
		<a href="http://www.lib.uiowa.edu/">
		<img src="//dsps.lib.uiowa.edu/atiowa/wp-content/uploads/sites/10/2016/02/libraries-only.png" alt="U of I Library Logo"></a>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="copyright col-md-12">
						<?php echo get_theme_mod( 'activello_footer_copyright', 'Activello' ); ?>
						<?php activello_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
