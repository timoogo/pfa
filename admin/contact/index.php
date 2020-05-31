<!-- CETTE PAGE C'EST UN RESUME POUR AJOUTER / SUPPRIMER / METTRE A JOUR UN CONTACT -->


 <head>
    <link rel="stylesheet" href="../../ressources/css/admin.css">
    <title>Contacts</title>
</head> 
<?php
// ! A rajouter au debut de chaque fonctionnalité admin
session_start();
if(empty($_SESSION['user'])) 
{
  header('Location: ../../connexion.php');
  
  exit();
}
?>
<div id="wrapper">
  
  <h1>Liste des contacts</h1>
<hr><!-- <h2>Si vous voulez accéder aux détails d'un utilisateur admin, cliquez sur son nom. Si vous voulez le supprimer cliquez sur "x"</h2> -->
<?php include "show.php" ?>



<!--  -->
<hr>
<?php include_once '../../inc/admin/footer.inc.php';?>
  

</div>