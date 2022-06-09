<header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Mon Super Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?page=contact">Contactez nous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?page=info">Informations</a>
          </li>
          <li class="nav-item">
            <?php
            if (isset($_SESSION["user"])) {
            ?> 
              <a class="nav-link" href="/?page=deconnexion">Déconnexion</a>
            <?php
            } else {
            ?>
              <a class="nav-link" href="/?page=connexion">Connexion</a>
            <?php
            }
            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?page=utilisateurs">Utilisateurs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>