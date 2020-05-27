<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion membre</title>
    <link rel="stylesheet" href="ressources/css/admin.css?v=n">
</head>
<body>
<div id="wrapper">

    <h1 id='welcome_admin'>Bienvenue dans l'espace d'administration</h1>
    <form action="admin/index.php?action=connexion" method="post">
        
            <!-- <label for="login">login</label> -->
            <input type="text" placeholder="Login" name="login"/> 
            <!-- <label for="pass">pass</label> -->
            <input type="password" placeholder="Password" name="pass"/>
            <input type="submit" class="button" value="valider"  accesskey="s">
        
        
    </form>
</div>
</body>
</html>