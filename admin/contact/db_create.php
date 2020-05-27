<?php 
include_once '../../inc/variables.php';
include_once "database.php";



$db-> query("
      CREATE TABLE IF NOT EXISTS contact_info(
      id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
      contact_login VARCHAR(20),
      contact_password VARCHAR(20)
    );");
  insertContact($DEFAULT_DB_ADMIN,$DEFAULT_DB_PWD);
