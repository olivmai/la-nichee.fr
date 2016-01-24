<?php

  session_start();

  include 'view/default/template_start.php';

  if ($_SESSION['lang'] == "en") {

    include 'view/default/header-eng.php';
    include 'view/default/nav-eng.php';

    if (isset($_GET['page']))
    {
      switch ($_GET['page']) {
        case 'plans':
        include 'view/plan/plans-eng.php';
        break;

        case 'galerie':
        include 'view/galerie/galerie.php';
        break;

        case 'tarifs':
        include 'view/tarif/tarifs-eng.php';
        break;

        case 'activites':
        include 'view/activite/activites-eng.php';
        break;

        case 'marches':
        include 'view/marche/marches-eng.php';
        break;

        case 'contact':
          if (!empty($_GET['resultat']))
          {
            if ($_GET['resultat']="ok")
            {
              include 'view/contact/confirmationEnvoiMail.php';
              include 'view/home/accueil-eng.php';
            }
            elseif ($_GET['resultat']="erreur")
            {
              include 'views/erreurEnvoiMail.php';
              include 'views/contact-eng.php';
            }
            elseif ($_GET['resultat']="incomplet")
            {
              include 'view/contact/incompletEnvoiMail.php';
              include 'view/contact/contact-eng.php';
            }
            else
            {
              include 'view/contact/contact-eng.php';
            }
          }
          else {
              include 'view/contact/contact-eng.php';
            }
          break;

        case 'sitemap':
        include 'view/sitemap/sitemap-eng.php';
        break;

        case 'mentions-legales':
        include 'view/legal/mentions-legales.php';
        break;

        default:
        include 'view/home/accueil-eng.php';
        break;
      }
    }
    else
    {
      include 'view/home/accueil-eng.php';
    }

    include('view/default/footer-eng.php');

  }

  else {

    include('view/default/header.php');
    include('view/default/nav.php');

    if (isset($_GET['page']))
    {
      switch ($_GET['page']) {
        case 'plans':
        include 'view/plan/plans.php';
        break;

        case 'galerie':
        include 'view/galerie/galerie.php';
        break;

        case 'tarifs':
        include 'view/tarif/tarifs.php';
        break;

        case 'activites':
        include 'view/activite/activites.php';
        break;

        case 'marches':
        include 'view/marche/marches.php';
        break;

        case 'contact':
          if (!empty($_GET['resultat']))
          {
            if ($_GET['resultat']="ok")
            {
              include 'view/contact/confirmationEnvoiMail.php';
              include 'view/home/accueil.php';
            }
            elseif ($_GET['resultat']="erreur")
            {
              include 'views/erreurEnvoiMail.php';
              include 'views/contact.php';
            }
            elseif ($_GET['resultat']="incomplet")
            {
              include 'view/contact/incompletEnvoiMail.php';
              include 'view/contact/contact.php';
            }
            else
            {
              include 'view/contact/contact.php';
            }
          }
          else {
              include 'view/contact/contact.php';
            }
          break;

        case 'sitemap':
        include 'view/sitemap/sitemap.php';
        break;

        case 'mentions-legales':
        include 'view/legal/mentions-legales.php';
        break;

        default:
        include 'view/home/accueil.php';
        break;
      }
    }

    else
    {
      include 'view/home/accueil.php';
    }

    include 'view/default/footer.php';

  }

  include 'view/default/template_end.php';

?>