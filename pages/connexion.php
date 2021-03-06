<h1 class="text-center">Connexion</h1>
<div class="d-flex justify-content-center">
  <form action="/index.php?page=connexionForm" method="post">
    <div class="mb-3">
      <label for="login" class="form-label">Identifiant</label>
      <input type="text" class="form-control" id="login" name="login" 
      <?php
          if (isset($_COOKIE['user']))
            echo "value='" . $_COOKIE['user'] . "'";
          ?>>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

<!-- Formulaire d'inscription -->
<div class="d-flex justify-content-center">
  <form action="/index.php?page=utilisateurs&action=create" method="post">
    <div class="mb-3">
      <p>Pas encore inscrit ? C'est le moment d'agir !!</p>
    </div>
    <div class="mb-3">
      <label for="createLogin" class="form-label">Identifiant</label>
      <input type="text" class="form-control" id="createLogin" name="login">
    </div>
    <div class="mb-3">
      <label for="createPassword" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="createPassword" name="password">
    </div>

    <button type="submit" class="btn btn-primary">S'inscrire</button>
  </form>

</div>