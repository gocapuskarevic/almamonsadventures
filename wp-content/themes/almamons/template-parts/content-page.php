<?php //default page template ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1><?php the_title(); ?></h1>
	    <?php the_content(); ?>
    </div>
    <div class="col-md-4">
      <aside>
				<?php if( is_active_sidebar('page-sidebar') ): ?>
					<?php dynamic_sidebar('page-sidebar'); ?>
				<?php endif; ?>
			</aside>
    </div>
  </div>
	
</div>


<?php if( get_field( 'google_map' ) ) : ?>
  <section class='contact-map'>
    <?php the_field( 'google_map' ); ?>
  </section>


<?php endif; ?>
