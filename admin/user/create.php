<?php
include_once "database.php";

$userId = insertUser($_POST["newLogin"], $_POST["newPass"]);
?>
<div> User created!</div>
<?php include "show.php"; ?>