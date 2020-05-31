<?php include_once "../database.php"; ?>
 <table style="width:100%">
 


 <?php
 $path_dir = '../../ressources/medias/images/blog/images/blog';
 $extension = '.jpg';
 
 if ( file_exists($path_dir) ) {
    foreach ( glob($path_dir . '*' . $extension) as $file ) {
       echo $file;
    }
 }
 else {
    echo 'path_dir ' . $path_dir . ' doesn\'t exist!';
 }
?>
<script>
function confirmDeleteContact(contact_id) {
  if (confirm("Voulez vous vraiment supprimer ce contact ?")) {
    window.location.href = "delete_contact.php?id="+contact_id;
  }
}