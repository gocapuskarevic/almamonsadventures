<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>Alma Mons Adventures</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/site.webmanifest">

	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ef420427c7.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container navigations">
    <div class="row">
      <div class="col">
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
					</a>
  			</div>
			</div>
		</div>
	</div>
	
	<header>
    <div class="container navigations">
      <div class="row">
        <div class="col">
          <div class="menu-primary">
            <div>
            </div>
            <nav class="navbar navbar-expand-xl navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
								<i class="fas fa-bars"></i>
								</span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php 
								wp_nav_menu(
									array(
									'theme_location' => 'top-menu',
									)
								);
							?>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
		