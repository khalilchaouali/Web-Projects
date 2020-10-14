-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 13 mai 2019 à 01:57
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `junior1`
--

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

CREATE TABLE `audio` (
  `id_audio` int(20) NOT NULL,
  `nom_audio` varchar(20) NOT NULL,
  `section` varchar(2) NOT NULL,
  `id_test` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `expression`
--

CREATE TABLE `expression` (
  `id_qst` int(20) NOT NULL,
  `question` text NOT NULL,
  `section` varchar(1) NOT NULL,
  `id_test` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `expression`
--

INSERT INTO `expression` (`id_qst`, `question`, `section`, `id_test`) VALUES
(10, 'Un bÃ©bÃ©  a Ã©tÃ©  retrouvÃ©  seul completÃ©  cet article', 'A', 1),
(11, 'Â« il est inutile de connaÃ®tre une autre langue Ã©trangÃ¨re que lâ€™anglais . Â» ïƒ°	Ã©crivez une lettre au journal pour dire ce que vous en pensez . (200 mots environ) DÃ©veloppez au moins 3 arguments pour dÃ©fendre votre point de vue .', 'B', 1);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(20) NOT NULL,
  `nom_image` varchar(20) NOT NULL,
  `section` varchar(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id_test` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `nom_image`, `section`, `type`, `id_test`) VALUES
(1, '20190226_135144.jpg', 'A', 'image', 1),
(2, '20190226_135154.jpg', 'A', 'image', 1),
(3, '20190226_135204.jpg', 'A', 'image', 1),
(4, '20190226_135210.jpg', 'A', 'image', 1),
(5, '20190226_135216.jpg', 'A', 'image', 1),
(6, '20190226_135223.jpg', 'B', 'image', 1),
(7, '20190226_135232.jpg', 'B', 'image', 1),
(8, '20190226_135237.jpg', 'B', 'image', 1),
(10, '20190226_135245.jpg', 'B', 'image', 1),
(11, '20190226_135256.jpg', 'B', 'image', 1),
(13, '20190226_135321.jpg', 'B', 'image', 1);

-- --------------------------------------------------------

--
-- Structure de la table `image_lexique`
--

CREATE TABLE `image_lexique` (
  `id_i` int(50) NOT NULL,
  `nom` varchar(20) DEFAULT 'NULL',
  `section` varchar(20) NOT NULL,
  `id_test` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image_lexique`
--

INSERT INTO `image_lexique` (`id_i`, `nom`, `section`, `id_test`) VALUES
(1, 'NULL', 'A', 1),
(2, 'NULL', 'A', 1),
(3, 'NULL', 'A', 1),
(4, 'Capture.jpg', 'B', 1),
(5, 'NULL', 'C', 1),
(6, 'NULL', 'C', 1),
(7, 'KHALIL.PNG', 'D', 1);

-- --------------------------------------------------------

--
-- Structure de la table `image_orale`
--

CREATE TABLE `image_orale` (
  `id_image` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `id_audio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(20) NOT NULL,
  `question` text NOT NULL,
  `id_reponse` int(20) NOT NULL,
  `id_image` int(20) NOT NULL,
  `num_question` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `question`, `id_reponse`, `id_image`, `num_question`) VALUES
(1, 'Quelle est la nature de ce document?', 1, 1, 1),
(2, 'Ou se situe la ville dont parle le document?', 2, 1, 2),
(3, 'Quelle est la nature de ce document?', 5, 3, 5),
(4, 'Que faut-il faire ?', 6, 3, 6),
(5, 'Sous quelle rubrique de journal,peut-on lire cet article', 7, 4, 7),
(6, 'Ce document presente', 9, 5, 9),
(7, 'Les israeliens', 11, 6, 11),
(8, 'Entrent dans la categorie A', 12, 6, 12),
(9, 'Pour la conservation des oeufs,il est recommande', 13, 6, 13),
(10, 'Qu\'indique le graphique?', 3, 2, 3),
(11, 'D\'apres ce classement ,on peut dire ', 4, 2, 4),
(12, 'Quel sujet n\'est pas evoque dans le texte?', 8, 4, 8),
(13, 'Quel est l\'objectivf de ce document', 10, 5, 10),
(14, 'Les auteurs de delit ont ete', 15, 7, 15),
(15, 'Ils etaient tous originaires', 16, 7, 16),
(16, 'Dans ce article,l\'auteur rapporte', 14, 7, 14),
(17, 'L\'enquete se poursuit parceque', 17, 7, 17),
(18, 'Entre 1970 et 1997', 18, 8, 18),
(19, 'Entre 1990 et 1997', 19, 8, 19),
(20, 'Globalement,on peut dire q\'une 1970 et 1997', 20, 8, 20),
(26, 'Le gouvernement a connu un succes dans ses mesures', 27, 10, 22),
(27, 'En bulgarie,les jeunes', 28, 10, 23),
(28, 'D\'apres cet article,la bulgarie', 26, 10, 21),
(29, 'D\'apres cet article,la presse semble etre', 29, 10, 24),
(30, 'Quel adjectif qualifie le mieux le film', 32, 11, 27),
(31, 'Au dÃ©part,AgnÃ¨s Browne est le nom ', 33, 11, 28),
(32, 'L\'auteur pense que le film est', 31, 11, 26),
(33, 'Dans cet article,l\'objectif de l\'auteur est de', 30, 11, 25),
(35, 'CE document presente', 35, 13, 32),
(36, 'La personne interrogee', 36, 13, 33),
(37, 'les reponses de la personne interrogee sont de nature a', 37, 13, 34),
(38, 'Le livre electronique,a l\'avenir', 38, 13, 35);

-- --------------------------------------------------------

--
-- Structure de la table `question_lexique`
--

CREATE TABLE `question_lexique` (
  `id` int(20) NOT NULL,
  `question` text NOT NULL,
  `reponse1` varchar(20) NOT NULL,
  `reponse2` varchar(20) NOT NULL,
  `reponse3` varchar(20) NOT NULL,
  `reponse4` varchar(20) NOT NULL,
  `reponse_vrai` int(20) NOT NULL,
  `id_i` int(20) NOT NULL,
  `num_question` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question_lexique`
--

INSERT INTO `question_lexique` (`id`, `question`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse_vrai`, `id_i`, `num_question`) VALUES
(1, 'Envoyer votre rÃ¨glement avant le 31 mars le â€¦.. de la poste faisant foi .', 'A.	bureau', 'B.	cachet  ', 'C.	facteur ', 'D.	guichet ', 2, 1, 111),
(2, 'Nous avons rendez-vous dans â€¦. , vers 10 heures .', 'A.	lâ€™aprÃ¨s-midi. ', 'B.	Le jour ', 'C.	Le matin  ', 'D.	La matinÃ©', 1, 1, 112),
(3, 'On sera sÃ»r de trouver du fil, des bouchons et des aiguilles dans une â€¦.', 'A.	blanchisserie  ', 'B.	droguerie ', 'C.	quicaillerie', 'D.	mercerie', 2, 2, 113),
(4, 'Dans ce guide touristique , vous trouverez une sÃ©lection dâ€™hÃ´tels de bon confort â€¦. Sur tout le territoire .', 'A.	disposÃ© ', 'B.	Ã©chelonnÃ©s ', 'C.	rÃ©partis ', 'D.	partagÃ©s', 1, 2, 114),
(5, 'La rÃ©ussite de Jacques est â€¦ plus surprenante quâ€™il nâ€™avait rien rÃ©visÃ© !', 'A.	dâ€™autant ', 'B.	pour autant ', 'C.	auatant ', 'D.	autant de', 2, 2, 115),
(6, 'A lâ€™issue des nÃ©gociations, le patronat et les syndicats ont signÃ©s â€¦.', 'A.	Le bilan  ', 'B.	Lâ€™Ã©tat des lie', 'C.	Lâ€™ordre du jour', 'D.	Le protocole dâ€™', 2, 2, 116),
(7, 'Dans cet article , il â€¦.. de proposer une aide gouvernementale aux personnes dÃ©favorisÃ©es ', 'A.	Semble ', 'B.	Sâ€™agit ', 'C.	Sâ€™intÃ©resse', 'D.	Pense ', 1, 3, 117),
(8, 'Au restaurant : -Quâ€™est ce que vous prenez ? -Pour moi ,â€¦ du jour .', 'A. lâ€™assiette ', 'B. la carte ', 'C. le plat ', 'D. le plateau', 1, 3, 118),
(9, 'Afin dâ€™utiliser cet appareil dans les meilleurs conditions , lisez attentivement â€¦â€¦ ', 'A.	Lâ€™avis ', 'B.	Le formulaire  ', 'C.	La notice ', 'D.	Le procÃ©dÃ©', 2, 3, 119),
(10, 'Jâ€™ai â€¦. Ã  vous demander ce service , vous Ãªtes si occupÃ© en ce moment !', 'A.	Des doutes  ', 'B.	Des scrupules  ', 'C.	Des prÃ©jugÃ©s ', 'D.	Des soupÃ§ons', 1, 3, 120),
(12, 'Dans le texte suivant , choisissez le mot ou groupe de mots qui a le sens le plus proche du mot ou groupe de mots soulignÃ©.', 'A.	La dÃ©couverte ', ' B.	Lâ€™expÃ©rience ', 'C.	Lâ€™influence ', 'D.	Le raisonnement', 1, 4, 121),
(13, 'Dans le texte suivant , choisissez le mot ou groupe de mots qui a le sens le plus proche du mot ou groupe de mots soulignÃ©.', 'A.	DÃ©pourvue', 'B.	Enrichie ', 'C.	FertilisÃ©e ', 'D.	RecyclÃ©e', 1, 4, 122),
(14, 'Dans le texte suivant , choisissez le mot ou groupe de mots qui a le sens le plus proche du mot ou groupe de mots soulignÃ©.', 'A.	Complexes  ', 'B.	Innovantes  ', 'C.	Naturelles  ', 'D.	Rudimentaires ', 2, 4, 123),
(15, 'Dans le texte suivant , choisissez le mot ou groupe de mots qui a le sens le plus proche du mot ou groupe de mots soulignÃ©.', 'A.	Obtient ', 'B.	ProtÃ¨ge ', 'C.	Recherche', 'D.	Retrouve ', 3, 4, 124),
(16, 'Dans le texte suivant , choisissez le mot ou groupe de mots qui a le sens le plus proche du mot ou groupe de mots soulignÃ©.', 'A.	Lâ€™enseigne  ', ' B.	Le logo ', ' C.	La norme', 'D.	La rÃ¨gle ', 2, 4, 125),
(17, 'Le ciel est gris ; je crois pas que la pluie â€¦.. cesser aujourdâ€™hui .', 'A.	Aille ', 'B.   Allait ', ' C.	A ', 'D.	Va', 2, 5, 126),
(18, 'Je tâ€™appelle pour â€¦. Communiquer mon nouveau numÃ©ro de tÃ©lÃ©phone .', 'A.	Le  ', 'B.	Me ', ' C.	Se ', 'D.	Te', 2, 5, 127),
(19, 'Le samedi aprÃ¨s-midi , les enfants â€¦.. souvent du sport avec leurs copains .', 'A.	Faire ', 'B.	Faisons ', ' C.	Font', ' D.	Faites', 2, 5, 128),
(20, 'Ils â€¦. Sortir ce soir .', 'A.	Veulent ', 'B.	Veut ', 'C.	Voulez ', 'D.	Voulons', 2, 5, 129),
(21, 'Le directeur est en mission â€¦. Vendredi 10 mai .', 'A.	DÃ©jÃ  ', 'B.	Jusquâ€™au', 'C.	Pendant ', 'D.	Pour', 1, 5, 130),
(22, 'Jâ€™ai achetÃ© les chaussures â€¦.. jâ€™avais envie .', 'A.	Que ', 'B.	Dont ', 'C.	Auxquelles', 'D.	Desquelles ', 1, 5, 131),
(23, 'Tu Ã©tais au courant ? Elle ne mâ€™a jamais â€¦.. dit Ã  ce sujet .', 'A.	DÃ©jÃ  ', 'B.	Encore', 'C.	Plus ', 'D.	Rien', 2, 5, 132),
(24, 'Des amis mâ€™ont invitÃ©e dans lâ€™appartement â€¦â€¦ ils ont emmÃ©nagÃ© depuis peu .', 'A.	Auquel ', ' B.	Dont ', 'C.	OÃ¹ ', 'D.	Quâ€™', 2, 5, 133),
(25, 'Quand le coureur â€¦. La ligne dâ€™arrivÃ©e , le public lâ€™a acclamÃ© .', 'A.	A passÃ© ', 'B.	Passe ', 'C.	Passerait', 'D.	Est passÃ©', 1, 5, 134),
(26, 'â€¦â€¦ prend des de piano , il a fait de rÃ©els progrÃ¨s .', 'A.	DÃ¨s quâ€™il ', 'B.	Pendant quâ€™il  ', 'C.	Quand il', 'D.	Depuis quâ€™il', 1, 6, 135),
(27, 'Donne-moi un stylo sâ€™il te plaÃ®t , le bleu ou le noir , nâ€™importe â€¦. .', 'A.	Comment ', 'B.	Lequel ', 'C.	Quel ', 'D.	Quoi', 2, 6, 136),
(28, 'Ce serait possible mardi aprÃ¨s-midi,â€¦ un autre jour ne vous convienne mieux .', 'A.	Ã  moins moins qu', 'B.	alors quâ€™ ', ' C.	pourvu quâ€™ ', 'D.	soit quâ€™', 2, 6, 137),
(29, 'Ses  cousins et ses cousines sont si nombreux quâ€™il ne les connaÃ®t pas â€¦. .', 'A.	tout  ', 'B.	toutes', 'C.	tous', ' D.	toute', 2, 6, 138),
(30, 'Pierre et Anne ont habitÃ© Ã  Paris â€¦. Deux ans .', 'A.	pour ', 'B.	vers ', 'C.	cependant', 'D.	pendant', 2, 6, 139),
(31, 'Paul ne sait pas encore la nouvelle . je vais â€¦.annoncer .', 'A.	lâ€™y ', 'B.	lui lâ€™ ', 'C.	la lui ', 'D.	lui en', 1, 6, 140),
(32, 'Jâ€™ai mis de cÃ´tÃ© ces documents pour que vous les â€¦ dÃ¨s votre retour .', 'A.	envoyiez  ', 'B.	envoyer ', 'C.	envoyez ', 'D.	envoyaient', 2, 6, 141),
(33, 'Auriez-vous une cravate qui â€¦. Avec ce costume et cette chemise ?Auriez-vous une cravate qui â€¦. Avec ce costume et cette chemise ?', 'A.	aille ', 'B.	ira ', 'C.	va ', 'D.	allait', 0, 6, 142),
(34, 'il y avait longtemps que nous â€¦. Dâ€™aller nous installer Ã  la campagne .', 'A.	aurons dÃ©cidÃ©  ', ' B.	avions dÃ©cidÃ© ', '  C.	avons dÃ©cidÃ© ', 'D.	sommes dÃ©cidÃ©s', 0, 6, 143),
(35, 'Quelle heure â€¦. ?', 'A.	câ€™est', 'B.	est-elle ', ' C.	est-il ', 'D.	y a-t-il ', 1, 6, 144),
(36, 'Le code dâ€™entrÃ©e , tu â€¦ souviendras ?', 'A.	te le ', 'B.	tâ€™en', 'C.	tâ€™y', 'D.	le te', 1, 6, 145),
(37, 'ïƒ°	Cochez sur la fiche la rÃ©ponse correspondant  Ã  la partie incorrecte .', 'A.	Les siens  ', 'B.	En ', ' C.	Lorsque  ', 'D.	Artisanale ', 1, 7, 146),
(38, 'ïƒ°	Cochez sur la fiche la rÃ©ponse correspondant  Ã  la partie incorrecte .', 'A.	DurÃ©  ', 'B.	Internationale  ', 'C.	Soient ', 'D.	Participants ', 2, 7, 147),
(39, 'ïƒ°	Cochez sur la fiche la rÃ©ponse correspondant  Ã  la partie incorrecte .', 'A.	PolÃ©mique  ', 'B.	Pour ', 'C.	Septembre ', 'D.	A consultÃ©', 2, 7, 148),
(40, 'ïƒ°	Cochez sur la fiche la rÃ©ponse correspondant  Ã  la partie incorrecte .', 'A.	Ã  ', 'B.	cin', 'C.	estimants', 'D.	privÃ©es', 3, 7, 149),
(41, 'ïƒ°	Cochez sur la fiche la rÃ©ponse correspondant  Ã  la partie incorrecte .', 'A.	des ', 'B.	dâ€™ores et dÃ©jÃ', ' C.	redonner', 'D.	mains', 2, 7, 150);

-- --------------------------------------------------------

--
-- Structure de la table `question_orale`
--

CREATE TABLE `question_orale` (
  `id_question` int(20) NOT NULL,
  `question` text NOT NULL,
  `id_reponse` int(20) NOT NULL,
  `id_audio` int(20) NOT NULL,
  `num_question` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(20) NOT NULL,
  `reponse1` text NOT NULL,
  `reponse2` text NOT NULL,
  `reponse3` text NOT NULL,
  `reponse4` text NOT NULL,
  `reponse_vrai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id_reponse`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse_vrai`) VALUES
(1, 'Le resultat d\'une enquete sociologique', 'Une publicite sur une region', 'Une information touristique', 'Un article sur les loisirs', '2'),
(2, 'Au bord de la mer', 'A la montagne', 'A la campagne', 'sur une ile', '3'),
(3, 'Le pourcentage d\'Europeens qui font le menage chez eux', 'Le pourcentage de familles europeennes qui habitent dans une maison', 'Le pourcentage d\'Europeens proprietaires d\'une maison individuelle', 'Le pourcentage d\'Europeens qui louent une maison individuelle', '1'),
(4, 'que les Autrichiens se situe dans la moyenne europeenne', 'que les Belges vivent plutot en appartement', 'que les Belges vivent se situent en bas du classement', 'que les italiens vivent en majorite en maison', '3'),
(5, 'Une publicite pour le parc Asterix', 'Le resume d\'un livre d\'Asterix', 'Un avis pour avoir des places gratuites', 'Une invitation gratuite', '2'),
(6, 'Telephoner', 'Ecrire', 'Se deplacer', 'Attendre une reponse', '2'),
(7, 'Faits divers', 'Horoscope', 'Sante', 'Loisirs', '1'),
(8, 'La vie sentimentale', 'L\'argent', 'La vie sociale', 'Le travial', '2'),
(9, 'Le nombre d\'animaux pour cent habitans dans le monde entier', 'Le nombre de chiens et de chats pour cent habitents sur tous les continents', 'Le nombre de chiens et de chats pour cent habitants en Europe', 'le nombre de chiens et de chats pour cent habitants dans differnets pays', '1'),
(10, 'Donner l\'envie d\'adopter un chat ou un chien', 'Informer le grand public', 'Alert l\'opinion publique', 'inviter les gens a bien soigner leur chien ou leur chat', '1'),
(11, 'sont les premiers producteurs d\'oeufs au monde', 'consomment autant d\'oeufs par an que les francais', 'possede le plus grand nombre d\'unites de production au monde', 'sont les premiers mangeurs d\'oeufs au monde', '2'),
(12, 'les oeufs extra-frais et frais', 'les oeufs produits en elvage specialise', 'Les oeufs de poules elevees en milieu naturel', 'les oeufs importes en France', '1'),
(13, 'de les laisser a l\'air libre', 'de les laisser a la lumiere du jour', 'de les laver avant de les mettre dans le refrigerateur', 'de les placer directement au frais', '3'),
(14, 'Un crime', 'un vol', 'des actes de vandalisme', 'un incendie', '1'),
(15, 'arretes sur les lieux du delit', 'liberes', 'arretes chez eux', 'blesses', '3'),
(16, 'de Nice', 'de la meme region', 'de Saint-Jean', 'd\'une region differente', '2'),
(17, 'd\'autres coupables sont recherches', 'le montant des degats n\'est pas connu', 'ce ne sont pas les premieres degradations commises', 'des temoins manquent a l\'appel', '1'),
(18, 'le prix du tabac a augmente dans les memes proportions que le prix d l\'alimentation', 'c\'est le coÃ»t du logement qui a le plus augmente', 'les prix des loisirs ont plus augmente que ceux des transports et de la communication', 'c\'est le coÃ»t des depenses de sante qui a le moins augmente ', '2'),
(19, 'le prix du logement a subi une plus forte augmentation qu\'entre 1970 et 1980', 'le prix du bÅ“uf est reste plus stable que celui du pain et de l\'essence', 'l\'essence a augmente d\'environ un franc', 'le prix du tabac a triple ', '1'),
(20, 'c\'est le prix du boeuf qui a le plus augmente', 'les prix a la consommation ont tous ete multiplies par quatre', 'plusieurs prix sont restes stables ', 'l\'augmentation du prix des loisirs depasse l\'indice de base', '1'),
(26, 'connait  une situation critique', 'connait une forte immigfration', 'a une presse dynamique', 'attire les entreprises etrangeres', '1'),
(27, 'pour enrayer l\'inflation', 'pour entrer dans l\'Union Europeenne', 'pour redonner espoir a la population', 'pour augmenter les retraites', '3'),
(28, 'aiment voyager', 'sont doues en langue', 'veulent jouer au loto', 'sont de moins en moins nombreux', '2'),
(29, 'active', 'engagee', 'desabuses', 'objective', '1'),
(30, 'faire la critique d\'un film', 'faire la publicite d\'un film', 'prÃ©senter une actrice', 'raconter l\'histoire dâ€™AgnÃ¨s Browne ', '1'),
(31, 'un chef-d\'oeuvre', 'plutÃ´t bien ', 'plutÃ´t mauvais', 'tres mauvais', '2'),
(32, 'subtil', 'Vulgaire', 'Triste', 'Simple', '1'),
(33, 'd\'un livre ', 'd\'un telefilm', 'd\'une chanson', 'd\'une actrice', '3'),
(35, 'l\'opinion d\'une personne interrogee dans la rue', 'l\'avis d\'un vendeur de materiel electrique', 'les arguments de vente d\'un responsable marketing', 'l\'analyse d\'un partisan du livre informatique', '1'),
(36, 'souhaite que le livre electronique soit plus leger', 'vante la lisibilite du livre electronique', 'pretend que les dimensions du livre electronique doivent etre ecore reduites', 'pense que le prix d\'un ordinateur portable s\'alignera sur celui du livre electronique', '1'),
(37, 'troubler les utilisateurs d\'internet', 'inciter les gens acheter des livres classique', 'rassurer les editeurs', 'inquieter les libraires', '1'),
(38, 'coûtera aussi cher qu\'un ordinateur portable ', 'pourra faire l\'objet d\'un prêt gratuit ', 'nécessitera un apprentissage différent de la lecture ', 'coexistera avec le livre papier', '2');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_orale`
--

CREATE TABLE `reponse_orale` (
  `id_reponse` int(11) NOT NULL,
  `reponse1` text NOT NULL,
  `reponse2` text NOT NULL,
  `reponse3` text NOT NULL,
  `reponse4` text NOT NULL,
  `reponse_vrai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `nom_test` varchar(20) NOT NULL,
  `duree_ecrite` int(20) NOT NULL,
  `duree_lexique` int(20) NOT NULL,
  `duree_expression` int(20) NOT NULL,
  `duree_orale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `nom_test`, `duree_ecrite`, `duree_lexique`, `duree_expression`, `duree_orale`) VALUES
(1, 'GT1', 1, 1, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id_audio`),
  ADD KEY `id_test` (`id_test`);

--
-- Index pour la table `expression`
--
ALTER TABLE `expression`
  ADD PRIMARY KEY (`id_qst`),
  ADD KEY `id_test` (`id_test`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_test` (`id_test`);

--
-- Index pour la table `image_lexique`
--
ALTER TABLE `image_lexique`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `id_test` (`id_test`);

--
-- Index pour la table `image_orale`
--
ALTER TABLE `image_orale`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_audio` (`id_audio`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_reponse` (`id_reponse`);

--
-- Index pour la table `question_lexique`
--
ALTER TABLE `question_lexique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_i` (`id_i`);

--
-- Index pour la table `question_orale`
--
ALTER TABLE `question_orale`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_reponse` (`id_reponse`,`id_audio`),
  ADD KEY `id_audio` (`id_audio`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`);

--
-- Index pour la table `reponse_orale`
--
ALTER TABLE `reponse_orale`
  ADD PRIMARY KEY (`id_reponse`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `audio`
--
ALTER TABLE `audio`
  MODIFY `id_audio` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `expression`
--
ALTER TABLE `expression`
  MODIFY `id_qst` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `image_lexique`
--
ALTER TABLE `image_lexique`
  MODIFY `id_i` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `image_orale`
--
ALTER TABLE `image_orale`
  MODIFY `id_image` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `question_lexique`
--
ALTER TABLE `question_lexique`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `question_orale`
--
ALTER TABLE `question_orale`
  MODIFY `id_question` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_reponse` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `reponse_orale`
--
ALTER TABLE `reponse_orale`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id`);

--
-- Contraintes pour la table `expression`
--
ALTER TABLE `expression`
  ADD CONSTRAINT `expression_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id`);

--
-- Contraintes pour la table `image_lexique`
--
ALTER TABLE `image_lexique`
  ADD CONSTRAINT `image_lexique_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id`);

--
-- Contraintes pour la table `image_orale`
--
ALTER TABLE `image_orale`
  ADD CONSTRAINT `image_orale_ibfk_1` FOREIGN KEY (`id_audio`) REFERENCES `audio` (`id_audio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`id_reponse`) REFERENCES `reponse` (`id_reponse`);

--
-- Contraintes pour la table `question_lexique`
--
ALTER TABLE `question_lexique`
  ADD CONSTRAINT `question_lexique_ibfk_1` FOREIGN KEY (`id_i`) REFERENCES `image_lexique` (`id_i`) ON DELETE CASCADE;

--
-- Contraintes pour la table `question_orale`
--
ALTER TABLE `question_orale`
  ADD CONSTRAINT `question_orale_ibfk_1` FOREIGN KEY (`id_reponse`) REFERENCES `reponse_orale` (`id_reponse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_orale_ibfk_2` FOREIGN KEY (`id_audio`) REFERENCES `audio` (`id_audio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
