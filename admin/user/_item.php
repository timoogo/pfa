<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<tr>
    <td> <?= $user["id"] ?></td>
    <td>
    <a href="<?= 'show.php?id=' . $user['id'] ?>"><?= $user["user_login"] ?></a>
    </td>
    <td>
        <a href="<?= 'edit.php?id=' . $user['id'] ?>">update</a>
        <button onclick="confirmDelete()">delete</button>
    </td>
</tr>

<script>
function confirmDelete() {
  if (confirm("Voulez vous vraiment supprimer ce user ?")) {
    window.location.href = 'delete.php?id=<?= $user['id']; ?>';
  }
}
</script>
