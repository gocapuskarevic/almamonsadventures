<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header();?>

<!-- Section -->

<?php

	// define variables and set to empty values
	$name_error = $email_error = "";
	$name = $email =  $message =  $success = "";

	//form is submitted with POST method
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $name_error = "Molim Vas unesite Vaše ime.";
	  } else {
	    $name = test_input($_POST["name"]);
	    // check if name only contains letters and whitespace
	    
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

	  if (empty($_POST["message"])) {
	    $message = "";
	  } else {
	    $message = test_input($_POST["message"]);
	  }
	  
	  if ($name_error == '' and $email_error == '' ){
	      $message_body = '';
	      unset($_POST['submit']);
	      foreach ($_POST as $key => $value){
	          $message_body .=  "$key: $value\n";
	      }
	      
	      $to = 'contact@almamonsadventures.org.rs';
	      $subject = 'Contact Form: ' . $name;
	      $headers = 'From: almamons@carl.dnsserve.rs' . "\r\n" .
					 'Reply-To: ' . $email . "\r\n" .
					 'X-Mailer: PHP/' . phpversion();
	      if (mail($to, $subject, $message_body, $headers)){
	          $success = "Vaša poruka je poslata";
	          $name = $email = $message = '';
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
			<form class="kontakt" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
				<fieldset>
					<input class="form-control" type="text" name="name" value="<?= $name ?>" placeholder="Vaše ime" tabindex="1" autofocus>
					<span class="error"><?= $name_error ?></span>
				</fieldset>
				<fieldset>
					<input class="form-control" type="email" name="email" value="<?= $email ?>" placeholder="E-mail" tabindex="2">
					<span class="error"><?= $email_error ?></span>
				</fieldset>
				<fieldset>
				<textarea class="form-control" name="message" rows="5" value="<?= $message ?>" placeholder="Vaša poruka" tabindex="3"></textarea>
				</fieldset>
				<button class="form-button" name="submit" type="submit" data-submit="... Sending">Pošaljite poruku</button>
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