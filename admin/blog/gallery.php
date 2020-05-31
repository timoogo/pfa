
<?php 
session_start();
if(empty($_SESSION['user'])) 
{
  header('Location: ../../connexion.php');
  
  exit();
}
$path ="../../ressources/medias/images/uploads";
include '../../inc/blog/head.inc.php';

if(!empty($_FILES)){
    require '../database.php';
    $file = $_FILES['img'];
  $ext =  strtolower(substr($file['name'], -3));
  $allowed_ext =['gif', 'jpg', 'png' ];
  if(in_array($ext, $allowed_ext )){
      move_uploaded_file($file['tmp_name'],$path. $file['name']);
  } else {
      $err = "Extension pas autorisée";
  }

}


?>



<body>
    <?php 
  
if(isset($err)){
    echo $err;
}
?>
<form method="POST"action="gallery.php" enctype="multipart/form-data">
    <input type="file" name="img"/>  
    <input type="submit" name="Poster"/>  
    </form>
<?php

$dir = opendir($path);
while($file = readdir($dir)){
    $allowed_ext = array('gif', 'jpg', 'png');
    $ext = strtolower(substr($file, -3));
    if(in_array($ext, $allowed_ext)){
        ?>
        <div class="min"> 
        <a href="<?=$path.$file;?>">
        <img src="<?=$path .$file; ?>"  alt="">
        <h3><?=$path.$file ;?></h3>
    </a>
        </div>
        <?php 
    }
}
?>    
</body>
</html>