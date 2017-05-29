<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

	<div id = "footerWidgets" class = "row">

		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_3'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_4'); ?>
		</div>

	</div><!-- #footerWidgets -->

	</div><!-- .container -->

</div><!-- wrapper-footer -->

<div id = "bottomFooter">
		<div class = "container">

		<footer id="colophon">
				<div class = "row">
					<div class = "col-sm-6">
						<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span>
					</div>

					<div class = "col-sm-6 footerLinks">
						<a href = "<?php echo bloginfo('url'); ?>/terms-of-use" class = "mr-2">Terms</a><a href = "<?php echo bloginfo('url'); ?>/privacy-policy">Privacy</a>
					</div>
				</div>
		</footer><!-- #colophon -->
		
		</div><!-- .container -->
	</div><!-- #bottomFooter -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

</body>

</html>
