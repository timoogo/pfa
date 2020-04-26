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


//___________________________________________________________fin nom et desccription___________________________________________________

//_______________________________________________________________randomizer___________________________________________________

$random_extract_description = "Jimmy et Timmy vont participer aux Jeux olympiques pour handicapés. Jimmy a très envie de gagner et n'hésite pas à prendre des stéroïdes. De son côté, Cartman apprend qu'un prix de mille dollars sera remis au meilleur athlète des Jeux. Il veut se faire passer pour un handicapé pour remporter le prix...";
$random_fact_description = "kako";
$t = "123";


$arr_names = array("$ec", "$km", "$sm", "$butters");





//essaye tableau

$extracts_array = array(
    array(
        "titre" => 'Cartman -  La Passion du Juif',

        "description" => "Cartman convainc Kyle d'aller voir La Passion du Christ. Ce film choque tellement Kyle qu'il remet sa foi en question. Stan et Kenny quant à eux trouvent le film si nul qu'ils veulent à tout prix se faire rembourser. Cartman, lui, décide de monter une armée pour exterminer les juifs.",
        "url" =>"https://www.youtube-nocookie.com/embed/BxuRiIbyzEY?controls=0",
        "Episode :" => "114"
    ),
  
     array(
        "titre" => 'Cartman - Les Stéroïdes, ça déchire',

        "description" => "Alors que les Jeux olympiques spéciaux commencent à Denver, Cartman, voyant qu'il y a de l'argent en jeu, décide de se faire passer pour un handicapé pour empocher la cagnotte. ",
        "url" => "https://www.youtube-nocookie.com/embed/zmPgXxRe9f8?controls=0",
        "Episode :" => "113"
    ),
    array(
        "titre" => 'Cartman, vengeance et chilli - Scott Tenorman doit mourrir',

        "description" => "Cartman se fait mener en bateau par Scott Tenorman, un grand de seconde. Scott Tenorman lui vend ses poils, lui faisant croire que cela le rendra pubère. Apprenant qu'il s'est fait rouler, Cartman va tout faire pour se venger.",
        "url" => "https://www.youtube-nocookie.com/embed/4qf5y7AaWbU?controls=0",
        "Episode :" => "69"
    ),
  
    array(
        "titre" => 'Association sportive des bébés du crack',

        "description" => "Après avoir vu un spot publicitaire avec Sarah McLachlan attirant l'attention sur le sort des bébés accros au crack, Kyle décide de se porter volontaire à l'hôpital. Il découvre que Cartman a monté une entreprise très lucrative dont le but est de filmer des bébés qui se battent pour un ballon de basket pleine de crack.",
        "url" => "https://www.youtube-nocookie.com/embed/YX9O1O2bNuQ?controls=0",
        "Episode :" => "214"
    )
);


function RandomExtract(array $myArray){
    $randomIndex= array_rand($myArray);
    return $myArray[$randomIndex];
}
//fin test






























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
