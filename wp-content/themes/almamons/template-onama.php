<?php
/*
Template Name: O nama
*/

$args = array(
  'posts_per_page'  => 3,
  'post_type'       => 'vodici',
  'orderby'         => 'date',
  'order'           => 'ASC',
);
$guides = new WP_Query($args);

?>
<?php get_header();?>

	<div class="hero_default" style="background: url('<?php the_field('hero_image'); ?>')center/cover no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="main-wrapper about">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Planinarsko društvo Alma Mons Adventures je sportsko udruženje, osnovano 2020. godine u Novom Sadu, u cilju promocije i razvoja planinarskog sporta. Društvo je upisano u registar sportskih udruženja Agencije za privredne registre MB 28727968.<br /><br> Spojila na je jedna misao, zajednička ideja i cilj. Spojila nas je Fruška gora. Zato smo odabrali da u našem nazivu imamo njeno ime, naše panonske kraljice. Rimljani su je zvali “Alma Mons”, što znači plodna gora. Brojni su njeni plodovi, jedan od njih je i predivna priroda koja nam pruža mnogo toga. Zato naša ideja počinju upravo tu, na Fruškoj gori.<br /> <br>Alma Mons Adventures je tim iskusnih planinarskih vodiča koji će vam pružiti nezaboravne avanture iz oblasti planinarskog sporta. Naš cilj je da izađete izvan rutine svakodnevnog života, prepustite se aktivnom odmoru, upoznate nove ljude, svet oko vas, doživite nova iskustva, živite sportskim duhom.<br /> <br>Organizujemo redovna pešačenja Fruškom gorom, sjajne vikend ture u Srbiji i zemljama u okruženju. Učestvujemo u takmičenjima iz planinarskog sporta. Ako želite korak više, da udahnete visine na poseban način, krenite sa nama u visokogorske ture i ekspedicije.<br /> <br>Uživajte u rekreativnom planinarenju ili postignite vrhunske sportske rezulate.</p>
					<h2>Uprava:</h2>
					<article class='flex'>
						<div class="flex_item">
							<p><b>Upravni odbor:</b></p>
							<ul>
								<li>Siniša Carević - predsednik</li>
								<li>Predrag Grujić – potpredsednik</li>
								<li>Zoltan Farago – sekretar</li>
								<li>Slađana Brković</li>
								<li>Đorđe Veselinov</li>
							</ul>
						</div>
						<div class="flex_item">
							<p><b>Nadzorni odbor:</b></p>
							<ul>
								<li>Sonja Petrov</li>
								<li>Vladimir Rodić</li>
								<li>Himzo Karišik</li>
							</ul>
						</div>
						<div class="flex_item">
							<p><b>Veće časti:</b></p>
							<ul>
								<li>Đorđe Vuković</li>
								<li>Ajredin Ajeti</li>
								<li>Vesna Karišik</li>
							</ul>
						</div>
					</article>
				</div>
				<div class="col-12">
					<h2>Naši vodiči:</h2>
				</div>
				<?php if ( $guides->have_posts() ) : ?>
        <?php while ( $guides->have_posts() ) : $guides->the_post(); ?>
          <div class="col-md-6 col-lg-4">
						<div class="image_wrapper">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Slika vodiča">
						</div>
						<a class="primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php _e( 'Žao nam je, trenutno nemamo nijednog vodiča.' ); ?></p>
      <?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer();?>