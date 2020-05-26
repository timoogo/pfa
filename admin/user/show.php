

<!-- Display user details (get user id and display) -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info sur un membre</title>
    <link rel="stylesheet" href="../../ressources/css/admin.css?v=n">
</head>
<?php
if(isset($_GET["id"])) $userId = $_GET["id"];
include_once "database.php";
$user = selectUser($userId);

?>
<div id="wrapper">
    <h1>Détails sur l'utilisateur: <?=$user["user_login"] ;?></h1>
    <span> name: <?= $user["user_login"];?></span> 
    <span> id: <?= $user["id"];?> </span>
    <span> password: <?= $user["user_password"];?> </span>
    <a href=<?php echo"update.php?id=".$user['id']."&name=".$user['user_login'] ?>>modifier les infos utilisateurs</a>
    <a href=<?php echo"delete.php?id=".$user['id']."&name=".$user['user_login'] ?>>supprimer l'uilisateurs</a>
    <div class="admin_index" >
        <a href=".">back to index</a>
    </div>
</div>
