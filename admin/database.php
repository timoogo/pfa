<?php
include_once(dirname(__DIR__) . '/inc/variables.php');
// TODO if db is set, do not set it again
if (!isset($db)) {
    $db = new PDO($DB_URI, $DB_ADMIN, "");
}

////////////////////////////////////////////////////////////////////////////////
//user_functions
///////////////////////////////////////////////////////////////////////////////

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
}

function updateUserLogin($newLogin, $userId)
{
    $db = $GLOBALS['db'];
    $sql = "UPDATE users SET name = ? WHERE id = $userId";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$newLogin]);
    // $stmt->debugDumpParams();

}

function updateUserPassword($newPassword, $userId)
{
    $db = $GLOBALS['db'];
    $sql = "UPDATE users SET password = ? WHERE id = $userId";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$newPassword]);
    // $stmt->debugDumpParams();

}
function updateUserEmail($newEmail, $userId)
{
    $db = $GLOBALS['db'];
    $sql = "UPDATE users SET email = ? WHERE id = $userId";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$newEmail]);
    // $stmt->debugDumpParams();

}


function insertUser($name, $email, $password)
{
    $db = $GLOBALS['db'];
    $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$name, $email, $password]);
    return  $db->lastInsertId();
}



////////////////////////////////////////////////////////////////////////////////
//contact_functions
///////////////////////////////////////////////////////////////////////////////

function selectContacts()
{
    $stmt = $GLOBALS['db']->prepare("SELECT * FROM contacts ORDER BY created_at DESC;");
    $stmt->execute();
    // $stmt->debugDumpParams();
    return $stmt->fetch(PDO::FETCH_OBJ);
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
}

function updateContact($newLogin, $contactId)
{
    $db = $GLOBALS['db'];
    $sql = "UPDATE contacts SET contact_login = ? WHERE id = $contactId";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$newLogin]);
}

function insertContact($email)
{
    $db = $GLOBALS['db'];
    $sql = "INSERT INTO contacts (email) VALUES (?)";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$email]);
    return  $db->lastInsertId();
}

///////////////////////////////////////////////////
///
function insertArticleBlog($title, $content, $image = '')
{
    $db = $GLOBALS['db']; // mysql, h
    $sql = "INSERT INTO articles (title, content, image_link) VALUES (?,?,?)";
    $stmt =  $db->prepare($sql);
    $stmt->execute([$title, $content, $image]);
    return  $db->lastInsertId();
}
function getArticleBlog($id)
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM articles  WHERE id = $id";

    $stmt =  $db->prepare($sql);
    $stmt->execute();
    // $stmt->debugDumpParams();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

//////////////////////////////////////////////////////
//GALERIE
function directoryReader($directory, array $excludeFiles = ['.', '..', '.DS_STORE'])
{       
    $files = [];
    if (!is_dir($directory)) {
        return null;
    }

    if(!($filesDirectory = opendir($directory) )){
        return null;
    }

    while(($file = readdir($filesDirectory) !== false)){
        //  if(in_array($file, $excludeFiles)){
        //      continue;
        //     }
            $files[] = $directory . '/'.$file;
    }
    closedir($filesDirectory);
    return $files;
}
return true;
