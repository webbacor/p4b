-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 12 sep. 2018 à 13:10
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogalaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_admin` varchar(88) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(23) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login_admin`, `password_admin`, `salt`) VALUES
(1, 'JeanF', 'd6f8cdd522e4013ea482c6dfb3154c086b627eec', ''),
(2, 'corinne', '9359a4d812173b65a3a0094cd86363e79731a3c2', '');

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_chapter` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `content`, `date_chapter`) VALUES
(1, 'Chapitre 1 - Sur la piste des loups', '<p><strong>Je pr&eacute;f&eacute;rais largement le parc quand il s\'appelait McKinley</strong> et qu\'il &eacute;tait fait pour les mouftons. Puis, Washington nous a fait avaler<br />cette chose qu\'on appelle l\'Anilca [Alaska National Interest Lands Conservation Act].&raquo;</p>\r\n<p>Cette loi, vot&eacute;e par le Congr&egrave;s en 1980, a transform&eacute; 420 000 km2 en for&ecirc;ts, r&eacute;serves et parcs nationaux, plus 200 000 km2 en espaces<br />sauvages prot&eacute;g&eacute;s. Le parc du mont McKinley a &eacute;t&eacute; rebaptis&eacute; Denali, sa superficie passant de 8100 &agrave; 24 300 km2. Les droits de propri&eacute;t&eacute;<br />priv&eacute;e ont toutefois &eacute;t&eacute; pr&eacute;serv&eacute;s dans l\'ensemble de la r&eacute;serve, de m&ecirc;me que les droits de chasse et de pi&eacute;geage dans certains secteurs.<br />Pour beaucoup, l\'Anilca est l\'une des victoires les plus &eacute;clatantes des protecteurs de l\'environnementdans l\'histoire des &Eacute;tats-Unis.</p>\r\n<p>Mais nombre d\'askiens y ont vu l\'apog&eacute;e de longues ann&eacute;es d\'interventionnisme f&eacute;d&eacute;ral. En 1978,<br />des manifestants avaient br&ucirc;l&eacute; une effigie de Jimmy Carter &agrave; Fairbanks (la deuxi&egrave;me plus grande ville de l\'&Eacute;tat), car le pr&eacute;sident am&eacute;ricain<br />avait promu 227 000 km2 du territoire alaskien au rang de monument national. Et, en 1979, des habitants de localit&eacute;s proches du parc avaient<br /><br />Je suis bien loin de cette pol&eacute;mique - et de tout le reste - quand je passe la t&ecirc;te dans l\'ouverture de ma tente, sur un site de campement<br />des environs de Cache Creek, &agrave; la mi-mars.</p>\r\n<p>C\'est le troisi&egrave;me matin de notre exp&eacute;dition en tra&icirc;neau &agrave; chiens, et<strong> le troisi&egrave;me matin o&ugrave; il fait - 25 &deg;C.</strong> J\'envisage de me retirer dans mon abri<br />douillet</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p>mais le Denali, visible la plupart du temps en hiver, aimante mon regard. Des rayons de soleil &eacute;claboussent le sommet.<br />Quand je trouve enfin le courage de sortir de ma tente, la trentaine de chiens jappent et aboient. En hiver, les attelages de chiens font<br />encore partie int&eacute;grante de la vie dans ces r&eacute;gions recul&eacute;es. C\'est avec eux que les limites du parc sont surveill&eacute;es, que les recherches sur<br />la faune sont men&eacute;es, et que le mat&eacute;riel n&eacute;cessaire au nettoyage et &agrave; l\'entretien des cabanes est transport&eacute;. Et, parmi les d&eacute;monstrations<br />propos&eacute;es aux visiteurs par le personnel du parc, le spectacle organis&eacute; chaque &eacute;t&eacute; avec le chenil est le plus appr&eacute;ci&eacute;.<br />Les chiens rattachent les gens &agrave; l\'histoire et &agrave; une exp&eacute;rience que la plupart d\'entre eux ne vivront jamais, observe Jennifer Raffaeli, la<br />directrice du chenil.</p>', '2018-09-06 00:00:00'),
(3, 'Chapitre 2 - Le troisième matin où il fait - 25 °C.', 'C\'est le troisième matin de notre expédition en traîneau à chiens, outrepasse ses droits et à ces écologistes bienpensants.Je préférais largement le parc quand il s\'appelait McKinley et qu\'il était fait pour les mouftons. Puis, Washington nous a fait avaler\r\ncette chose qu\'on appelle l\'Anilca [Alaska National Interest Lands Conservation Act].»\r\n\r\nCette loi, votée par le Congrès en 1980, a transformé 420 000 km2 en forêts, réserves et parcs nationaux, plus 200 000 km2 en espaces\r\nsauvages protégés. Le parc du mont McKinley a été rebaptisé Denali, sa superficie passant de 8100 à 24 300 km2. Les droits de propriété\r\nprivée ont toutefois été préservés dans l\'ensemble de la réserve, de même que les droits de chasse et de piégeage dans certains secteurs.\r\nPour beaucoup, l\'Anilca est l\'une des victoires les plus éclatantes des protecteurs de l\'environnementdans l\'histoire des États-Unis.\r\n\r\nMais nombre d\'askiens y ont vu l\'apogée de longues années d\'interventionnisme fédéral. En 1978,\r\ndes manifestants avaient brûlé une effigie de Jimmy Carter à Fairbanks (la deuxième plus grande ville de l\'État), car le président américain\r\navait promu 227 000 km2 du territoire alaskien au rang de monument national. Et, en 1979, des habitants de localités proches du parc avaient\r\n\r\nJe suis bien loin de cette polémique - et de tout le reste - quand je passe la tête dans l\'ouverture de ma tente, sur un site de campement\r\ndes environs de Cache Creek, à la mi-mars.\r\n\r\nC\'est le troisième matin de notre expédition en traîneau à chiens, et le troisième matin où il fait - 25 °C. J\'envisage de me retirer dans mon abri\r\ndouillet\r\n\r\nmais le Denali, visible la plupart du temps en hiver, aimante mon regard. Des rayons de soleil éclaboussent le sommet.\r\nQuand je trouve enfin le courage de sortir de ma tente, la trentaine de chiens jappent et aboient. En hiver, les attelages de chiens font\r\nencore partie intégrante de la vie dans ces régions reculées. C\'est avec eux que les limites du parc sont surveillées, que les recherches sur\r\nla faune sont menées, et que le matériel nécessaire au nettoyage et à l\'entretien des cabanes est transporté. Et, parmi les démonstrations\r\nproposées aux visiteurs par le personnel du parc, le spectacle organisé chaque été avec le chenil est le plus apprécié.\r\nLes chiens rattachent les gens à l\'histoire et à une expérience que la plupart d\'entre eux ne vivront jamais, observe Jennifer Raffaeli, la\r\ndirectrice du chenil.', '2018-09-09 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_chapters` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `reports` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_chapters`, `name`, `message`, `reports`) VALUES
(1, 1, 'VINCENT', 'bonjour,.....\r\n\r\n\r\nréponse de l\'auteur ; je voudrais faire un retour à la ligne >\r\nmais ça ne fonctionne pas.\r\n\r\n\r\n', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
