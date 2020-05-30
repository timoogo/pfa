<!--

        A VOIR SI NE PAS REUTILISER USERS : CA SERAIIT PEUT ÊTRE UNE MEILLEURE SOLUTION
  -->

  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="ressources\medias\images\cartman\cartman-dance.gif"/> <!-- a corriger plus tard -->
  <link rel="stylesheet" href="../../ressources/css/blog.css">
    <meta name="description" content="">    
    <title>Le blog de cartman</title>
</head>




<!-- TEMPLATE UN ARTICLE -->

<?php 
  include '../database.php';
  include '../../inc/blog/header.blog.inc.php';
  include '../../inc/blog/head.blog_article.inc.php';

  $article = getArticleBlog($_GET['id']);
  ?>
  <div id="wrapper">

    <h1><?= $article->title ?></h1>
    <time><?= $article->created_at?></time>
    <p><?= $article->content ?></p>
    <?php if( $article->image_link != ''){ ?>
      
      <img src="<?= $article->image_link ?>" alt="">
    </div>
  
<?php } 
include '../../inc/blog/footer.blog.inc.php'
?>