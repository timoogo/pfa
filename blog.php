<!-- C'EST LA PAGE D'ARCHIVE DES ARTICLES  -->

<?php 
include_once 'inc/blog/head.blog.inc.php';
include_once 'inc/blog/header.blog.inc.php';
include 'inc/variables.php';
$db = new PDO($DB_URI, $DB_ADMIN, "");
$smtp =$db->prepare('SELECT id, created_at, title FROM articles ORDER BY created_at DESC'); 
$smtp->execute();
?>
<body>
<div id="wrapper">  <?php
while ($row = $smtp->fetch(PDO::FETCH_OBJ)) { ?>
  
    <article>
        <a href="admin/blog/_template_article.php?&id=<?=$row->id?>"><?= $row -> title ." published on ". $row -> created_at;?></a> 
    </article>
    <?php
}
?>
</div>
</body>

    <?php // include_once 'inc/blog/footer.blog.inc.php';
    ?>
