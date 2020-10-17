<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
		
		<div class="decoration8 mb-5 mt-5" data-aos="fade-up"
     data-aos-duration="3000"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<div class="row">
				<div class="col-12 col-lg-6" data-aos="fade-up"
     data-aos-duration="3000">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<!-- post thumbnail -->
			<div align="center">
			<img src="https://hafsa.techniques-graphiques.be/savoir-et-liberte/wp-content/themes/savoiretliberte/img/cont/bruno.jpg" width="80%" />
			</div>
			
			<!-- /post thumbnail -->

			<!-- post title -->
			</div>
				<div class="col-12 col-md-12 col-lg-6" data-aos="fade-up"
     data-aos-duration="3000">
			<div class="content-box-testshadow mt-4"><h3>
				<?php the_title(); ?>
			</h3>
			<div class="decoration5"></div>
			<!-- /post title -->

			<!-- post details -->
			<!--<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?></div>

			<?php //the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php// _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php// _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php //comments_template(); ?>
		</div>
		</article>
		</div>			
			</div>
		</div>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<!--<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>-->
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
