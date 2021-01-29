<?php
/*
Template Name: Sinisa Carevic
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<img class="circle" src="<?php bloginfo('template_directory'); ?>/img/sinisa.jpg">
			<p>Datum i mesto rođenja: 10.12.1983. godine, Karlovac, Hrvatska.</p>
			<p>Zanimanje: diplomirani pravnik</p>
			<p>Kategorija vodiča: planinski vodič III kategorije MB 689</p>
			<p>Član PSS od: 2015. godine</p>
			<p>Pohađani kursevi i obuke iz planinarstva: osnovna plaininarska obuka, kurs iz planinarske orijentacije, obuka za vodiča III kategorije, letnji alpinistički tečaj, zvanje sportski vodič na Fakultetu za sport.</p>
			<p>Istaknuti ispenjani vrhovi: Jbel Toubkal 4167 m, Hoher Sonblick 3016 m, Musala 2925 m, Mangart 2679 m, Grintovec 2558 m, Prisojnik 2547 m, Zla Kolata 2534 m, Sjeverni vrh Karanfila 2460 m, Vasojevićki kom 2461 m, Maglić 2386 m.</p>
			<p>Oblast interesovanja visokogorski usponi u letnjim i zimskim ulsovima. Planine Crne Gore, Bosne i Hercegovine, Alpe.</p>
			<p>Kontakt: 064/11-40-264</p>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>