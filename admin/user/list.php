 <h3>list of users</h3>

 <?php include_once "database.php"; ?>
 <table style="width:100%">
 <tr>
    <th>id</th>
    <th>name</th>
    <th>actions</th>
  </tr>

<?php foreach (selectUsers() as $user) : include "_item.php"; endforeach; ?>
</table>