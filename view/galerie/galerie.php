<section>

    <div class="row text-center">
        <?php
            if ($_SESSION['lang'] == "en") {
                echo "<h1>Photo gallery</h1>";
            }
            else {
                echo "<h1>Galerie</h1>";
            }
        ?>
    </div>

    <div class="row">
        <ul id="lightGallery">
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/chambre-anis.jpg">
                <img src="asset/img/galerie/chambre-anis.jpg" alt="Chambres anis">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/chambre-iris.jpg">
                <img src="asset/img/galerie/chambre-iris.jpg" alt="Chambre iris">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/chambre-rose.jpg">
                <img src="asset/img/galerie/chambre-rose.jpg" alt="Chambre rose">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/chambre-rdc.JPG">
                <img src="asset/img/galerie/chambre-rdc.JPG" alt="Chambre du rez de chaussée">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/coin_salleamanger.jpg">
                <img src="asset/img/galerie/coin_salleamanger.jpg" alt="Salle à manger">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/coin_salon.JPG">
                <img src="asset/img/galerie/coin_salon.JPG" alt="Coin salon">
            </li>
               <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/cuisine.jpg">
                <img src="asset/img/galerie/cuisine.jpg" alt="Cuisine">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/facade-jardin.jpg">
                <img src="asset/img/galerie/facade-jardin.jpg" alt="Façade côté jardin">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/jardin-salon.jpg">
                <img src="asset/img/galerie/jardin-salon.jpg" alt="Salon de jardin">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/cabine-02.jpg">
                <img src="asset/img/galerie/cabine-02.jpg" alt="Les cabines de la plage">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/cote-03.jpg">
                <img src="asset/img/galerie/cote-03.jpg" alt="Vue de la cote de Carteret">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/falaise-03.jpg">
                <img src="asset/img/galerie/falaise-03.jpg" alt="Vue de la falaise">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/plage-04.jpg">
                <img src="asset/img/galerie/plage-04.jpg" alt="Plage de Carteret">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/port-02.jpg">
                <img src="asset/img/galerie/port-02.jpg" alt="Port de Carteret">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/port-04.jpg">
                <img src="asset/img/galerie/port-04.jpg" alt="Port de Carteret">
            </li>
            <li class="thumbnail col-md-3 col-sm-4 col-xs-6" data-src="asset/img/galerie/potiniere-01.jpg">
                <img src="asset/img/galerie/potiniere-01.jpg" alt="La 'potiniere' sur la plage">
            </li>
        </ul>
    </div><!-- /.row -->

</section>