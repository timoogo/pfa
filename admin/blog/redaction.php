<?php


  
 session_start();
 // ! A rajouter au debut de chaque fonctionnalité admin
 if(empty($_SESSION['user'])) 
 {
   header('Location: ../../connexion.php');

   exit();
 }

 
 ?>
<header>
    <link rel="stylesheet" href="../../ressources/css/admin.css">
    <link rel="stylesheet" href="style.css">
</header>
<body>
    <div id="wrapper">
    <form method="POST" action="_redaction.php" id="redaction">
        <input type="text" name="title" placeholder="titre de l'article" /></br>
        <textarea id="wysiwyg" rows="8"placeholder="contenu de l'article" name="content"></textarea></br>
        <input type="text" name="image_link" placeholder="image de l'article" /></br>
        <input type="submit" class="button"value="envoyer l'article" />
    </form>
    </div>
  <?php include_once '../../inc/admin/footer.inc.php';?>
</body>

