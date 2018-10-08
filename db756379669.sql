-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db756379669.db.1and1.com
-- Généré le :  Ven 05 Octobre 2018 à 10:18
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db756379669`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `login_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_admin` varchar(88) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(23) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login_admin`, `password_admin`, `salt`) VALUES
(1, 'JeanF', 'd6f8cdd522e4013ea482c6dfb3154c086b627eec', '');

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_chapter` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `content`, `date_chapter`) VALUES
(1, 'Chapitre 1 - Sur la piste des loups', '<p><strong>Je pr&eacute;f&eacute;rais largement le parc quand il s''appelait McKinley</strong> et qu''il &eacute;tait fait pour les mouftons. Puis, Washington nous a fait avaler<br />cette chose qu''on appelle l''Anilca [Alaska National Interest Lands Conservation Act].&raquo;</p>\r\n<p>Cette loi, vot&eacute;e par le Congr&egrave;s en 1980, a transform&eacute; 420 000 km2 en for&ecirc;ts, r&eacute;serves et parcs nationaux, plus 200 000 km2 en espaces<br />sauvages prot&eacute;g&eacute;s. Le parc du mont McKinley a &eacute;t&eacute; rebaptis&eacute; Denali, sa superficie passant de 8100 &agrave; 24 300 km2. Les droits de propri&eacute;t&eacute;<br />priv&eacute;e ont toutefois &eacute;t&eacute; pr&eacute;serv&eacute;s dans l''ensemble de la r&eacute;serve, de m&ecirc;me que les droits de chasse et de pi&eacute;geage dans certains secteurs.<br />Pour beaucoup, l''Anilca est l''une des victoires les plus &eacute;clatantes des protecteurs de l''environnementdans l''histoire des &Eacute;tats-Unis.</p>\r\n<p>Mais nombre d''askiens y ont vu l''apog&eacute;e de longues ann&eacute;es d''interventionnisme f&eacute;d&eacute;ral. En 1978,<br />des manifestants avaient br&ucirc;l&eacute; une effigie de Jimmy Carter &agrave; Fairbanks (la deuxi&egrave;me plus grande ville de l''&Eacute;tat), car le pr&eacute;sident am&eacute;ricain<br />avait promu 227 000 km2 du territoire alaskien au rang de monument national. Et, en 1979, des habitants de localit&eacute;s proches du parc avaient<br /><br />Je suis bien loin de cette pol&eacute;mique - et de tout le reste - quand je passe la t&ecirc;te dans l''ouverture de ma tente, sur un site de campement<br />des environs de Cache Creek, &agrave; la mi-mars.</p>\r\n<p>C''est le troisi&egrave;me matin de notre exp&eacute;dition en tra&icirc;neau &agrave; chiens, et<strong> le troisi&egrave;me matin o&ugrave; il fait - 25 &deg;C.</strong> J''envisage de me retirer dans mon abri<br />douillet</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p>mais le Denali, visible la plupart du temps en hiver, aimante mon regard. Des rayons de soleil &eacute;claboussent le sommet.<br />Quand je trouve enfin le courage de sortir de ma tente, la trentaine de chiens jappent et aboient. En hiver, les attelages de chiens font<br />encore partie int&eacute;grante de la vie dans ces r&eacute;gions recul&eacute;es. C''est avec eux que les limites du parc sont surveill&eacute;es, que les recherches sur<br />la faune sont men&eacute;es, et que le mat&eacute;riel n&eacute;cessaire au nettoyage et &agrave; l''entretien des cabanes est transport&eacute;. Et, parmi les d&eacute;monstrations<br />propos&eacute;es aux visiteurs par le personnel du parc, le spectacle organis&eacute; chaque &eacute;t&eacute; avec le chenil est le plus appr&eacute;ci&eacute;.<br />Les chiens rattachent les gens &agrave; l''histoire et &agrave; une exp&eacute;rience que la plupart d''entre eux ne vivront jamais, observe Jennifer Raffaeli, la<br />directrice du chenil.</p>', '2018-09-06 00:00:00'),
(2, 'Chapitre 2 - Le matin où il fait -35°C.', '<p>C''est le troisi&egrave;me matin de notre exp&eacute;dition en tra&icirc;neau &agrave; chiens, outrepasse ses droits et &agrave; ces &eacute;cologistes bienpensants.Je pr&eacute;f&eacute;rais largement le parc quand il s''appelait McKinley et qu''il &eacute;tait fait pour les mouftons. Puis, Washington nous a fait avaler cette chose qu''on appelle l''Anilca [Alaska National Interest Lands Conservation Act].&raquo; Cette loi, vot&eacute;e par le Congr&egrave;s en 1980, a transform&eacute; 420 000 km2 en for&ecirc;ts, r&eacute;serves et parcs nationaux, plus 200 000 km2 en espaces sauvages prot&eacute;g&eacute;s.</p>\r\n<p>Le parc du mont McKinley a &eacute;t&eacute; rebaptis&eacute; Denali, sa superficie passant de 8100 &agrave; 24 300 km2. Les droits de propri&eacute;t&eacute; priv&eacute;e ont toutefois &eacute;t&eacute; pr&eacute;serv&eacute;s dans l''ensemble de la r&eacute;serve, de m&ecirc;me que les droits de chasse et de pi&eacute;geage dans certains secteurs.</p>\r\n<p>Pour beaucoup, l''Anilca est l''une des victoires les plus &eacute;clatantes des protecteurs de l''environnementdans l''histoire des &Eacute;tats-Unis. Mais nombre d''askiens y ont vu l''apog&eacute;e de longues ann&eacute;es d''interventionnisme f&eacute;d&eacute;ral. En 1978, des manifestants avaient br&ucirc;l&eacute; une effigie de Jimmy Carter &agrave; Fairbanks (la deuxi&egrave;me plus grande ville de l''&Eacute;tat), car le pr&eacute;sident am&eacute;ricain avait promu 227 000 km2 du territoire alaskien au rang de monument national. Et, en 1979, des habitants de localit&eacute;s proches du parc avaient Je suis bien loin de cette pol&eacute;mique - et de tout le reste - quand je passe la t&ecirc;te dans l''ouverture de ma tente, sur un site de campement des environs de Cache Creek, &agrave; la mi-mars.<img style="display: block; margin: 5px; float: right;" src="public/images/glace.jpg" alt="glace" width="222" height="222" /></p>\r\n<p>C''est le troisi&egrave;me matin de notre exp&eacute;dition en tra&icirc;neau &agrave; chiens, et le troisi&egrave;me matin o&ugrave; il fait - 25 &deg;C. J''envisage de me retirer dans mon abri douillet mais le Denali, visible la plupart du temps en hiver, aimante mon regard. Des rayons de soleil &eacute;claboussent le sommet. Quand je trouve enfin le courage de sortir de ma tente, la trentaine de chiens jappent et aboient. En hiver, les attelages de chiens font encore partie int&eacute;grante de la vie dans ces r&eacute;gions recul&eacute;es.</p>\r\n<p>C''est avec eux que les limites du parc sont surveill&eacute;es, que les recherches sur la faune sont men&eacute;es, et que le mat&eacute;riel n&eacute;cessaire au nettoyage et &agrave; l''entretien des cabanes est transport&eacute;. Et, parmi les d&eacute;monstrations propos&eacute;es aux visiteurs par le personnel du parc, le spectacle organis&eacute; chaque &eacute;t&eacute; avec le chenil est le plus appr&eacute;ci&eacute;.</p>\r\n<p>Les chiens rattachent les gens &agrave; l''histoire et &agrave; une exp&eacute;rience que la plupart d''entre eux ne vivront jamais, observe Jennifer Raffaeli, la directrice du chenil.</p>', '2018-09-09 00:00:00'),
(3, 'Chapitre 3 - les contraintes', '<p style="text-align: left;"><span style="text-decoration: underline; color: #050ff9;"><em>Le but de ce voyage &eacute;tait de me fondre dans la nature, alors je me suis fix&eacute; quelques r&egrave;gles :</em></span></p>\r\n<p>Premi&egrave;rement, je n&rsquo;avais pas le droit de suivre de route, de&nbsp;&nbsp; chemin, ni m&ecirc;me de sentier de randonn&eacute;e. Je devais cr&eacute;er mon propre passage et entrer le plus profond&eacute;ment possible dans le sauvage. J&rsquo;ai donc planifi&eacute; mon itin&eacute;raire l&agrave; o&ugrave; il n&rsquo;y avait aucune route, aucune habitation, aucune infrastructure humaine. En Alaska ce n&rsquo;est pas si dur &agrave; trouver.</p>\r\n<p>La deuxi&egrave;me r&egrave;gle &eacute;tait que mon sac devait comporter bien moins de choses que dans mes pr&eacute;c&eacute;dents voyages (fini les r&eacute;serves de nourriture, les trois pulls, le tapis de sol, le filtre &agrave; eau, le r&eacute;chaud)</p>\r\n<p style="text-align: left;"><strong><img style="display: block; float: left; margin: 5px;" src="public/images/loups.jpg" alt="alaska" width="222" height="222" /></strong></p>\r\n<p>. J&rsquo;ai &eacute;limin&eacute; l&rsquo;utile et n&rsquo;ai gard&eacute; que l&rsquo;indispensable.</p>\r\n<p>Dans mon sac, je portais : Une tente (que j&rsquo;ai du rafistoler avec du scotch apr&egrave;s l&rsquo;attaque d&rsquo;un ours), un duvet, un pull, un briquet, une boussole, des cartes, un GPS, un t&eacute;l&eacute;phone satellite, un couteau, un gourde, une gamelle, des livres, un appareil photo, une cam&eacute;ra, un cahier et un crayon. Avec cet &eacute;quipement, on peut partir quasiment partout pendant plusieurs mois.</p>\r\n<p>Mon objectif dans mes prochaines exp&eacute;ditions est d&rsquo;apprendre &agrave; me passer au fur et &agrave; mesure de ces objets en faisant par exemple du feu moi-m&ecirc;me, en me taillant une pierre qui fera office de couteau, en construisant des abris</p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p>pour me passer de la tente...</p>', '2018-09-17 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_chapters` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `reports` varchar(255) NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `id_chapters`, `name`, `message`, `reports`, `date_comment`) VALUES
(2, 2, 'ALAIN', '<p>tr&egrave;s tr&egrave;s int&eacute;ressant. La suite SVP</p>', '0', '2018-09-23 22:00:00'),
(3, 3, 'VINCENT', '<p>Avez-vous vraiment v&eacute;cu cela?</p>\r\n<p>&nbsp;</p>\r\n<p><em><span style="text-decoration: underline;">R&eacute;ponse de Jean Forteroche :</span></em> <em>oui tout &agrave; fait. Je vais vous raconter la suite dans mes prochains &eacute;pisodes</em></p>\r\n<p><em><img title="Rigolant" src="public/tiny_mce/plugins/emotions/img/smiley-laughing.gif" alt="Rigolant" border="0" /></em></p>', '0', '2018-09-23 22:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
