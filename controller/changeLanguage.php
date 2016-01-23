<?php

	session_start();


	if(isset($_GET['lang']))
	  $_SESSION['lang'] = $_GET['lang'];
	else
	  $_SESSION['lang'] = "";

	header('Location: ../index.php');

?>