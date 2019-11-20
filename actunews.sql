-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 20 nov. 2019 à 16:20
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `actunews`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(256) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `categorie_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`, `date_creation`, `categorie_id`, `auteur_id`) VALUES
(25, 'Emmanuel Macron se prononce contre l\'interdiction les listes Ã©lectorales communautaires', '<h3>Le chef de l\'Etat a dÃ©fendu une position \"pragmatique\", appelant Ã  \"ne pas tout confondre\" en soulignant que ce n\'est en \"aucun cas un cadre de combat ou d\'exclusion\" contre une partie de la sociÃ©tÃ© franÃ§aise.</h3>\r\n\r\n<p>C\'est un non clair et net. Emmanuel Macron s\'est prononcÃ© mardi 19 novembre contre l\'interdiction, voulue par la droite, des listes communautaires aux Ã©lections municipales de mars, tout en promettant de nouvelles mesures contre le communautarisme \"dans les prochaines semaines\".</p>\r\n\r\n<p>S\'exprimant devant le congrÃ¨s de l\'Association des maires de France (AMF), le chef de l\'Etat a apportÃ© une fin de non recevoir Ã  la demande de la droite qui a Ã©tÃ© soutenue par certains Ã©lus au RN et Ã  gauche. Elle est portÃ©e par le prÃ©sident des sÃ©nateurs LR Bruno Retailleau, qui a dÃ©posÃ© le 8 novembre une proposition de loi pour lutter contre les \"listes communautaristes\", en pleine polÃ©mique sur la laÃ¯citÃ© et le voile.</p>', '20456247.jpg', '2019-11-20 15:07:34', 1, 11),
(26, 'L\'Hémicycle de l\'Assemblée sera fermé de début juillet à fin septembre 2020 en raison de travaux d\'étanchéité', '<h3>Selon une lettre du président de l\'Assemblée nationale, il s\'agit de réparer la toiture de la salle des séances. Sa dernière rénovation complète date en effet de 1910. </h3>\r\n\r\n<p>\"Cœur battant de la démocratie française depuis plus de 200 ans, le Palais-Bourbon a subi les outrages du temps et est, en certains endroits, fortement dégradé.\" Ainsi débute le courrier envoyé, le 29 octobre, à un député par le président de l\'Assemblée nationale, Richard Ferrand, et que franceinfo a pu consulter. L\'ancien ministre informe les parlementaires que l\'Hémicycle du Palais-Bourbon sera fermé \"des premiers jours de juillet jusqu\'à la fin de septembre 2020, empêchant l\'organisation de toute séance pendant trois mois\". Cette information avait déjà été publiée dans Libération, le 1er novembre. </p>', '20455207.jpg', '2019-11-20 15:10:40', 1, 11),
(27, 'Patrimoine : après le coup de gueule de Stéphane Bern, députés et sénateurs rétablissent les 21 millions d\'euros de crédits pour 2019', '<h3>L\'Assemblée et le Sénat se sont mis d\'accord pour maintenir les crédits 2019 en faveur du patrimoine.</h3>\r\n\r\n<p>La décision conjointe  de l\'Assemblée nationale et du Sénat de rétablir les 21 millions d\'euros de crédits 2019 en faveur du patrimoine a fait suite aux propos mardi sur Public Sénat de l\'animateur Stéphane Bern, chargé de la mission Patrimoine en péril, qui fustigeait un coup de rabot de Bercy de 25 millions d\'euros.</p>\r\n\r\n<p>Les deux chambres expliquent avoir \"approuvé le dégel de 21 millions d\'euros\" qui permettra de \"répondre aux demandes des collectivités territoriales concernant l\'entretien et la restauration des monuments historiques\". Les quatre millions qui manquent représentent de \"simples mesures de périmètre\" liées à \"la masse salariale\" et sont sans effet sur le programme \"Patrimoines\" concerné, assure le Sénat. </p>', '20459527.jpg', '2019-11-20 15:12:10', 4, 6),
(28, 'Coupe Davis : la France bat le Japon après la victoire de Mahut et Herbert lors du double décisif', '<p>Soulagement à Madrid. Bousculée par le Japon sans sa star Kei Nishikori, l’équipe de France a décroché mardi sa première victoire dans le groupe A de la Coupe Davis nouvelle formule. Pierre-Hugues Herbert et Nicolas Mahut ont remporté le double décisif permettant aux Tricolores de s’imposer 2-1 sur l’ensemble des trois matches. Ils prennent provisoirement la tête de leur poule devant la Serbie et le Japon, qui s’affrontent mercredi.</p>\r\n\r\n<p>Une victoire poussive, mais l’essentiel est là. Obligés de disputer un double décisif après la défaite surprise de Gaël Monfils face à Yoshihito Nishioka, les Bleus ne sont pas passés loin de la correction, pour leur premier match de la Coupe Davis 2019. Émoussés après leur enchaînement de victoires à Bercy et au Masters, Pierre Hugues-Herbert et Nicolas Mahut ont eu du mal à se défaire de la paire japonaise composée de Ben McLachlan et de Yasutaka Uchiyama, des adversaires normalement à leur portée. Les Tricolores ont fini par l’emporter difficilement en trois manches 6-7, 6-4, 7-5 et apportent à la France son premier point dans le groupe A.</p>', '000_1me2x7_0.jpg', '2019-11-20 15:13:35', 3, 11),
(29, 'Temps de travail, niveau de vie, immigration... Comment la société française a évolué depuis quarante ans', '<h4>L\'Insee brosse un \"portrait social\" de la France basé sur une série de statistiques concernant la qualité de vie, la répartition du travail ou encore l\'évolution de l\'immigration. </h4>\r\n\r\n<p>Une étude d\'une ampleur impressionnante. L\'Institut national de la statistique et des études économiques (Insee) a dévoilé mardi 19 novembre son rapport annuel \"France, portrait social\", qui se penche sur l\'évolution de la société depuis le milieu des années 1970. </p>\r\n\r\n<p>Ce document de 290 pages se penche sur quarante ans d\'évolution de la population française en termes de démographie, de temps de travail, d\'inégalités ou encore de niveau de vie. </p>', '20458023.jpg', '2019-11-20 15:16:07', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `prenom`, `nom`, `email`, `password`) VALUES
(1, 'Astrid', 'JONATHAN', 'ajo@actu.news', 'actunews'),
(6, 'Hugo', 'LIEGEARD', 'hugo@actu.news', 'actunews'),
(7, 'Nia', 'VITALIS', 'nia@actu.news', 'actunews'),
(8, 'AngÃ©lique', 'JEAN-NOEL', 'angelique@actu.news', 'actunews'),
(10, 'LÃ©a', 'LIEGEARD', 'lea.liegeard@gmail.com', '$2y$10$e2aKs9037bWFGBzFuiMxV.KutnNaOT.Z3v6cZErg4PqJXoO/38nVG'),
(11, 'Hugo', 'LIEGEARD', 'hugo_liegeard@yahoo.fr', '$2y$10$Uu.7QgICj90k/.2iHA8umeLiL.mVZAnn7MvQWlbZg0t817B0DnN7y');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Politique'),
(2, 'Economie'),
(3, 'Sports'),
(4, 'Culture'),
(5, 'Informatique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `auteur_id` (`auteur_id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
