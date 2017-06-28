<header class="entry-header">
	<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

	<div class="row">
		<div class = "col-sm-8">

		<?php  $current_user = wp_get_current_user(); ?>

			<p>Hi <?php echo $current_user->user_firstname; ?>,</p>
			
			<p>This is your Healthyist course home-base page that will display when you first Enroll and each time you login to return to the Healthyist course.</p>

			<p>From this page you can START/RESUME the course, see your progress, and access past Lessons for review</p>

			<p>The right-side panel on this page:</p>

			<ul>
				<li>Shows <span style = "font-weight: 700;">your Progress</span> along your Healthyist journey.</li>
				<li>Allows you to <span style = "font-weight: 700;">access past Lessons</span> for review.</li>
				<li>Shows <span style = "font-weight: 700;">your Achievements</span> along your journey.<br />
				While you deserve a pat on the back with every day you are with Healthyist, at certain milestones along your course journey we want to recognize your commitment to Healthyist by providing you Achievement Badges.</li>
			</ul>

			<p><span style = "font-weight: 700;">Click the START/RESUME button</span> below to return to where you were in the Lessons when you last left, or to begin with “Lesson 1: Foundations” if you have just enrolled in Healthyist.</p>

			<h3>Step-by-Step</h3>

			<p>To ensure you move through the Lessons in order AND that you spend one full week practicing the objectives of each Lesson (because practice and repetition are all-important), you cannot advance to a future Lesson until you have spent seven days on the current Lesson.</p>

			<p>Remember, Healthyist is not a race to finish, but rather is a journey; a process creating your new life foundation; the beginning of the best rest of your life.</p>

			<div class = "text-center">
				<?php echo do_shortcode('[uo_learndash_resume]'); ?>
			</div>

		</div>

		<div class="col-md-4 widget-area" id="ld-sidebar" role="complementary">
			<?php dynamic_sidebar('ld_sidebar'); ?>
		</div><!-- #secondary -->
	</div><!-- .row -->