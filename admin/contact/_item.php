<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<tr>
    <td> <?= $contact["id"] ?></td>
    <td>
    <a href="<?= 'show.php?id=' . $contact['id'] ?>"><?= $contact["email"] ?></a>
    </td>
    <td>
        <!-- <a href="<?= 'edit.php?id=' . $contact['id'] ?>">update</a> -->
        <button class="button" onclick="confirmDelete()">delete</button>
    </td>
</tr>

<script>
function confirmDelete() {
  if (confirm("Voulez vous vraiment supprimer cet utilisateur ?")) {
    window.location.href = 'delete.php?id=<?= $contact['id']; ?>';
  }
}
</script>
