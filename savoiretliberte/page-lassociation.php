<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container">
		<div class="row d-flex ">
				<div class="col-12 col-md-5 mt-5 mb-5">
					<div class="col-12  d-flex justify-content-center justify-content-md-start align-items-center">
						<h1><?php the_title(); ?></h1>
					</div>
					
				</div>
				
			</div>

			<!-- article -->
			<!--<h3>SALUUUT</h3>-->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
		</div>
		</section>
		<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
