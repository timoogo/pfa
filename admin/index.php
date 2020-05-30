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

?>
<body>
<div id="wrapper">
</div>
<?php
    

                    session_start();
                    $_SESSION['user'] = $_POST["login"];
                   
                    ?>
                    
     <footer>
<div class="admin_action_links">
    <div id="redirect">
        <a href="user/index.php"> Gérer les administrateurs </a>
        <a href="contact/index.php"> Gérer les demandes de contacts </a>
        <a href="blog/redaction.php"> écrire un article </a>
    </div>
    <a href="logout.php"> se déconnecter </a>

  </div>
</footer>

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