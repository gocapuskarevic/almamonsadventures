<?php
/*
Template Name: Goran Zubić
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<img class="circle" src="<?php bloginfo('template_directory'); ?>/img/goran.jpg">
			<p>Datum i mesto rođenja: 17.05.1977. Livno, BiH</p>
			<p>Zanimanje: Strukovni menadžer</p>
			<p>Kategorija vodiča: Licencirani planinski vodič II kategorije PSS-a, MB 182</p>
			<p>Član PSS od: 1998. godine</p>
			<p>Pohađani kursevi i obuke iz planinarstva: Osnovna planinarska škola, Obuka za markiranje, Obuka za vodiča 3. kategorije, obuka za vodiča 2. kategorije, Obuka za sportskog vodiča, Obuka za operativnog trenera.</p>
			<p>Istaknuti ispenjani vrhovi: Musala 2.925m/nm, Botev 2.376 m/nm, Goverla 2.061 m/nm.</p>
			<p>Kontakt: 063/82-50-805</p>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>