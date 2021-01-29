<?php
/*
Template Name: Đorđe Veselinov
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<img class="circle" src="<?php bloginfo('template_directory'); ?>/img/djordje.jpg">
			<p>Datum i mesto rođenja: 05.07.1967. Slovenj gradec, Slovenija</p>
			<p>Zanimanje: elektro inženjer</p>
			<p>Kategorija vodiča: planinski vodič III kategorije MB 743</p>
			<p>Član PSS od: 2013. godine</p>
			<p>Pohađani kursevi i obuke iz planinarstva: OPO, kurs za vodiča III kat, zimski alpinistički tečaj</p>
			<p>Istaknuti ispenjani vrhovi: Triglav (Slo) zimski i ljetnji uspon, Škrlatica (Slo), Mojstrovke (Slo), Olimp (Gre), Rila (Bg), Atlas (Mar), Grosglokner (Aus), Gran paradiso (Ita), Mon Blan (Fra), Elbrus (Rus), Kazbek (Gru), Damavand (Ira).</p>
			<p>Kontakt: 065/84-27-106</p>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>