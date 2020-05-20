<?php
    // TODO if db is set, do not set it again
    $db = new PDO("mysql:host=localhost;dbname=southpark;charset=utf8", "root", "");
    
    function selectUsers()
    {
        return  $GLOBALS['db']->query("SELECT * FROM users ORDER BY id DESC;");
    }

    function selectUser($userId)
    {

        $db = $GLOBALS['db'];
        $stmt = $db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id' => $userId]); 
        return $stmt->fetch();
    }

    function deleteUser($userId)
    {

        $db = $GLOBALS['db'];
        $stmt = $db->prepare("DELETE FROM users WHERE id=:id");
        $stmt->execute(['id' => $userId]); 
        return $stmt->fetch();
    }
    
    function insertUser($name, $password)
    {
        $db = $GLOBALS['db'];
        $sql = "INSERT INTO users (name, password) VALUES (?,?)";
        $stmt=  $db->prepare($sql);
        $stmt->execute([$name, $password]);
        return  $db->lastInsertId();
    }
    

    ?>