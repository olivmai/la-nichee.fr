<?php

	if (isset($_GET['page']))
	{
		switch ($_GET['page'])
		{
		  case 'plans':
		    echo "Plans et descriptif de la maison";
		    break;

		  case 'galerie':
		  	echo "Galerie photos de la Nichée";
		    break;

		  case 'tarifs':
		  	echo "Tarifs et disponibilités de la location";
		    break;

		  case 'activites':
		  	echo "Richesse et diversité du patrimoine normand à proximité de la Nichée";
		    break;

		  case 'marches':
		    echo "Calendrier des marchés à proximité de la maison";;
		    break;

		  case 'contact':
		    echo "Formulaire de contact";
		    break;

		  case 'sitemap':
		    echo "Plan du site - La nichée";;
		    break;

		  case 'mentions-legales':
		    echo "Mentions légales - La nichée";
		    break;

		  default:
		    echo "La Nichée - Maison à louer à Barneville Carteret, dans le Cotentin";
		    break;
		}//endswitch
	}//endif
	else
	{
		echo "La Nichée - Maison à louer à Barneville Carteret, dans le Cotentin";
  	}

 ?>