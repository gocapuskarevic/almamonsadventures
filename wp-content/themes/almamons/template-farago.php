<?php
/*
Template Name: Zoltan Farago
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<img class="circle" src="<?php bloginfo('template_directory'); ?>/img/zoltan.jpg">
			<p>Datum i mesto rođenja: 11.07.1971. Bačka Topola</p>
			<p>Zanimanje: Profesor fizičkog vaspitanja i diplomirani Kineziterapeut</p>
			<p>Kategorija vodiča: pešački vodič po ERA standardu</p>
			<p>Član PSS od: 2015. godine</p>
			<p>Pohađani kursevi i obuke iz planinarstva: Osnovna planinarska obuka</p>
			<p>Kurs za ERA vodiče :Stručno osposobljavanje kadrova u planinarenju – Operativni trener planinarstva</p>
			<p>Istaknuti ispenjani vrhovi: Stara planina: Midžor (2169), Kopren (1963mnv), Tri Čuke (1937 mnv), Vražja glava (1935mnv); Suva planina: Trem (1810 mnv), Sokolov kamen (1523 mnv), Mosor (985 mnv); Greben planina: Beženište (1338 mnv); Vlaška planina: Panica (1443 mnv); Svrljiške planine: Pleš (1266 mnv); Ruj planina: Ruj (1706 mnv); Rtanj: Šiljak (1565 mnv), Beljanica (1339 mnv); Povlen: Mali Povlen (1347 mnv), Srednji Povlen (1301 mnv), Veliki Povlen (1271 mnv); Homoljske planine: Štubej (940 mnv), Veliki Vukan (825 mnv), Mali Vukan ( 752 mnv); Zelengora: Bregoč (2014 mnv), Vranica: Nadrstac (2112 mnv), Krstac (2069 mnv), Ločika ( 2107mnv); Durmitor: Savin Kuk (2313 mnv).</p>
			<p>Kontakt: 064/65-93-205</p>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>