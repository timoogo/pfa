<?php
include_once "../database.php";


?>

<form action="_update.php" method="post" class="updateUserForm">
    <input type="text" placeholder="Update login for  <?= $_GET["name"]; ?>" name="updateUserLogin" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>


<form action="_update.php" method="post" class="updateUserForm">
    <input type="text" placeholder="Update password for  <?= $_GET["name"]; ?>" name="updateUserPassword" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>
<form action="_update.php" method="post" class="updateUserForm">
    <input type="text" placeholder="Update Mail for  <?= $_GET["name"]; ?>" name="updateUserEmail" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>
