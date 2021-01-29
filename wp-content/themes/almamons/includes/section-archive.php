<?php if( have_posts() ): while( have_posts() ): the_post();?>

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

<?php endwhile; else: endif;?>