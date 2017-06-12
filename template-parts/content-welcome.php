<header class="entry-header">
	<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

	<div class="row">
		<div class = "col-sm-8">

		<?php global $current_user;
			get_currentuserinfo();
			?>

			<p>Hello,  <?php echo $current_user->user_firstname ?></p>
			
			<p>This is your home-base page for accessing the Healthyist course.</p>

			<p>The panel to your right will show you where you are in your Healthyist journey.</p>

			<p>Click the RESUME button below to return to where you were in the Lessons when you last left, or to begin with “Lesson 1: Foundations” if you are new to Healthyist:</p>

			<p>You may return to an earlier Lesson at any time by clicking on that Lesson listed in the right panel.</p>

			<p>You cannot access a future Lesson until 7 days have expired from you starting the previous Lesson. This ensures that you move through the Lessons in order and that you spend one full week practicing the objectives of each Lesson</p>

			<p>Remember, Healthyist is a journey, and just the beginning of the rest of your life at that. It is not a race to finish.</p>

			<div class = "text-center">
				<?php echo do_shortcode('[uo_learndash_resume]'); ?>
			</div>

		</div>

		<div id = "ld_sidebar" class = "col-sm-4">
			<?php dynamic_sidebar('ld_sidebar'); ?>
		</div>
	</div><!-- .row -->