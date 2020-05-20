<?php
require "Modele.php";
try{
    $articles = GetArticles();
    require "vueHome.php";

}
catch (Exception $e){
    $msgError = $e-> getMessage();
    require "vueError.php";
    
}
