<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>Alma Mons Adventures</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/site.webmanifest">

	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

</head>

<body>

	<header>
		<a class="logo" href="">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
		</a>
		<nav>
		<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
				)
			);
		?>

		<a href="#" class="icon">
        	<span class="fa fa-bars"></span>
      	</a>
      	</nav>
	</header>