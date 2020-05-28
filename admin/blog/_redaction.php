<?php 
include_once '../database.php'; 
$res = insertArticleBlog($_POST['title'], $_POST['content'],$_POST['image_link']);
if(isset($res)){

    echo "bien posté"; 

}
?>
