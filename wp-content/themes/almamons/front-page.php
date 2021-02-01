<?php get_header(); ?>
	<div class="hero">
		<div class="slides">
			<div class="slide s1">
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg">
			</div>
	</div></div>

<!-- Section -->

	<div class="wrap">
		<h2 class="avantura">Avantura počinje sa nama</h2>
		<content>
 
				<?php 
				// Define our WP Query Parameters
				$the_query = new WP_Query( 'posts_per_page=5' ); ?>
				  
				 
				<?php 
				// Start our WP Query
				while ($the_query -> have_posts()) : $the_query -> the_post(); 
				// Display the Post Title with Hyperlink
				?>
				  
			<article> 
				<h2><?php the_title();?></h2>
				<div class="inner">
					<div class="left">
						<img src="<?php the_post_thumbnail_url();?>">
						<a href="<?php the_permalink();?>">Saznajte više</a>
					</div>
				  
				 
				<?php the_excerpt();?>
					</div>

					
			</article>
				  
				 
				<?php 
				// Repeat the process and reset once it hits the limit
				endwhile;
				wp_reset_postdata();
				?>
		</content>	

		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

	
<?php get_footer(); ?>