<h1>Liste des utilisateurs</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th>Nom d'utilisateur</th>
      <th>Mot de passe</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $user) {
      echo "<tr>";
        echo "<td>" . $user['name'] . "</td><td>" . $user['password'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=utilisateurs&action=delete&id=".$user['id']."'> Supprimer </a>";
        echo " | <a href='index.php?page=utilisateurs&action=update&id=".$user['id']."'> Modifier </a>";
        echo "</td>";
      echo "</tr>";
    }

    ?>
  </tbody>
</table>
