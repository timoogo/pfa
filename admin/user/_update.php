

<?php 
include_once '../database.php';

if(isset($_POST["updateUserLogin"])){

    updateUserLogin($_POST["updateUserLogin"],intval($_POST["id"]));
}

if(isset($_POST["updateUserPassword"])){

        $db = $GLOBALS['db'];
        $sql = "SELECT password from users  WHERE id = ?";
        $stmt=  $db->prepare($sql);
        $stmt->execute([$_POST["id"]]);
        $recordedOldPassword = $stmt->fetch()[0];
    if($_POST['oldUserPassword'] == $recordedOldPassword){
    updateUserPassword($_POST["updateUserPassword"],intval($_POST["id"]));
     }
     else{
         echo " <a href='edit.php?id=".$_POST['id'].">old passwords doesn't match, please try again</a> "

         ;
        }
    }
if(isset($_POST["updateUserEmail"])){

    updateUserEmail($_POST["updateUserEmail"],intval($_POST["id"]));
}
 header('Location: .');
?>
