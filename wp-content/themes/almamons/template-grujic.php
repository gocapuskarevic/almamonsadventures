<?php
/*
Template Name: Predrag Grujić
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<img class="circle" src="<?php bloginfo('template_directory'); ?>/img/pedja.jpg">
			<p>Datum i mesto rođenja: 12.2.1970. Srbobran</p>
			<p>Zanimanje: Ing. el. programer</p>
			<p>Kategorija vodiča: planinski vodič III kategorije MB 706</p>
			<p>Član PSS od: 2016. godine</p>
			<p>Pohađani kursevi i obuke iz planinarstva: Kurs za UIAA III</p>
			<p>Istaknuti ispenjani vrhovi:</p>
			<p>2020: <br>
			Berimferrata, Knezevo Republika Srpska BiH, Visocica BiH, Gornjak ferrata, Greben planina, Asenovo kale, Vlaska planina, Vodopadi Izubre, Kosmaj, Rtanj zimski, Sar planina, Stara planina, Stolovi, Trem zimski</p>
			<p>2019: <br>
			Golija zimski, Rtanj zimski, Trem zimski, Tornicka Bobija, Kanjon Tresnjice, Borski Stol, Veliki Krs, Bosna Knezevo – Cvrcka I Ilomska, Divcibare, Djetinja, Maglic, Bobotov kuk, Ples, Ruj, Rumunija ferrataWhiteWolf, Sopotnica, Vlaska planina</p>
			<p>2018: <br>
			Beljanica, DivcibareTijanin uspon, Greben Istocnasrbija, Homoljski maraton veliki, Kablar 'nozevi', Komovi (Kucki, Vajovicki, Ljevorecki), Kosmaj, Lazarev kanjoj i prerast Samar, Mosor, Sokolov kamen, Trem, Nera, Prokletije Severni vrh, Sopotnica, Kanjon Milesevke, Stara planina, vodopadi, Tri Cuke, Kopren...., Suva planina (Mosor, Sokolov i Trem), Taorska vrela, Makedonija Titov vrv zimski uspon, Trem zimski, Vukan veliki i mali</p>
			<p>2017: <br>
			Avala, Cer, Gucevo, Crna reka kanjon, Divcibare, Dolomiti ferrata, Mat i Ari ferrata Kosovo, Berimferrata, Homoljski maraton veliki, Kablar ferrataTurcinovac, Kopaonik, Lazarev kanjon, Povlen, Prokletije, Radocelo, Bugarska Rila Musala, Rtanj, Slovenija Prisojnik, Slovenija Storzic, Slovenija Mojstrovkaferrata, Trem, Slovenija Triglav, Tupiznica, Zlatar i Uvac</p>
			<p>2016: <br>
			Durmitor Savin kuk, Durmitor Bobotov kuk, Petnickapecinaabzajl, Kablar, Sokolov kamen, Stara planina Midzor iz Toplog Dola</p>
			<p>2015: <br>
			Bugarska Belogradchik i Vratsa, Goc, Rtanj, Zlatibor</p>
			<p>Kontakt: 063/584-434</p>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>