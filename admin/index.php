<!-- CETTE PAGE GERE LA CONNEXION APRES LE FORM DE @CONNEXION.PHP -->

<header>
    <link rel="stylesheet" href="ressources/css/admin.css?v=n">
</header>


<?php
include_once '../inc/variables.php';
if (isset($_GET["action"])) {

    if ($_GET["action"] == "connexion") {
        if (isset($_POST["login"]) && isset($_POST["pass"])) {
            // On récupère les données de la bdd pour l'utilisateur $_POST['login']
            $db = new PDO($DB_URI, $DB_USER, "");


            $data = $db->prepare("SELECT user_login, user_password FROM a_users WHERE user_login = ?;");
            $data->execute(array($_POST["login"]));
            $result = $data->fetch();

            // si contenu,   
            if ($result != false) {
                if ($result["user_login"] === $_POST["login"] && $result["user_password"] === $_POST["pass"]) {

?>
<?php


                    session_start();
                    $_SESSION['user'] = $_POST["login"];

                    ?>
                    <a href="user">Accéder a la liste des utilisateurs</a>






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