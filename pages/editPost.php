<h1>Modification d'un article</h1>
<form action="index.php?page=articles&action=create" method="post">
  <div class="row">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" placeholder="Saisir titre">
  </div>
  <div class="row">
    <label for="content">Contenu</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
  </div>
  <div class="row">
    <button type="submit" class="btn btn-success">Publier</button>
  </div>
</form>