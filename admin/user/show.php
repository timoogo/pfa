

<!-- Display user details (get user id and display) -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info sur un membre</title>
    <link rel="stylesheet" href="../../ressources/css/admin.css?v=n">
</head>
<?php
if(isset($_GET["id"])) $userId = $_GET["id"];
include_once "../database.php";
$user = selectUser($userId);

?>
<div id="wrapper">
    <h1>Détails sur l'utilisateur: <?=$user["name"] ;?></h1>
    <span> id: <?= $user["id"];?> </span>
    <span> name: <?= $user["name"];?></span> 
    <span> email: <?= $user["email"];?> </span>
    <span> password: <?= $user["password"];?> </span>
    <a href=<?php echo"edit.php?id=".$user['id']."&name=".$user['name'] ?>>Edit user</a>
    <a href=<?php echo"delete_user.php?id=".$user['id']."&name=".$user['name'] ?>>Delete user</a>
    <div class="admin_index" >
        <a href=".">back to index</a>
    </div>
</div>
