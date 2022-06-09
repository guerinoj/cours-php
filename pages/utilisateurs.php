<h1>Liste des utilisateurs</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th>Nom d'utilisateur</th>
      <th>Mot de passe</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $user) {
      echo "<tr>";
        echo "<td>" . $user['name'] . "</td><td>" . $user['password'] . "</td>";
      echo "</tr>";
    }

    ?>
  </tbody>
</table>
