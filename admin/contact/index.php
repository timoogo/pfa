<!-- CETTE PAGE C'EST UN RESUME POUR AJOUTER / SUPPRIMER / METTRE A JOUR UN CONTACT -->


<header>
    <link rel="stylesheet" href="../../ressources/css/admin.css">
</header>
<?php
session_start();
// ! A rajouter au debut de chaque fonctionnalité admin
if(empty($_SESSION['user'])) 
{
  header('Location: ../../connexion.php');
  
  exit();
}
?>
<div id="wrapper">
  
  <h1>Liste des contacts</h1>
<hr>
<!-- <h2>Si vous voulez accéder aux détails d'un utilisateur admin, cliquez sur son nom. Si vous voulez le supprimer cliquez sur "x"</h2> -->
<?php include "show.php" ?>



<!--  -->
<hr>
  
  
<footer>
<div class="admin_disconnect">
    <a href="../logout.php"> se déconnecter </a>
  </div>
</footer>
</div>