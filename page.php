<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

?>

<header class="entry-header">
	<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<?php

	if ( is_page( 'homepage' ) ) {
		get_template_part( 'template-parts/content', 'home' );
	}

	else if ( is_page( 'loginenroll' ) ) {
		get_template_part( 'template-parts/content', 'login' );
	}

	else if ( is_page( 'welcome' ) ) {
		get_template_part( 'template-parts/content', 'welcome' );
	}

	else {
	get_template_part( 'loop-templates/content', 'page' );
	}

	?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
	comments_template();
	endif;
	?>

	<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<?php get_footer(); ?>
