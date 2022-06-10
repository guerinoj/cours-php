<!-- Formulaire d'inscription -->
<div class="d-flex justify-content-center">
  <form action="/index.php?page=utilisateurs&action=save" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="mb-3">
      <h2>Mis à jour de <?= $user['name'] ?></h2>
    </div>
    <div class="mb-3">
      <label for="createLogin" class="form-label">Identifiant</label>
      <input type="text" class="form-control" id="createLogin" name="login" value="<?= $user['name'] ?>">
    </div>
    <div class="mb-3">
      <label for="createPassword" class="form-label">Mot de passe</label>
      <input type="text" class="form-control" id="createPassword" name="password" value="<?= $user['password'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
  </form>

</div>