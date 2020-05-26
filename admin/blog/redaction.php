<?php
include_once '../../inc/variables.php';
session_start();
// ! A rajouter au debut de chaque fonctionnalité admin
if(empty($_SESSION['user'])) 
{
  header('Location: ../../connexion.php');
  
  exit();
}
$db = new PDO($DB_URI, $DB_USER, "");
if(isset($_POST['article_titre'], $_POST['article_contenu'])){
    if(!empty ($_POST['article_titre']) AND !empty($_POST['article_contenu'])){
    
        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);
        $result = $db->prepare('INSERT INTO blog_articles (b_titre, b_contenu, b_time_publication) VALUES (?, ?, NOW())');
        $result->execute(array($article_titre, $article_contenu));
        $message = 'Votre article a bien été posté';
    }
    else 
    {
        $message = 'Veuillez remplir tous les champs';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redaction</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="article_titre" name="titre">
        <textarea placeholder="contenu" name="article_contenu"></textarea>
        <input type="submit" value="Encoyer">
    </form>

    <?php if(isset($message)) {echo $message;} ?>
</body>
</html>