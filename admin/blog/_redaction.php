<header>
    <link rel="stylesheet" href="../../ressources/css/common.css">
</header>
<?php 
include_once '../database.php'; 
$res = insertArticleBlog($_POST['title'], $_POST['content'],$_POST['image_link']);
$display = "<h1 class='success'> bien posté </h1>
<a href='redaction.php'> écrire un nouvel article> </a>";
include '../../inc/admin/footer.inc.php';

if(isset($res)){

    echo $display ; 
} 

?>
