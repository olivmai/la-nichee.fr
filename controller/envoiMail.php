<?php

	require_once('phpMailer/class.phpmailer.php');

	if (!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['objet']))
	{

		$destinataire = "jf.mairet@free.fr";
		$expediteur = htmlspecialchars($_POST['nom']);
		$mailExpediteur = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
		$objet = htmlspecialchars($_POST['objet']);

		$mail = new PHPMailer();
		$mail -> isSMTP();
		$mail -> SMTPAuth = false;
		$mail -> Host = "mailout.one.com";
		$mail -> Username = "";
		$mail -> Password = "";
		$mail -> Port = 25;
		$mail -> Sender = "contact@la-nichee.fr";
		$mail -> SMTPDebug = true;
		$mail -> IsHTML(true);
		$mail -> CharSet = "UTF-8";
		$mail -> From = "contact@la-nichee.fr";
		$mail -> FromName = "La Nichée";
		$mail -> AddAddress($destinataire);
		$mail -> Subject = "[la-nichee.fr] : " .$objet;
		$mail -> Body = "Bonjour,<br>vous avez reçu un message d'un visiteur du site la-nichee.fr.<br><br><strong>Message de :</strong><br>".$expediteur."<br><br><strong>Adresse mail :</strong><br>".$mailExpediteur."<br><br><strong>Message :</strong><br>".$message;
		$mail -> WordWrap = 150;
		$mail -> SMTPDebug = 1;

		if($mail->Send())
		{
			header("location:index.php?page=contact&resultat=ok");
		}
		else
		{
			header("location:index.php?page=contact&resultat=erreur");
		}

	}

	else
	{
		header("location:index.php?page=contact&resultat=incomplet");
	}

?>