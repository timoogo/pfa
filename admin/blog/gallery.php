<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../../connexion.php');

    exit();
}

$path = "uploads/";
include '../../inc/blog/head.inc.php'; ?>



<body>
    <form action="_uploads.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
    <?php
$dir = opendir($path);
while ($file = readdir($dir)) {
    $allowed_ext = array('gif', 'jpg', 'jpeg', 'png');
    $ext = strtolower(substr($file, -3));
    if (in_array($ext, $allowed_ext)) {
?>
        <div class="min">
            <img src="<?= $path . '/' . $file; ?>" alt="">
            <h3><?= $file; ?></h3>
            </a>
        </div>
        <?php 
    }
}
include '../../inc/admin/footer.inc.php'
?>
</body>

</html>