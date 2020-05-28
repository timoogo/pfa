

<!-- Display contact details (get contact id and display) -->


 <?php include_once "../database.php"; ?>
 <table style="width:100%">
 


 <?php
$stmt = $db->prepare("SELECT * FROM contacts ORDER BY created_at DESC");
        $stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo "

    <tr>
    <td>".  $row -> id." </td>. 
    <td> ". $row -> email." </td>
    <td> ". $row -> created_at." </td>
    <td>  <button class=\"button\" onclick=\"confirmDeleteContact(".strval($row -> id).")\"> delete</button>
    
    </td>
     </tr>";
}
?>
 </table>
<script>
function confirmDeleteContact(contact_id) {
  if (confirm("Voulez vous vraiment supprimer ce contact ?")) {
    window.location.href = "delete_contact.php?id="+contact_id;
  }
}
</script>