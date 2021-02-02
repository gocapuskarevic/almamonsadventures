<?php get_header();?>

<?php
		if ( have_posts() ) : ?>
		

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<div class="container">
			<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			
				<?php if(is_page()) $template = 'page';

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', $template );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			<!-- 
				<div class="wrap">
					<h2 class="other"><?php the_title(); ?></h2>
					<content>
						<?php //get_template_part('includes/section','content');?>
					</content>
					<aside>
						<?php //if( is_active_sidebar('page-sidebar') ): ?>
							<?php //dynamic_sidebar('page-sidebar'); ?>
						<?php //endif; ?>
					</aside>
				</div> -->
<?php get_footer();?>