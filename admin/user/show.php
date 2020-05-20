<a href=".">back to index</a>

Display user details (get user id and display)
<?php
if(isset($_GET["id"])) $userId = $_GET["id"];

include_once "database.php";
$user = selectUser($userId);
?>
<div>
user name: <?= $user["name"] ?>
</div>