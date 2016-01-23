<section class="alerte-resultatMail">
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</button>
		<?php
		if ($_SESSION['lang'] == "en") {
			echo "Your mesage has been sent successfuly ! We'll answer as soon as possible.";
		}
		else {
			echo "Votre message a bien été envoyé ! Nous prendrons soins de vous répondre dans les plus brefs délais.";
		}
		?>
	</div>
</section>