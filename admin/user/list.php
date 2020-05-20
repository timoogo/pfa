 <h3>list of users</h3>

 <?php include_once "database.php"; ?>

 <?php foreach (selectUsers() as $user) : include "_item.php"; endforeach; ?>