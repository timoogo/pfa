
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$titre ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="global">
        <header>
        <a href="index.php">
        <h1 id="titreBlog">Mon Blog</h1>
    </a>
        <p> Bienvenue sur mon blog</p>

        </header>
        <div id="contenu">
            <?=$contenu?>
        </div>
        
        <footer id="piedBlog"></footer>
        
    </div> <!-- fin global -->
    </body>
    </html>