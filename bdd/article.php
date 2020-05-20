<?php

 

require "Modele.php";

 

try {

 

    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]);
        if($id != 0) {
            $article = getArticle($id);
            require "vueArticle.php";
        }
        else {
            throw new Exception("Identifiant incorrect");
        }
    }
    else {
        throw new Exception("Aucun identifiant d'article");
    }

 

}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require "vueError.php";
}