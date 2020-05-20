<?php $titre = "mon blog -" . $article["titre"]; ?>

<?php ob_start(); ?>
<article>
    <header>

          <h1 class="titreArticle">
              <?= $article["titre"]; ?>
            </h1>
            <time>
                <?= $article["_date"]; ?>
            </time>
    </header>
    <p> 
        <?= $article["contenu"];?>
    </p>
</article>
<hr>
<?php $contenu = ob_get_clean();?>
<?php require "template.php";?>