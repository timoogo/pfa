<!-- C'EST LA PAGE D'ARCHIVE DES ARTICLES  -->

<?php 
include_once '../../inc/head.blog.inc.php';
include_once '../../inc/header.blog.inc.php';
include '../../inc/variables.php';

$db = new PDO($DB_URI, $DB_USER, "");
$articles =$db->query('SELECT * FROM blog_articles ORDER BY b_id DESC'); 
?>
<div id="wrapper"> 
    <ul>
        
        </ul>
        
        
        
        
    </div>
    <?php  
    include_once '../../inc/footer.blog.inc.php';
    ?>
