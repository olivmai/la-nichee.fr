<section>
  <div class="row text-center">
    <h2>Besoin d'informations, envie de réserver ?</h2>
  </div>

  <div class="row">

    <form action="controller/envoiMail.php" method="post" class="col-md-offset-3 col-md-6 col-sm-offset-1 col-sm-10 well">

      <h3>Laissez-nous un message :</h3>

        <div class="form-group">
          <label for="nom">Nom : </label>
          <input id="nom" type="text" class="form-control" name="nom" autofocus required/>
        </div>

        <div class="form-group">
          <label for="email">E-mail : </label>
          <input id="email" type="email" class="form-control" name="email" required/>
        </div>

        <div class="form-group">
          <label for="objet">Objet : </label>
          <input id="objet" type="text" class="form-control" name="objet" required/>
        </div>

        <div class="form-group">
          <label for="message">Message : </label>
          <textarea id="message" class="form-control" name="message" required></textarea>
        </div>

        <input type="submit" value="Envoyer" class="btn btn-primary"/>
        <input type="reset" value="Annuler" class="btn btn-default"/>

    </form>

  </div><!-- ./row -->
</section>