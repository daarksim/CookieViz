SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `CookieViz`
--
CREATE DATABASE IF NOT EXISTS CookieViz;
USE CookieViz;

-- --------------------------------------------------------

--
-- Structure de la table `url_referer`
--

CREATE TABLE IF NOT EXISTS `url_referer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_domains` text NOT NULL,
  `referer_domains` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `is_cookie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
