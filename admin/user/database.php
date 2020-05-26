<?php
include_once '../../inc/variables.php';
    // TODO if db is set, do not set it again
    if(!isset($db)){
        $db = new PDO($DB_URI, $DB_USER, "");
    }
    
    function selectUsers()
    {
        return  $GLOBALS['db']->query("SELECT * FROM a_users ORDER BY id DESC;");
    }

    function selectUser($userId)
    {

        $db = $GLOBALS['db'];
        $stmt = $db->prepare("SELECT * FROM a_users WHERE id=:id");
        $stmt->execute(['id' => $userId]); 
        return $stmt->fetch();
    }

    function deleteUser($userId)
    {
            $db = $GLOBALS['db'];
            $stmt = $db->prepare("DELETE FROM a_users WHERE id=:id");
            $stmt->execute(['id' => $userId]); 
            return $stmt->fetch();
        }

function updateUser($newLogin,$userId){
    $db = $GLOBALS['db'];
    $sql = "UPDATE a_users SET user_login = ? WHERE id = $userId";
    $stmt=  $db->prepare($sql);
    $stmt->execute([$newLogin]);
    // $stmt->debugDumpParams();
    

}    
    
    function insertUser($name, $password)
    {
        $db = $GLOBALS['db'];
        $sql = "INSERT INTO a_users (user_login, user_password) VALUES (?,?)";
        $stmt=  $db->prepare($sql);
        $stmt->execute([$name, $password]);
        return  $db->lastInsertId();
    }

    

    ?>