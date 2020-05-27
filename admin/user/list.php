<hr>
<h3>List of users</h3>

 <?php include_once "../database.php"; ?>
 <table style="width:100%">
 <tr>
    <th>name</th>
    <th>email</th>
    <th>actions</th>
  </tr>

<?php foreach (selectUsers() as $user) : include "_item.php"; endforeach; ?>
</table>