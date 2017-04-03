
<div class="list-group">
  <a href="?page=UpdateUser" class="list-group-item">Mettre à jour le profil</a>

  <a href="?page=home" class="list-group-item">Tous les rêves</a>
  <?php
    if ($_SESSION['user']->role !== 'user') {
        echo ('<a href="?page=additem" class="list-group-item">Créer un rêve</a>');
    }
  ?>
  <a href="?page=logout" class="list-group-item">Déconnexion</a>
</div>






<!-- <a href="?page=additem" class="list-group-item">Créer un rêve</a> -->
