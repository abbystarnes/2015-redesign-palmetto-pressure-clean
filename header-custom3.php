<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		 <!-- Bootstrap -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    	<!-- fontawesome -->
    	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		



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

		<div class="container-fluid">
			
			<!-- header -->
			<header id="" role="banner">
					<div class='col-xs-12 header includeTitle clear'>
					<!-- logo -->
						<div class="wrapper">

							<h1><a class="logo includeTitleLogo" href="<?php echo home_url(); ?>">Palmetto Pressure Clean Logo</a></h1>
							
							<ul class="contact">
								<li><a href="tel://803-467-7887">803.467.7887</a></li>
								<li><a href="mailto:info@PalmettoPressureClean.com"><i class="fa fa-envelope"></i> Email</a></li>
								<li><a href="">Pay Bill</a></li>
							</ul>
							<h1 class="addTitle">Commercial Services</h1>
						</div>
					<!-- /logo -->
					</div>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
