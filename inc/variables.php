<?php

//_______________________________________________________________nom et desccription___________________________________________________

$ec = "Eric Cartman";

$cartman =  "Eric Theodore Cartman";
$cartman_content = "$ec, plus connu sous son nom Cartman, est sans doute le plus populaire et le plus connu des personnages de South Park, il est devenu une célébrité internationale pour son côté anti-héros. En effet, il est raciste, antisémite, grossier, égocentrique, manipulateur, cupide, pro-hitlérien etc...";

$kenny = "Kenneth 'Kenny' McCormick";
$km = "Kenny McCormick";
$kenny_content = "$km, est l'un des 5 personnages principaux de South Park. $km est connu pour ses fameuses morts dans presque tous les épisodes des cinq premières saisons.  Facilement reconnaissable grâce à son anorak orange qu'il porte tout le temps et qui couvre la moitié de son visage dont sa bouche ce qui rend tout ce qu'il dit peu compréhensible et dont on ne discerne que quelques mots";

$stan = "Stanley 'Stan' Randall Marsh";
$sm = "Stan Marsh";
$stan_content = "Il est le plus clairvoyant et le moins crédule de la bande avec Kyle. En effet, il sera souvent le premier à se rendre compte qu'une chose est insensée alors que tout le monde y croit. Il est assez anti-conformiste et à souvent un avis contraire ou différent des autres. ";

$kyle = "Kyle Broflovski";
$kyle_content = "$kyle passe le plus clair de son temps avec ses trois camarades de classe $sm, $$km et $ec à jouer ou essayer de se tirer de situations compliquées ou dangereuses. Une amitié forte l'unit à $sm,";

$butters = "Butters Stotch";
$butters_content = "$butters,bien qu'il ne fasse pas partie de la bande des quatres,  il est considéré comme l'un des personnages principaux de la série. C'est sûrement dû au fait qu'il fut le remplaçant de $km lors d'une partie de la saison six.Il mène une 'double-vie' en tant que le 'Professeur Chaos'. Il s'est mit en tête de détruire ,avec son compagnon, le Général Désolation, le monde car Kyle, Cartman et sm l'ont viré du groupe. Il pense faire un acte criminel infâme en échangeant 2 assiettes de soupe, par exemple... ";


//___________________________________________________________fin nom et description___________________________________________________

//_______________________________________________________________randomizer___________________________________________________

$random_extract_description = "Jimmy et Timmy vont participer aux Jeux olympiques pour handicapés. Jimmy a très envie de gagner et n'hésite pas à prendre des stéroïdes. De son côté, Cartman apprend qu'un prix de mille dollars sera remis au meilleur athlète des Jeux. Il veut se faire passer pour un handicapé pour remporter le prix...";
$random_fact_description = "kako";


$arr_names = array("$ec", "$km", "$sm", "$butters");

//

$contact_email_address = 'steams66@gmail.com';


$DB_URI = "mysql:host=localhost;dbname=administration;charset=utf8";
$DB_ADMIN = "root";


function RandomExtract($db_uri = "mysql:host=localhost;dbname=administration;charset=utf8", $db_admin = "root")
{
    $db = new PDO($db_uri, $db_admin);
    $stmt = $db->prepare("SELECT * FROM videos ORDER BY RAND() LIMIT 1");
    $stmt ->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC); // retourne tableau assoc 
    return $res;
}


























//_______________________________________________________________fin randomizer___________________________________________________
//_______________________________________________________________outils___________________________________________________
/*a demander a adrien                                        |

    
     

$e_cartman = str_replace("Theodore", "Eric Cartman", $c);  
*/

//______________________

$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quis, voluptatum repellendus asperiores quasi voluptas ullam fugiat est nobis obcaecati sequi rerum, earum id officia? Qui corrupti totam quia consequuntur.";






$wip = "<a id='wip' href='index.php'> <h2>WORK IN PROGRESS, GO HOME INSTEAD</h2></a>";
$video_err = "Ton nanigateur n'est pas capable de lire la balise video, ça craint!.";     
//_______________________________________________________________fin de outils___________________________________________________
