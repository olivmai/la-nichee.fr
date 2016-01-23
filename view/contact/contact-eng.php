<section>
  <div class="row text-center">
    <h2>Need more informations, want to book ?</h2>
  </div>

  <div class="row">

    <form action="envoiMail.php" method="post" class="col-md-offset-3 col-md-6 col-sm-offset-1 col-sm-10 well">

      <h3>Send us a message :</h3>

        <div class="form-group">
          <label for="nom">Name : </label>
          <input id="nom" type="text" class="form-control" name="nom" autofocus required/>
        </div>

        <div class="form-group">
          <label for="email">E-mail : </label>
          <input id="email" type="email" class="form-control" name="email" required/>
        </div>

        <div class="form-group">
          <label for="objet">Object : </label>
          <input id="objet" type="text" class="form-control" name="objet" required/>
        </div>

        <div class="form-group">
          <label for="message">Message : </label>
          <textarea id="message" class="form-control" name="message" required></textarea>
        </div>

        <input type="submit" value="Send" class="btn btn-primary"/>
        <input type="reset" value="Cancel" class="btn btn-default"/>

    </form>

  </div><!-- ./row -->
</section>