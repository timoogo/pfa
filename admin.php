<?php
//  include_once('inc/head.inc.php');
//  include 'inc/variables.php';
// include_once('inc/header.inc.php');

?>

   
<div class="wrapper">
<?php 
    // si données reçues du formulaire
    if(isset($_POST["login"]) && isset($_POST["pass"]))
    {
      
            $db = new PDO("mysql:host=localhost;dbname=administration;charset=utf8", "root", "");
            //on récupère les données de la db pour le user $_POST['login']
            $data = $db->prepare("SELECT * FROM a_users WHERE user_login = ? ;");
            $data->execute(array($_POST['login']));
        $result = $data->fetch();
        
    // echo "<pre>"; // print_r($result); // echo "</pre>";

        if($result["user_login"] == $_POST["login"] &&  $result["user_pass"] == $_POST["pass"]){ ?>
        <p>bienvenue dans l'administration du site, <?= ucfirst($_POST["login"]); ?> </p>

        <p>ajouter un utilisateur</p>
        <form action="adminv2.php?action=ajouter" method="post">
            <p>
                <label for="newLogin">Nouveau login</label>
                <input type="text" name="newLogin">
                <label for="newPass">Nouveau mot de passe</label>
                <input type="text" name="newPass">
                <input type="submit" value="valider">
            </p>
        </form>
        <?php 
        } else{
            ?> <p>accès refusé</p>
            <?php 
        
    } 
 }
 else{
     ?> <p>utilisateur non ajouté</p> 
     <?php
     
 }
 
?>
</div>

    
</body>
 <?php
include_once('inc/footer.inc.php');
?>

