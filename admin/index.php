<!-- CETTE PAGE GERE LA CONNEXION APRES LE FORM DE @CONNEXION.PHP -->

<?php
include_once (dirname(__DIR__).'/inc/admin/head.inc.php'); 

include_once '../inc/variables.php' ;
if (isset($_GET["action"])) {

    if ($_GET["action"] == "connexion") {
        if (isset($_POST["login"]) && isset($_POST["pass"])) {
            // On récupère les données de la bdd pour l'utilisateur $_POST['login']
            $db = new PDO($DB_URI, $DB_ADMIN, "");


            $data = $db->prepare("SELECT * FROM users WHERE name = ?;");
            $data->execute(array($_POST["login"]));
            $result = $data->fetch();

            // si contenu,   
            if ($result != false) {
                if ($result["name"] === $_POST["login"] && $result["password"] === $_POST["pass"]) {
      
include_once (dirname(__DIR__).'../inc/admin/head.inc.php'); 
?>
<body>
<div id="wrapper">
</div>
<?php
    

                    session_start();
                    $_SESSION['user'] = $_POST["login"];
                   
                    ?>
                        <div id="redirect"> 
        <a href="user/index.php"> manage users list </a>
        <a href="contact/index.php"> manage contacts list </a>
        <a href="blog/redaction.php"> Write article </a>
        <a href="blog/gallery.php"> View gallery </a>
      </div>
      <a href="logout.php"> disconnect </a>

  </div>
                    


</body>



                <?php
                } else {
                ?> <p>Accès refusé : mot de passe incorrect</p>
                    <a href="../connexion.php"> Revenir à l'écran de connexion </a>



                <?php
                }
            } else {


                ?> <p>Accès refusé : utilisateur <?= $result ?>inconnu</p>

        <?php
            }
        }
    } else {
        // 
        ?> <p>Accès refusé : formulaire non complété</p>
    <?php

    }
} else {
    ?> <p>Accès refusé</p> <?php
                        }

                            ?>