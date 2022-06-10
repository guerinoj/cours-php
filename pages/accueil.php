<h1>Bienvenue sur notre nouveau site tout frais tout beau !</h1>

<?php
foreach($posts as $post){
  ?>
  <div class="row">
    <h2> <?= $post['title'] ?></h2> 
    <p><?= $post['content'] ?></p>

  </div>
  <?php
}