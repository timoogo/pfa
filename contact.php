<?php 
include_once('inc/head.inc.php');
include_once('inc/variables.php');
 ?>
<head>
    <link rel="stylesheet" href="ressources/css/style.css">
</head>

<body>
    <?php include_once('inc/header.inc.php') ?>

<!-- //traitement du form 
/* post pour form (sp quasi excusif)*/  -->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'ressources\PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'ressources\PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'ressources\PHPMailer\src\SMTP.php';

$email = new PHPMailer(TRUE); 

$display = "";


if (isset($_POST['send'])) {
    //prenom verifier prenom, puis nom, puis adresse, puis msg
    if (iconv_strlen(trim($_POST['prenom'])) >= 2  && iconv_strlen(trim($_POST['prenom'])) <= 20) {
        if (iconv_strlen(trim($_POST['nom'])) >= 2  && iconv_strlen(trim($_POST['nom'])) <= 20) {
            if (iconv_strlen(trim($_POST['message'])) >= 1  && iconv_strlen(trim($_POST['message'])) <= 200) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {                   
                    $email->setFrom('kaka@koko.com', 'Contact Cartman');
                    $email->addAddress( $_POST['email'], '');

                    $email->Subject = $_POST['message'];
                    $email->Body = $_POST['message'];
                    $email->isSMTP();
                    $email->Host = 'smtp.gmail.com';
                    $email->SMTPAuth = TRUE;
                    $email->SMTPSecure = 'tls';
                 
                    $email->Username = 'steams66@gmail.com';
                    $email->Password = getenv('MAIL_SMTP_PWD');
                    $email->Port = 587;
           
                    if($email->send()) {
                        error_log("envoyé", 0);
                        $display = "<div class='success'> L'email a été envoyé à ".$_POST['email']." </div>" ;
                      // on enregistre dans la db la demande
                        $db = new PDO($DB_URI, $DB_ADMIN, "");
                        $data = $db->prepare("INSERT INTO contacts(email) VALUES (?);");
                        $data->execute(array($_POST["email"]));
            
                        
                    }else{
                        error_log("pas envoyé", 1);
                        $display = "<div class='error'> L'email n'a pas été envoyé </div>" ;
                    }
                }
            } else {
                $display = "<div class='error'> le message doit être compris entre 1 et 200 caractères </div>";
            }
        } else {
            $display = "<div class='error'> le nom doit être compris entre 2 et 20 caractères </div>";
        }
    } else {
        $display = "<div class='error'> le prénom doit être compris entre 2 et 20 caractères </div>";
    }
}
?>
<!-- 
//fin -->
    <section id="wrapper_contact">
        <div id="form_To_Submit">
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
             
                    <?= $display; ?>
                    <!-- <label for="prenom">Votre prénom</label> -->
                    <input type="text" class="form-control" id="prenom" placeholder="Indiquez votre prénom" name="prenom">
             

                    <!-- <label for="nom">Votre nom</label> -->
                    <input type="text" class="form-control" id="nom" placeholder="Indiquez votre nom" name="nom">
             

                    <!-- <label for="email">Votre email</label> -->
                    <input type="mail" class="form-control" id="email" placeholder="Indiquez votre email" name="email">
             

                    <!-- <label for="message">Votre message</label> -->
                    <textarea class="form-control" rows="10" id="message" placeholder="Indiquez votre message" name="message"></textarea>
                <input type="submit" class="button" value="Envoyer le message" name="send">
            </form>
        </div>
    </div>

    <?php include_once('inc/footer.inc.php') ?>