<?php //default page template ?>


<?php if( get_field( 'google_map' ) ) : ?>
  <section class='contact-map'>
    <?php the_field( 'google_map' ); ?>
  </section>


<?php endif; ?>