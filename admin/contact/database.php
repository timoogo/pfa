<?php
include_once '../../inc/variables.php';
    // TODO if db is set, do not set it again
    if(!isset($db)){
        $db = new PDO($DB_URI, $DB_ADMIN, "");
    }
    
    function selectContacts()
    {
        return  $GLOBALS['db']->query("SELECT * FROM contacts ORDER BY created_at DESC;");
    }

    function selectContact($contactId)
    {

        $db = $GLOBALS['db'];
        $stmt = $db->prepare("SELECT * FROM contacts WHERE id=:id");
        $stmt->execute(['id' => $contactId]); 
        return $stmt->fetch();
    }

    function deleteContact($contactId)
    {
            $db = $GLOBALS['db'];
            $stmt = $db->prepare("DELETE FROM contacts WHERE id=:id");
            $stmt->execute(['id' => $contactId]); 
            return $stmt->fetch();
        }

function updateContact($newLogin,$contactId){
    $db = $GLOBALS['db'];
    $sql = "UPDATE contacts SET contact_login = ? WHERE id = $contactId";
    $stmt=  $db->prepare($sql);
    $stmt->execute([$newLogin]);
    // $stmt->debugDumpParams();
    

}    
    
    function insertContact($email)
    {
        $db = $GLOBALS['db'];
        $sql = "INSERT INTO contacts (email) VALUES (?)";
        $stmt=  $db->prepare($sql);
        $stmt->execute([$email]);
        return  $db->lastInsertId();
    }

    

    ?>