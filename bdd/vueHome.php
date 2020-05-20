    <?php $titre = "mon Blog"; ?>
    <?php ob_start();?> <!-- mise en mémoire tampon-->
    <?php
        foreach ($articles as $article) : ?>
            <article>
                <header>
                <a href="<?= 'article.php?id=' . $article['id'] ?>">
	                    <h1 class="titreArticle">
	                        <?= $article["titre"] ?>
	                    </h1>
	                </a>
                    <time> <?= $article["_date"] ?> </time>
                </header>
                <p><?= $article["contenu"] ?></p>
            </article>
            <hr>
        <?php endforeach; ?>
        <?php $contenu = ob_get_clean();?>
        <?php require "template.php";?>