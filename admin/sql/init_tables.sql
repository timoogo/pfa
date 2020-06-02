
drop TABLE if exists users, articles, contacts, videos; 

CREATE TABLE  `users` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` TEXT NOT NULL,
    `email` VARCHAR(255),
	`password` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;


    INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
    (1, 'timogo', 'tiimogo@gmail.com', 'mdp');

CREATE TABLE `articles` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`title` VARCHAR(255) NOT NULL,
	`content` VARCHAR(255),
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE `contacts` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`email` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;


INSERT INTO `contacts`(`email`) VALUES (
        'example@gmail.com');



CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `titre` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `url` varchar(255) NOT NULL,
  `episode` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `videos`(`titre`, `description`, `url`, `episode`) VALUES (
        'Cartman -  La Passion du Juif',

        'Cartman convainc Kyle d\'aller voir La Passion du Christ. Ce film choque tellement Kyle qu\'il remet sa foi en question. Stan et Kenny quant à eux trouvent le film si nul qu\'ils veulent à tout prix se faire rembourser. Cartman, lui, décide de monter une armée pour exterminer les juifs.',
        'https://www.youtube-nocookie.com/embed/BxuRiIbyzEY?controls=0',
        114
    ),(
  
     
        'Cartman - Les Stéroïdes, ça déchire',

        'Alors que les Jeux olympiques spéciaux commencent à Denver, Cartman, voyant qu\'il y a de l\'argent en jeu, décide de se faire passer pour un handicapé pour empocher la cagnotte. ',
        'https://www.youtube-nocookie.com/embed/zmPgXxRe9f8?controls=0',
        113
    ),
    (
        'Cartman, vengeance et chilli - Scott Tenorman doit mourrir',

        'Cartman se fait mener en bateau par Scott Tenorman, un grand de seconde. Scott Tenorman lui vend ses poils, lui faisant croire que cela le rendra pubère. Apprenant qu\'il s\'est fait rouler, Cartman va tout faire pour se venger.',
        'https://www.youtube-nocookie.com/embed/4qf5y7AaWbU?controls=0',
    69
    ),
  (
    
        'Association sportive des bébés du crack',

        'Après avoir vu un spot publicitaire avec Sarah McLachlan attirant l\'attention sur le sort des bébés accros au crack, Kyle décide de se porter volontaire à l\'hôpital. Il découvre que Cartman a monté une entreprise très lucrative dont le but est de filmer des bébés qui se battent pour un ballon de basket pleine de crack.',
        'https://www.youtube-nocookie.com/embed/YX9O1O2bNuQ?controls=0',
        214
    )