<!-- TEMPLATE UN ARTICLE -->
<?php 
include_once '../database.php';

$article = getArticleBlog($_GET['id'])      ;
?>
<h1><?= $article->title ?></h1>
<time><?= $article->created_at?></time>
<p><?= $article->content ?></p>
<?php if( $article->image_link != ''){ ?>

    <img src="<?= $article->image_link ?>" alt="">
<?php } ?>