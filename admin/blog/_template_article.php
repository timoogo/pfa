<!--

        A VOIR SI NE PAS REUTILISER USERS : CA SERAIIT PEUT ÊTRE UNE MEILLEURE SOLUTION
  -->




<!-- TEMPLATE UN ARTICLE -->

<?php 
  include '../database.php';
  include '../../inc/blog/header.blog.inc.php';
  include '../../inc/blog/head.inc.php';

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