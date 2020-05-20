<?php

echo $_SERVER['SERVER_PORT'] ;

echo '</br>';
if(in_array("mysql",PDO::getAvailableDrivers())){
    echo " You have PDO for MySQL driver installed ";
     }else{
    echo "PDO driver for MySQL is not installed in your system";
     }
// try {
//     $dbName = 'south_park';
//     $host = 'localhost';
//     $utilisateur = 'root';
//     $motDePasse = '';
//     $port='3306';
//     $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
//     $sql_req = new PDO($dns, $utilisateur,$motDePasse);
//   } catch ( Exception $e ) {
//     echo "Connection à la BDD impossible : ", $e->getMessage();
//     die();
//   }
?>