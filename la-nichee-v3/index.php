<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php

      include('controlers/title.php');

     ?></title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
    <link href="ressources/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link type="text/css" href="ressources/css/style.css" rel="stylesheet"/>
    <link type="text/css" href="ressources/css/lightGallery.css" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>

    <?php include_once("analyticstracking.php") ?>

    <div class="container">

      <?php

        include('views/header.php');

          if (isset($_GET['page']))
          {
            switch ($_GET['page']) {
              case 'plans':
                include('views/plans.php');
                break;

              case 'galerie':
                include('views/galerie.php');
                break;

              case 'tarifs':
                include('views/tarifs.php');
                break;

              case 'activites':
                include('views/activites.php');
                break;

              case 'marches':
                include('views/marches.php');
                break;

              case 'contact':
                if (!empty($_GET['resultat'])) 
                {
                  if ($_GET['resultat']="ok") 
                  {
                    include('views/confirmationEnvoiMail.php');
                    include('views/accueil.php');
                  }
                  elseif ($_GET['resultat']="erreur")
                  {
                    include('views/erreurEnvoiMail.php');
                    include('views/contact.php');
                  }
                  elseif ($_GET['resultat']="incomplet")
                  {
                    include('views/incompletEnvoiMail.php');
                    include('views/contact.php');
                  }
                  else
                  {
                    include('views/contact.php');
                  }
                }
                else
                  {
                    include('views/contact.php');
                  }
                break;

              case 'sitemap':
                include('views/sitemap.php');
                break;

              case 'mentions-legales':
                include('views/mentions-legales.php');
                break;

              default:
                include('views/accueil.php');
                break;
            }
          }
          else
          {
            include('views/accueil.php');
          }

        include('views/footer.php');

      ?>

    </div><!-- </.container> -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <!-- Javascript de Bootstrap -->
    <script src="ressources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Plugin "Galerie" Jquery -->
    <script src="ressources/js/lightGallery.min.js" type="text/javascript"></script>
    <!-- Script perso Jquery -->
    <script src="ressources/js/la-nichee-bs.js" type="text/javascript"></script>

  </body>

</html>