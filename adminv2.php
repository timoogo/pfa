<header>
    <link rel="stylesheet" href="ressources\css\adminitration.css">
</header>

<?php

if (isset($_GET["action"])) {
    if ($_GET["action"] == "ajouter") {
        $db = new PDO("mysql:host=localhost;dbname=administration;charset=utf8", "root", "");
        $data = $db->prepare("INSERT INTO a_users(user_login, user_pass) VALUES(?,?);");
        $data->execute(array($_POST["newLogin"], $_POST["newPass"])); ?>

        <div class="tab">
            <button class="tablinks" onclick="openActionPanel(event, 'Users')">Users</button>
            <button class="tablinks" onclick="openActionPanel(event, 'Articles')">Articles</button>
        </div>
        <h2>Bienvenue dans l'administration du site, <? echo ($_POST["login"]); ?></h2>
        <div id="Users" class="tabcontent">
            <form action="adminv2.php?action=ajouter" method="post">
                <!-- <p>
                <label for="newLogin">Nouveau Login</label>
                <input type="text" name="newLogin" />
                <label for="newPass">Nouveau Pass</label>
                <input type="text" name="newPass" />
                <input type="submit" value="Valider" />
            </p> -->
                <!-- <a href="adminv2.php?action=ajouter">Retour vers l'ajout</a> -->
                <h2> utilisateur ajouté : <?= $_POST["newPass"]; ?></h2>
            </form>
        </div>
        <?php
    }
    if ($_GET["action"] == "connexion") {
        if (isset($_POST["login"]) && isset($_POST["pass"])) {
            // On récupère les données de la bdd pour l'utilisateur $_POST['login']
            $db = new PDO("mysql:host=localhost;dbname=administration;charset=utf8", "root", "");



            $data = $db->prepare("SELECT user_login, user_pass FROM a_users WHERE user_login = ?;");
            $data->execute(array($_POST["login"]));
            $result = $data->fetch();
            // si contenu,   
            if ($result != false) {
                if ($result["user_login"] === $_POST["login"] && $result["user_pass"] === $_POST["pass"]) {
        ?>
                    <div class="tab">
                        <button class="tablinks" onclick="openActionPanel(event, 'Users')">Users</button>
                        <button class="tablinks" onclick="openActionPanel(event, 'Articles')">Articles</button>
                    </div>


                    <h2>Bienvenue dans l'administration du site, <? echo ($_POST["login"]); ?></h2>
                    <div id="Users" class="tabcontent">
                        <p>Ajouter un utilisateur</p>
                        <form action="adminv2.php?action=ajouter" method="post">
                            <p>
                                <label for="newLogin">Nouveau Login</label>
                                <input type="text" name="newLogin" />
                                <label for="newPass">Nouveau Pass</label>
                                <input type="text" name="newPass" />
                                <input type="submit" value="Valider" name="submit" />
                                <?php
                                if (isset($_POST["newLogin"])) {
                                }
                                ?>

                            </p>
                        </form>
                        <?php
                        if (isset($btn)) {
                            echo "reussi";
                        } ?>
                        <a href="connexion.php"> Revenir à l'écran de connexion </a>

                    </div>
                    <div class="tabcontent" id="Articles">

                    </div>
                    <!-- ici -->

                    <!--  fin ici -->
                    <?php




                    ?>

                    <?php

                    ?>


                <?php
                } else {
                ?> <p>Accès refusé : mot de passe incorrect</p>
                    <a href="connexion.php"> Revenir à l'écran de connexion </a>



                <?php
                }
            } else {


                ?> <p>Accès refusé : utilisateur inconnu</p>

            <?php
            }
        } else {
            ?> <p>Accès refusé : formulaire non complété</p>
    <?php
        }
    }
} else {
    ?> <p>Accès refusé</p> <?php
                        }

                            ?>
<a href="connexion.php"></a>

<script src="ressources/scripts/administration.js"></script>