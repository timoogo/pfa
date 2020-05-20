<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion membre</title>
    <link rel="stylesheet" href="ressources/css/connexion.css">
</head>
<body>
<div id="wrapper">

    <h1>Bienvenue dans l'espace d'administration</h1>
    <form action="adminv2.php?action=connexion" method="post">
        <p>
            <label for="login">login</label>
            <input type="text" name="login"/> 
            <label for="pass">pass</label>
            <input type="password" name="pass"/>
            <input type="submit" value="valider">
        </p>
        
    </form>
</div>
</body>
</html>