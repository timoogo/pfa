<?php
include_once "database.php";

$result = deleteUser($_GET["id"]);

?>

<div> User deleted!</div>
<a href=".">back to index</a>