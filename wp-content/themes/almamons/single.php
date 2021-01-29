<?php get_header();?>

<!-- Section -->

	<div class="wrap">
		<h2 class="other"><?php the_title();?></h2>
		<content>
				<img src="<?php the_post_thumbnail_url();?>" class="mid">
			<?php get_template_part('includes/section','blogpost');?>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>