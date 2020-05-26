<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<div class=theUser>
    <a href="<?= 'show.php?id=' . $user['id'] ?>">
    <td> <?=$user["id"]?></td>
        <?= $user["user_login"] ?>
    </a>
    <?php

//     echo "<td><a class=\"alert\" href=\"delete.php?id=" . $user['id'] . "\">x
       

//     <div class=\"myImage\">
//        <img src=\"../../ressources/medias/images/confirm.gif\"  />
//     </div>
      
//     </a>
// </div>
// </a>
// </td>";

?>
     <style>
         div.myImage {
             display: none;
         }
     </style>