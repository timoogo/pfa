 <h3>list of users</h3>

 <?php include_once "database.php"; ?>

<div class="username"> <?php foreach (selectUsers() as $user) : include "_item.php"; endforeach; ?> </div>