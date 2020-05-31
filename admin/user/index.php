<!-- CETTE PAGE C'EST UN RESUME POUR AJOUTER / SUPPRIMER / METTRE A JOUR UN USER -->

<head>
    <link rel="stylesheet" href="../../ressources/css/admin.css">
    <title>Users</title>
</head> 
>
<?php
include '../../inc/admin/head.inc.php';
session_start();
// ! A rajouter au debut de chaque fonctionnalité admin
if(empty($_SESSION['user'])) 
{
  header('Location: ../../connexion.php');
  
  exit();
}
?>
<div id="wrapper">
  
  <h1>Utilisateurs du site</h1>
  
  <h2>Si vous voulez ajouter un utilisateur admin, remplissez les champs ci-dessous</h2>
  <?php include "new.php" ?>

<!-- <h2>Si vous voulez accéder aux détails d'un utilisateur admin, cliquez sur son nom. Si vous voulez le supprimer cliquez sur "x"</h2> -->
<?php include "list.php" ?>



<!--  -->
<hr>
  
  
<?php include_once '../../inc/admin/footer.inc.php';?>
  </div>