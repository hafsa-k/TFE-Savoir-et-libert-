<?php get_header(); ?>
	<div class="col-12  col-lg-6" data-aos="fade-up"
     data-aos-duration="3000">
		</div>
		<div class=" decoration mt-5 mb-5"></div>
			<div class="col-12 mt-5 mx-auto" data-aos="fade-up"
     data-aos-duration="3000">
			<h3 align="center">
				NOS DONS
			</h3>
			<div class="decoration6"></div>
		</div>
	<main role="main">

<div class="row p-0 m-0" data-aos="fade-up"
     data-aos-duration="3000">
			
		
			<!-- ct-dons start -->
			<div class="container all ct-dons">
				
			<div class="row">

			<?php 

  			 query_posts('category_name=Dons');

			get_template_part('loop'); ?>

			</div>		
			</div>
		</div>

			<!-- ct-dons End -->
	</main>

<?php get_footer(); ?>
