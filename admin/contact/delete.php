<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info sur un membre</title>
    <link rel="stylesheet" href="../../ressources/css/admin.css?v=n">
</head>
<?php
include_once "database.php";

    $result = deleteContact($_GET["id"]);
?>
<div id="wrapper">
    <h1> Utilisateur supprimé ! </h1>
    <div class="admin_index" >
            <a href=".">back to index</a>
        </div>
</div>