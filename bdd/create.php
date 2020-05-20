<?php 

$db = new PDO("mysql:host=localhost;charset=utf8", "root","");
$db -> query("CREATE DATABASE blog;") ;
$db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");

$db-> query("
      CREATE TABLE IF NOT EXISTS a_articles(
      art_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
      art_date DATETIME,
      art_titre VARCHAR(100),
      art_contenu VARCHAR(1000)
    );");

$db->query("INSERT INTO a_articles(art_date, art_titre, art_contenu)
        VALUES(NOW(), '1er article', 'lorem');");
$db->query("INSERT INTO a_articles(art_date, art_titre, art_contenu)
        VALUES(NOW(), '2er article', 'lorem2');");






?>