<?php
include_once "../database.php";
if (filter_var($_POST['newEmail'], FILTER_VALIDATE_EMAIL)) {

$userId = insertUser($_POST["newLogin"],$_POST["newEmail"], $_POST["newPass"]); ?>
<?php 
header('Location: .');

} else{
    echo "<div> WRONG EMAIL PROVIDED 
    <a href='index.php' > back to user list </a>   </div>";
    
}