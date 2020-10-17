<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Montserrat" rel="stylesheet">	
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/scss/bootstrap.min.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	<div class="loader">
		<img src="<?php echo get_template_directory_uri(); ?>/img/gif.gif" alt="gif">
	</div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			<!-- NAV HMTL 5blank-->

				<nav class="navbar navbar-expand-lg fixed-top nav navbar-light w-100">
<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="150"  alt="logo">
						</a>
							
							 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
							 
							 <?php html5blank_nav(); ?>
						  
						</div> 
					</nav>
			<!-- /nav html 5 blank-->



			</header>
			<!-- /header -->
