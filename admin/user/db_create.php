<?php 
include_once '../../inc/variables.php';
include_once "database.php";



$db-> query("
      CREATE TABLE IF NOT EXISTS a_users(
      id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
      user_login VARCHAR(20),
      user_password VARCHAR(20)
    );");
  insertUser($DEFAULT_DB_ADMIN,$DEFAULT_DB_PWD);
