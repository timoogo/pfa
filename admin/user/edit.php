<?php
include_once "../database.php";


?>

<form action="_update.php" method="post" class="updateUserForm">
    <input type="text" placeholder="Update login" name="updateUserLogin" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>


<form action="_update.php" method="post" class="updateUserForm">
    <input type="password" placeholder="enter old password " name="oldUserPassword" />
    <input type="password" placeholder="enter new password" name="updateUserPassword" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>
<form action="_update.php" method="post" class="updateUserForm">
    <input type="text" placeholder="Update Mail" name="updateUserEmail" />
    <input type="hidden" name="id" value=<?= $_GET["id"]; ?>  />
    <input type="submit" value="Valider"  />
    
</form>
