

<?php 
include_once '../database.php';

if(isset($_POST["updateUserLogin"])){

    updateUserLogin($_POST["updateUserLogin"],intval($_POST["id"]));
}
if(isset($_POST["updateUserPassword"])){

    updateUserPassword($_POST["updateUserPassword"],intval($_POST["id"]));
}
if(isset($_POST["updateUserEmail"])){

    updateUserEmail($_POST["updateUserEmail"],intval($_POST["id"]));
}
header('Location: .');
?>