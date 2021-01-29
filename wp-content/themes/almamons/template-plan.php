<?php
/*
Template Name: Plan Aktivnosti
*/
?>
<?php get_header();?>

<!-- Section -->


	<div class="wrap">
		<h2 class="other">Plan aktivnosti za 2021:</h2>
		<content>
			<div class="tabele">
			<h3>Januar 2021:</h3>
			<table>
				<tr>
					<th>Datum</th>
					<th>Naziv akcije</th>
					<th>Planina</th>
					<th>Vodič</th>
				</tr>
				<tr>
					<td>16. - 17. januar</td>
					<td>Treskavica 2086m, zimski uspon</td>
					<td>Treskavica, BiH</td>
					<td>Siniša Carević</td>
				</tr>
				<tr>
					<td>23. januar</td>
					<td>Rtanj Extreme 1565m</td>
					<td>Rtanj</td>
					<td>Predrag Grujić</td>
				</tr>
				<tr>
					<td>30. - 31. januar</td>
					<td>Grebenom Visočice na Vito 1960m, zimski uspon</td>
					<td>Visočica, BiH</td>
					<td>Siniša Carević</td>
				</tr>
			</table>

			<h3>Februar 2021:</h3>
			<table>
				<tr>
					<th>Datum</th>
					<th>Naziv akcije</th>
					<th>Planina</th>
					<th>Vodič</th>
				</tr>
				<tr>
					<td>13. februar</td>
					<td>Povlen 1347m</td>
					<td>Povlen, Valjevske planine</td>
					<td>Predrag Grujić</td>
				</tr>
				<tr>
					<td>19. - 21. februar</td>
					<td>Zamrznuti vodopadi Toplog dola</td>
					<td>Stara planina</td>
					<td>Zoltan Farago / Slađana Brković</td>
				</tr>
				<tr>
					<td>26. - 28. februar</td>
					<td>Grintovec 2558m, zimki uspon</td>
					<td>Kamniške Alpe, Slovenija</td>
					<td>Siniša Carević</td>
				</tr>
			</table>

			<h3>Mart 2021:</h3>
			<table>
				<tr>
					<th>Datum</th>
					<th>Naziv akcije</th>
					<th>Planina</th>
					<th>Vodič</th>
				</tr>
				<tr>
					<td>13. mart</td>
					<td>Proleće na Bobiji 1272m</td>
					<td>Tornička Bobija</td>
					<td>Predrag Grujić</td>
				</tr>
				<tr>
					<td>21. mart</td>
					<td>Vojvođanska treking liga</td>
					<td>Subotička peščara</td>
					<td>Vojislav Medić</td>
				</tr>
				<tr>
					<td>26. - 28. mart</td>
					<td>Mala Mojstrovka 2332m i Prisojnik 2547m, zimski uspon</td>
					<td>Julijske Alpe, Slovenija</td>
					<td>Siniša Carević</td>
				</tr>
				<tr>
					<td>27. mart</td>
					<td>Mali 732m i Veliki Vukan 825m</td>
					<td>Homoljske planine</td>
					<td>Zoltan Farago / Slađana Brković</td>
				</tr>
			</table>

			</div>

			<p>Kompletan kalendar za planirane aktivnosti za 2021. godinu možete preuzeti ovde:</p>
			<a class="plan" href="<?php bloginfo('template_directory'); ?>/dnld/plan.pdf">Plan aktivnosti za 2021.</a>

		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>