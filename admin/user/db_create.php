<?php 


$db = new PDO("mysql:host=localhost;dbname=southpark;charset=utf8", "root", "");

$db-> query("
      CREATE TABLE IF NOT EXISTS users(
      id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
      name VARCHAR(20),
      password VARCHAR(20)
    );");
    
$db->query("INSERT INTO users(name, password) VALUES('eric', 'cartman')");
$db->query("INSERT INTO users(name, password) VALUES('toto2', 'tata2')");

