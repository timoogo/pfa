

<?php 
include_once 'database.php';


updateContact($_POST["updateContactLogin"],intval($_POST["id"]));
header('Location: .');
?>