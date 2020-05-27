 <h3>list of contacts</h3>

 <?php include_once "database.php"; ?>
 <table style="width:100%">
 <tr>
    <th>id</th>
    <th>name</th>
    <th>actions</th>
  </tr>

<?php foreach (selectContacts() as $contact) : include "_item.php"; endforeach; ?>
</table>