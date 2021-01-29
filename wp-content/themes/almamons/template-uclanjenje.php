<?php
/*
Template Name: Uclanjenje
*/
?>
<?php get_header();?>

<!-- Section -->

<?php

	// define variables and set to empty values
	$ime_error = $roditelj_error = $prezime_error = $pol_error = $drzava_error = $email_error = $phone_error = $date_error = $adresa_error = $dokument_error = $brdokumenta_error = $plbroj_error = $organizacija_error = $plmarkica_error = $agree_error = "";
	$ime = $roditelj = $prezime = $pol = $drzava = $email = $phone = $date = $adresa = $dokument = $brdokumenta = $plbroj = $plmarkica = $organizacija = $poruka = $agree = $success = "";

	//form is submitted with POST method
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["ime"])) {
	    $ime_error = "Molim Vas unesite Vaše ime.";
	  } else {
	    $ime = test_input($_POST["ime"]);
	    // check if name only contains letters and whitespace
	  }

	  if (empty($_POST["roditelj"])) {
	    $roditelj_error = "Molim Vas unesite ime jednog roditelja.";
	  } else {
	    $roditelj = test_input($_POST["roditelj"]);
	    // check if name only contains letters and whitespace
	  }

	  if (empty($_POST["prezime"])) {
	    $prezime_error = "Molim Vas unesite Vaše prezime.";
	  } else {
	    $prezime = test_input($_POST["prezime"]);
	    // check if name only contains letters and whitespace
	  }

	  if (empty($_POST["drzava"])) {
	    $drzava_error = "Potrebno je da izaberete Vaše državljanstvo.";
	  } else {
	    $drzava = test_input($_POST["drzava"]);
	  }

	  if (empty($_POST["pol"])) {
	    $pol_error = "Potrebno je da izaberete Vaš pol.";
	  } else {
	    $pol = test_input($_POST["pol"]);
	  }

	  if (empty($_POST["dokument"])) {
	    $dokument_error = "Potrebno je da izaberete Vaš dokument.";
	  } else {
	    $dokument = test_input($_POST["dokument"]);
	  }

	  if (empty($_POST["email"])) {
	    $email_error = "Molimo Vas unesite Vaš e-mail.";
	  } else {
	    $email = test_input($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $email_error = "Neispravan format za e-mail."; 
	    }
	  }
	  
	  if (empty($_POST["phone"])) {
	    $phone_error = "Unesite Vaš broj telefona.";
	  } else {
	    $phone = test_input($_POST["phone"]);
	    // check if e-mail address is well-formed
	    if (!preg_match("/^\+?(\d[.\- ]*){9,14}$/i",$phone)) {
	      $phone_error = "Neispravan format za broj telefona."; 
	    }
	  }

	  if (empty($_POST["date"])) {
	    $date_error = "Izaberite Vaš datum rođenja.";
	  } else {
	    $date = test_input($_POST["date"]);
	  }

	  if (empty($_POST["adresa"])) {
	    $adresa_error = "Unesite Vašu adresu prebivališta.";
	  } else {
	    $adresa = test_input($_POST["adresa"]);
	  }

	  if (empty($_POST["brdokumenta"])) {
	    $brdokumenta_error = "Unesite broj ličnog dokumenta.";
	  } else {
	    $brdokumenta = test_input($_POST["brdokumenta"]);
	  }

	  if (empty($_POST["plbroj"])) {
	    $plbroj_error = "Unesite broj Vaše planinarske legitimacije.";
	  } else {
	    $plbroj = test_input($_POST["plbroj"]);
	  }

	  if (empty($_POST["plmarkica"])) {
	    $plmarkica_error = "Unesite broj Vaše planinarske markice.";
	  } else {
	    $plmarkica = test_input($_POST["plmarkica"]);
	  }

	  if (empty($_POST["organizacija"])) {
	    $organizacija_error = "Unesite ime osnovne planinarske organizacije.";
	  } else {
	    $organizacija = test_input($_POST["organizacija"]);
	  }

	  if (empty($_POST["poruka"])) {
	    $poruka = "";
	  } else {
	    $poruka = test_input($_POST["poruka"]);
	  }

	  if (empty($_POST["agree"])) {
	    $agree_error = "Ako su svi podaci ispravno uneti kliknite na kvadratić za čekiranje.";
	  } else {
	    $agree = test_input($_POST["agree"]);
	  }
	  
	  if ($ime_error == '' and $roditelj_error == '' and $prezime_error == '' and $pol_error == '' and $drzava_error == '' and $email_error == '' and $phone_error == '' and $date_error == '' and $adresa_error == '' and $dokument_error == '' and $brdokumenta_error == '' and $plbroj_error == '' and $organizacija_error == '' and $plmarkica_error == '' and $agree_error == '' ){
	      $message_body = '';
	      unset($_POST['submit']);
	      foreach ($_POST as $key => $value){
	          $message_body .=  "$key: $value\n";
	      }
	      
	      $to = 'join-us@almamonsadventures.org.rs';
	      $subject = 'Contact Form: ' . $ime;
	      $headers = 'From: almamons@carl.dnsserve.rs' . "\r\n" .
					 'Reply-To: ' . $email . "\r\n" .
					 'X-Mailer: PHP/' . phpversion();
	      if (mail($to, $subject, $message_body, $headers)){
	          $success = "Vaša pristupnica za članstvo je poslata";
	          $ime = $roditelj = $prezime = $pol = $drzava = $email = $phone = $date = $adresa = $dokument = $brdokumenta = $plbroj = $plmarkica = $organizacija = $poruka = $agree = "";
	      }
	  }
	  
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>

	<div class="wrap">
		<h2 class="other"><?php the_title(); ?></h2>
		<content>
			<p>Drage planinarke i planinari, kako bi ste postali naš član i deo tima koji će vam pružiti nezaboravne avanture iz planinarskog sporta, potrebno je da popunite podatke na osnovu kojih će vam biti izrađena članska kartica Planinarskog saveza Srbije i da uplatite članarinu za 2021. godinu:</p>
			<p><b>Punoletne osobe:</b> 1200,00 RSD <br> <b>Studenti:</b> 1000,00 RSD <br> <b>Deca do 14 godina:</b> 600,00 RSD</p>
			<br>
			<p>Primer uplatnice:</p>
			<img class="nalog" src="<?php bloginfo('template_directory'); ?>/img/nalog.jpg">
			<br>
			<img class="full" src="<?php bloginfo('template_directory'); ?>/img/qr_uplata.png">
			<p>QR kod za plaćanje preko mobilne aplikacije elektronskog bankarstva preko opcije IPS.</p>
			<br>
			<p>Šta Vam sve omogućava članstvo...<br><br>
Članstvom u našem društvu stičete pravo da učestvujete u planinarskim aktivnostima u zemlji i inostranstvu u organizaciji našeg društva kao i ostalih društava/klubova koji su članovi Planinarskog saveza Srbije. <br><br>
Učlanjenjem stičete mogućnost za učestvovanje na obukama iz planinarskih veština i sticanje raznovrsnih znanja o planini i prirodi u organizaciji Planinarskog saveza Srbije. Možete se opredeliti da postanete visokogorac, alpinista, planinski vodič, sportski penjač, speleolog-planinar, gorski spasilac, orijentirac. <br><br>
Svi članovi koji poseduju planinarsku karticu sa plaćenom članarinom za tekuću godinu poseduju osiguranje koje je uključeno u cenu članarine. Više informacija o osiguranju možete pročitati OVDE: <br><br>
<a href="https://pss.rs/osiguranje-clanova-planinarskog-saveza-srbije-za-2021-godinu/" target="_blank" class="vodic-link">Osiguranje članova Planinarskog saveza Srbije za 2021. godinu</a> <br><br>
Takođe, planinarska kartica vam omogućava pogodnosti prilikom boravka u planinarskim domovima u našoj zemlji i drugim državama, kao i popuste u specijalizovanim prodavnicima planinarske opreme.
</p>
<h3>POSTANITE DEO TIMA, UŽIVAJTE U NAJZDRAVIJEM SPORTU.</h3>
			<form class="kontakt" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
			<fieldset>
				<input class="form-control" type="text" name="ime" value="<?= $ime ?>" placeholder="Vaše ime">
				<span class="error"><?= $ime_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="roditelj" value="<?= $roditelj ?>" placeholder="Ime jednog roditelja">
				<span class="error"><?= $roditelj_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="prezime" value="<?= $prezime ?>" placeholder="Vaše prezime">
				<span class="error"><?= $prezime_error ?></span>
			</fieldset>
			<fieldset>
				<select class="form-control" name="pol" value="<?= $pol ?>" >
					<option value="">Pol:</option>
					<option <?php echo $pol=='Muški'?'selected':''; ?> >Muški</option>
					<option <?php echo $pol=='Ženski'?'selected':''; ?> >Ženski</option>
				</select>
				<span class="error"><?= $pol_error ?></span>
			</fieldset>
				<input class="form-control" placeholder="Datum rođenja:" type="text" name="date" value="<?= $date ?>" onfocus="(this.type='date')" onblur="(this.type='text')" max="2120-01-01" min="1900-01-01" required pattern="\d{4}-\d{2}-\d{2}">
				<span class="error"><?= $date_error ?></span>
			<fieldset>
				<select class="form-control" name="drzava" value="<?= $drzava ?>" >
					<option value="">Državljanstvo:</option>
					<option <?php echo $drzava=='Srbija'?'selected':''; ?> >Srbija</option>
					<option <?php echo $drzava=='Hrvatska'?'selected':''; ?> >Hrvatska</option>
					<option <?php echo $drzava=='Bosna i Hercegovina'?'selected':''; ?> >Bosna i Hercegovina</option>
					<option <?php echo $drzava=='Crna Gora'?'selected':''; ?> >Crna Gora</option>
					<option <?php echo $drzava=='Slovenija'?'selected':''; ?> >Slovenija</option>
					<option <?php echo $drzava=='Severna Makedonija'?'selected':''; ?> >Severna Makedonija</option>
					<option <?php echo $drzava=='Madjarska'?'selected':''; ?> >Madjarska</option>
					<option <?php echo $drzava=='Bugarska'?'selected':''; ?> >Bugarska</option>
					<option <?php echo $drzava=='Rumunija'?'selected':''; ?> >Rumunija</option>
				</select>
				<span class="error"><?= $drzava_error ?></span>
			</fieldset>	
			<fieldset>
				<input class="form-control" type="text" name="adresa" value="<?= $adresa ?>" placeholder="Adresa prebivališta">
				<span class="error"><?= $adresa_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="phone" value="<?= $phone ?>" placeholder="Vaš telefon">
				<span class="error"><?= $phone_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="email" name="email" value="<?= $email ?>" placeholder="E-mail">
				<span class="error"><?= $email_error ?></span>
			</fieldset>
			<fieldset>
				<select class="form-control" name="dokument" value="<?= $dokument ?>" >
					<option value="">Tip dokumenta:</option>
					<option <?php echo $dokument=='Lična karta'?'selected':''; ?> >Lična karta</option>
					<option <?php echo $dokument=='Pasoš'?'selected':''; ?> >Pasoš</option>
				</select>
				<span class="error"><?= $dokument_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="brdokumenta" value="<?= $brdokumenta ?>" placeholder="Broj ličnog dokumenta">
				<span class="error"><?= $brdokumenta_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="plbroj" value="<?= $plbroj ?>" placeholder="Br. planinarske legitimacije">
				<span class="error"><?= $plbroj_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="plmarkica" value="<?= $plmarkica ?>" placeholder="Br. planinarske markice">
				<span class="error"><?= $plmarkica_error ?></span>
			</fieldset>
			<fieldset>
				<input class="form-control" type="text" name="organizacija" value="<?= $organizacija ?>" placeholder="Ime osnovne planinarske organizacije">
				<span class="error"><?= $organizacija_error ?></span>
			</fieldset>
				<textarea class="form-control" name="poruka" rows="5" value="<?= $poruka ?>" placeholder="Napomena"></textarea>
				<fieldset>
				<input type="checkbox" name="agree" id="agree" <?php echo (empty($_POST['agree'])) ? '':'checked' ?> ><label> Sve infromacije koje šaljem su ispravno unete u zadata polja.</label><br>
				<span class="error"><?= $agree_error ?></span>
				</fieldset>
				<button class="form-button" name="submit" type="submit" data-submit="... Sending">Postani član</button>
				<div class="success"><?= $success ?></div>
			</form>
		</content>
		<aside>
			<?php if( is_active_sidebar('page-sidebar') ): ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</aside>
	</div>

<?php get_footer();?>