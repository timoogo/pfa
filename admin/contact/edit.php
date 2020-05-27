<?php
include_once "database.php";


?>

<form action="_update.php" method="post" class="updateContactForm">
    <input type="text" placeholder="Update login for  <?= $_GET["name"]; ?>" name="updateContactLogin" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />

    <input type="submit" value="Valider"  />
    
</form>


