<?php


  
 session_start();
 // ! A rajouter au debut de chaque fonctionnalité admin
 if(empty($_SESSION['user'])) 
 {
   header('Location: ../../connexion.php');

   exit();
 }

 include '../../inc/blog/head.inc.php';
 ?>


<body>
<h1>Ecrire un article</h1>
    <div id="wrapper">
    <form method="POST" action="_redaction.php" id="redaction">
        <input type="text" name="title" placeholder="titre de l'article"/></br>
        <textarea rows="8"placeholder="contenu de l'article" name="content" class="editor"></textarea></br>
        <input type="text" name="image_link" placeholder="image de l'article" /></br>
        <input type="submit" class="button"value="envoyer l'article" />
    </form>
    </div>
  <?php include_once '../../inc/admin/footer.inc.php';?>
<script src="../../ressources/scripts/editor.js"></script>
</body>



