<section class="alerte-resultatMail">
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	  	</button>
	  	<?php
	  	if ($_SESSION['lang'] == "en") {
	  		echo "<strong>Warning !</strong> Your message was not delivered. Please, try again. ".$mail->ErrorInfo;
	  	}
	  	else {
	  		echo "<strong>Attention !</strong> Votre message n'a pas pû être envoyé. Merci de réessayer. ".$mail->ErrorInfo;
	  	}
	  	?>
	</div>
</section>