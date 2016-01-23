<section class="alerte-resultatMail">
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	  	</button>
	  	<?php
	  	if ($_SESSION['lang'] == "en") {
	  		echo "<strong>Warning !</strong> Every field must be filled in. Please, try again.";
	  	}
	  	else {
	  		echo "<strong>Attention !</strong> Vous devez remplir l'ensemble des champs pour envoyer l'email. Merci de réessayer.";
	  	}
	  	?>
	</div>
</section>