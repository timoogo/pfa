<?php
include_once '../../inc/variables.php';
//include_once '../inc/blog/head.blog.inc.php';
// session_start();
// // ! A rajouter au debut de chaque fonctionnalité admin
// if(empty($_SESSION['user'])) 
// {
//   header('Location: ../../connexion.php');

//   exit();
// }



?>

<body>
    <form method="POST" action="_redaction.php">
        <input type="text" name="title" placeholder="titre de l'article" /></br>
        <textarea placeholder="contenu de l'article" name="content"></textarea></br>
        <input type="text" name="image_link" placeholder="image de l'article" /></br>
        <input type="submit" value="envoyer l'article" />
    </form>
</body>
