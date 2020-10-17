<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="col-12  col-lg-6 " data-aos="fade-up"
     data-aos-duration="3000">
		</div>
			<div class="decoration" data-aos="fade-up"
     data-aos-duration="3000"></div>
			<div data-aos="fade-up">
			
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
