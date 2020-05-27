<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<tr style="padding: 15px">
  <td>
    <?=$user["name"]?>
  
</td>
<td> <?= $user["email"] ?></td>
    <td>
    <a class="button" href="<?= 'show.php?id='.$user['id']?>"> update </a>
        <button class="button" onclick="confirmDeleteUser()">delete</button>
    </td>
</tr>

<script>
function confirmDeleteUser() {
  if (confirm("Voulez vous vraiment supprimer cet utilisateur ?")) {
    window.location.href = 'delete_user.php?id=<?= $user['id']; ?>';
  }
}
</script>
