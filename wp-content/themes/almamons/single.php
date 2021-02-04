<?php get_header();?>

<!-- Section -->
<?php if(is_singular('vodici')) $string="circle"; else $string = 'mid'; ?>

	<div class="wrap">
		<h2 class="other"><?php the_title();?></h2>
		<content>
				<img src="<?php the_post_thumbnail_url();?>" class="<?php echo $string; ?>">
			<?php get_template_part('includes/section','blogpost');?>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>