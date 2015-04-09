<section class="alerte-resultatMail">
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	  	</button>
		<strong>Attention!</strong> Votre message n'a pas pû être envoyé. Merci de réessayer. <?php echo $mail->ErrorInfo; ?>
	</div>
</section>