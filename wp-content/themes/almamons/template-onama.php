<?php
/*
Template Name: O nama
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<p>Planinarsko društvo Alma Mons Adventures je sportsko udruženje, osnovano 2020. godine u Novom Sadu, u cilju promocije i razvoja planinarskog sporta. Društvo je upisano u registar sportskih udruženja Agencije za privredne registre MB 28727968.<br /><br> Spojila na je jedna misao, zajednička ideja i cilj. Spojila nas je Fruška gora. Zato smo odabrali da u našem nazivu imamo njeno ime, naše panonske kraljice. Rimljani su je zvali “Alma Mons”, što znači plodna gora. Brojni su njeni plodovi, jedan od njih je i predivna priroda koja nam pruža mnogo toga. Zato naša ideja počinju upravo tu, na Fruškoj gori.<br /> <br>Alma Mons Adventures je tim iskusnih planinarskih vodiča koji će vam pružiti nezaboravne avanture iz oblasti planinarskog sporta. Naš cilj je da izađete izvan rutine svakodnevnog života, prepustite se aktivnom odmoru, upoznate nove ljude, svet oko vas, doživite nova iskustva, živite sportskim duhom.<br /> <br>Organizujemo redovna pešačenja Fruškom gorom, sjajne vikend ture u Srbiji i zemljama u okruženju. Učestvujemo u takmičenjima iz planinarskog sporta. Ako želite korak više, da udahnete visine na poseban način, krenite sa nama u visokogorske ture i ekspedicije.<br /> <br>Uživajte u rekreativnom planinarenju ili postignite vrhunske sportske rezulate.</p>
			<h2 class="other2">Uprava:</h2>
			<article>
				<div class="inner2">
					<ul><b>Upravni odbor:</b>
						<li>Siniša Carević - predsednik</li>
						<li>Predrag Grujić – potpredsednik</li>
						<li>Zoltan Farago – sekretar</li>
						<li>Slađana Brković</li>
						<li>Đorđe Veselinov</li>
					</ul>
					<ul><b>Nadzorni odbor:</b>
						<li>Sonja Petrov</li>
						<li>Vladimir Rodić</li>
						<li>Himzo Karišik</li>
					</ul>
					<ul><b>Veće časti:</b>
						<li>Đorđe Vuković</li>
						<li>Ajredin Ajeti</li>
						<li>Vesna Karišik</li>
					</ul>
				</div>
			</article>
			<h2 class="other2">Naši vodiči:</h2>
			<article>
				<div class="inner2">
					<div class="vodic"><img src="<?php bloginfo('template_directory'); ?>/img/sinisa.jpg">
					<a href="https://almamonsadventures.org.rs/sinisa-carevic/">Siniša Carević</a></div>
					<div class="vodic"><img src="<?php bloginfo('template_directory'); ?>/img/pedja.jpg">
					<a href="https://almamonsadventures.org.rs/predrag-grujic/">Predrag Grujić</a></div>
					<div class="vodic"><img src="<?php bloginfo('template_directory'); ?>/img/zoltan.jpg">
					<a href="https://almamonsadventures.org.rs/zoltan-farago/">Zoltan Farago</a></div>
					<div class="vodic"><img src="<?php bloginfo('template_directory'); ?>/img/djordje.jpg">
					<a href="https://almamonsadventures.org.rs/dorde-veselinov/">Đorđe Veselinov</a></div>
					<div class="vodic"><img src="<?php bloginfo('template_directory'); ?>/img/goran.jpg">
					<a href="https://almamonsadventures.org.rs/goran-zubic/">Goran Zubić</a></div>
				</div>
			</article>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>