<?php if( have_posts() ): while( have_posts() ): the_post();?>

	<p><i>Objavljeno: <?php echo get_the_date(); ?> godine.</i></p>

	<?php the_content();?>

<?php endwhile; else: endif;?>