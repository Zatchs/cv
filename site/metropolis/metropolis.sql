-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 03 Mai 2019 à 08:54
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `metropolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `id_role` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE `concerne` (
  `id_film` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `video` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id_film`, `titre`, `description`, `image`, `id_personne`, `id_genre`, `video`) VALUES
(1, 'Interstellar', 'Dans un futur proche, la Terre est de moins en moins accueillante pour l\'humanité qui connaît une grave crise alimentaire. Le film raconte les aventures d\'un groupe d\'explorateurs qui utilise une faille récemment découverte dans l\'espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.', 'images/Interstellar.jpeg', 1, 3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kTGDxqUowq4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'After', 'Depuis son plus jeune âge, Tessa était promise à un avenir tout tracé : une vie rangée, une brillante carrière, un mariage tranquille avec son fiancé de toujours. Jusqu\'à sa rencontre avec Hardin à son arrivée à l\'université. Grossier, provocateur, cruel, c\'est le garçon le plus détestable qu\'elle ait jamais croisé.', 'images/a.jpg', 2, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lb9HUR5k2gU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Green book', 'En 1962, alors que règne la ségrégation, Tony Lip, un videur italo-américain du Bronx, est engagé pour conduire et protéger le Dr Don Shirley, un pianiste noir de renommée mondiale, lors d\'une tournée de concerts. Durant leur périple de Manhattan jusqu\'au Sud profond, ils doivent se confronter aux humiliations, perceptions et persécutions, tout en devant trouver des établissements accueillant les personnes de couleurs.', 'images/b.jpg', 3, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/q1D0oB6-IfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Le chant du loup', 'Un jeune homme a le don rare de reconnaître chaque son qu\'il entend. A bord d\'un sous-marin nucléaire français, tout repose sur lui, l\'Oreille d\'Or. Réputé infaillible, il commet pourtant une erreur qui met l\'équipage en danger de mort.', 'images/c.jpg', 4, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0-LTTNiGgUA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'Avengers', 'Après leur défaite face au Titan Thanos qui s\'est approprié toutes les pierres du Gant de l\'infini, les quelques Avengers et les Gardiens de la Galaxie ayant survécu à son claquement de doigts qui a pulvérisé « la moitié de toute forme de vie dans l\'Univers », Captain America, Thor, Bruce Banner, Natasha Romanoff, War Machine, Tony Stark, Nébula et Rocket, vont essayer de trouver une solution pour ramener leurs coéquipiers disparus et vaincre Thanos en se faisant aider par Clint Barton, Captain Marvel et Ant-Man. ', 'images/avengers.jpeg', 5, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wV-Q0o2OQjQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Dragon 3', 'Une dizaine d\'années plus tard, Harold et Astrid, désormais parents de deux enfants (un garçon et une fille), approchent de l\'entrée du Monde caché après un long voyage de bateau. Ils y retrouvent Krokmou, la Furie éclair et leurs trois petits hybrides. Krokmou n\'identifie pas son dragonnier immédiatement (qui est maintenant barbu), mais à la vue et l\'odeur de la main d\'Harold, Krokmou reconnaît son ami. Alors qu\'il retrouve son ami et initie ses enfants au vol sur dos de dragon, Harold espère qu\'un jour, les dragons pourront revenir en paix dans le monde des humains. ', 'images/e.jpg', 6, 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tEUFQ8mdzcg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'A star is born', 'Star de country sur le déclin, Jackson Maine (Bradley Cooper) découvre Ally Campana (Lady Gaga), une jeune chanteuse très prometteuse. Tandis qu\'ils tombent follement amoureux l\'un de l\'autre, Jack propulse Ally sur le devant de la scène et fait d\'elle une artiste adulée par le public. Bientôt éclipsé par le succès de la jeune femme, il vit de plus en plus mal son propre déclin. ', 'images/f.jpeg', 7, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jsg9NxCBzFs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Asterix et le secret de la potion magique', 'À la suite d\'une chute lors de la cueillette du gui, le druide Panoramix décide qu\'il est temps d\'assurer l\'avenir du village. Accompagné d\'Astérix et Obélix, il entreprend de parcourir le monde gaulois à la recherche d\'un jeune druide talentueux à qui transmettre le secret de la Potion Magique.', 'images/g.jpeg', 8, 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/klnu4ps7C8w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Nous finirons ensemble', 'Sept ans après, la bande d\'amis a éclaté mais se retrouve, à l’occasion de l\'anniversaire surprise de Max qui ne semble pas ravi de revoir tous ses amis. ', 'images/h.jpg', 9, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RjfF0V5blEE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'La dame blanche', 'En 1973, à Los Angeles, Anna est une assistance sociale du service de protection des enfants. Son mari, policier, a été tué au cours d\'une intervention de service un an avant ; elle reste seule à éduquer leurs deux enfants. Elle va au domicile de Patricia, une femme soupçonnée de maltraiter ses enfants. Anna découvre les deux enfants dans un placard, enfermés à double tour. Patricia est placée en garde-à-vue et les enfants placés en foyer d\'accueil. La nuit suivante, un spectre blanchâtre poursuit les enfants. Ceux-ci sont retrouvés noyés dans le fleuve.\r\n\r\n', 'images/i.jpg', 10, 7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NlVWRyA8eAc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'Dumbo', 'Au retour de la guerre, Holt Farrier, une ancienne gloire du cirque, est embauché par Max Medici, propriétaire d\'un cirque au bord de la faillitte. La troupe est en joie car un éléphanteau vient de naître. Max Medici constate avec horreur que l\'animal, baptisé Dumbo, a des oreilles énormes.', 'images/j.jpg', 11, 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-mPAnHDCm9Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `Description`) VALUES
(1, 'Enfant'),
(2, 'Action'),
(3, 'Science-Fiction'),
(4, 'Comédie'),
(5, 'Drame'),
(6, 'Animation'),
(7, 'Horreur');

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `personne` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id_personne`, `nom`, `personne`, `id_role`) VALUES
(1, 'NOLAN', 'Christopher', 1),
(2, 'GAGE', 'Jenny', 1),
(3, 'FARRELLY', 'Peter', 1),
(4, 'BAUDRY', 'Antonin ', 1),
(5, 'WHEDON', 'Joss', 1),
(6, 'DEBLOIS', 'Dean', 1),
(7, 'COOPER', 'Bradley', 1),
(8, 'ASTIER', 'Alexandre', 1),
(9, 'CANET', 'Guillaume', 1),
(10, 'CHAVES', ' Micheal', 1),
(11, 'BURTON', 'Tim', 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `description`) VALUES
(1, 'Realisateur'),
(2, 'Acteur'),
(3, 'Producteur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`id_role`,`id_film`),
  ADD KEY `appartient_film0_FK` (`id_film`);

--
-- Index pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD PRIMARY KEY (`id_film`,`id_personne`),
  ADD KEY `concerne_personnage0_FK` (`id_personne`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `appartient_genre_FK` FOREIGN KEY (`id_role`) REFERENCES `genre` (`id_genre`);

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD CONSTRAINT `concerne_film_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `concerne_personnage0_FK` FOREIGN KEY (`id_personne`) REFERENCES `personnage` (`id_personne`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
