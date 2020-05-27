<?php
include_once "database.php";

 $contactId = insertContact($_POST["email"]);
?>
<div> Contact created!</div>
<?php include "show.php"; ?>