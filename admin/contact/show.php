

<!-- Display contact details (get contact id and display) -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info sur un membre</title>
    <link rel="stylesheet" href="../../ressources/css/admin.css?v=n">
</head>
<?php
if(isset($_GET["id"])) $contactId = $_GET["id"];
include_once "database.php";
$contact = selectContact($contactId);

?>
<div id="wrapper">
    <h1>Détails du contact: <?=$contact["email"] ;?></h1>
    <span> name: <?= $contact["email"];?></span> 
    <span> id: <?= $contact["id"];?> </span>
    <a href=<?php echo"edit.php?id=".$contact['id'] ?>>modifier les infos utilisateurs</a>
    <a href=<?php echo"delete.php?id=".$contact['id'] ?>>supprimer l'uilisateurs</a>
    <div class="admin_index" >
        <a href=".">back to index</a>
    </div>
</div>
