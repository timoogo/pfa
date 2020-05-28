

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
<table class="infoUser">
    <tr>
    <td> id: <?= $user["id"];?> </td>
    <td> name: <?= $user["name"];?></td> 
    <td> email: <?= $user["email"];?> </td>
     </tr>";
</table>




 
 <div class='management'>
     <a href=<?php echo"edit.php?id=".$user['id'] ?>>edit user</a>
     <a href=<?php echo"delete_user.php?id=".$user['id'] ?>>delete user</a>
 </div>
<?php include '../../inc/admin/footer.inc.php'?>
</div>
