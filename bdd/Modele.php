<?php 
function getDatabase(){
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

function GetArticles(){
  $db =  getDatabase();
    $articles = $db->query("SELECT art_id as id, art_date as _date, art_titre as titre, art_contenu as contenu FROM a_articles ORDER BY art_id DESC;"); 
    return $articles;
}

function getArticle($id) {
	$db = getDatabase();
	$article = $db->prepare("SELECT art_id as id, art_date as _date, art_titre as titre, art_contenu as contenu FROM a_articles WHERE art_id = ?;");
	$article->execute(array($id));
	if($article->rowCount() == 1) {
		return $article->fetch();
	}
	else {
		throw new Exception("Aucun article ne correspond à l'identifiant '$id'");
	}
}