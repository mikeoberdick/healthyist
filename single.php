<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
?>

<div class="wrapper" id="single-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class = "row">
			<main class="site-main col-sm-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( is_singular('sfwd-lessons') ) {
							get_template_part( 'loop-templates/content', 'single-lesson' );
					}

					else {
							get_template_part( 'loop-templates/content', 'single' );
					} ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<div class="col-md-4 widget-area" id="ld-sidebar" role="complementary">
				<?php dynamic_sidebar('ld_sidebar'); ?>
			</div><!-- #secondary -->
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
