

<?php 
include_once 'database.php';


updateUser($_POST["updateUserLogin"],intval($_POST["id"]));
header('Location: .');
?>