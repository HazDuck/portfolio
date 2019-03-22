# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: pete_portfolio
# Generation Time: 2019-03-21 16:49:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paratext` varchar(1000) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `paratext`, `deleted`)
VALUES
	(1,'I?m currently improving my skills as a Full Stack developer.\r\n    I have a diverse career background including working as part of the Product Owner team for Cancer Research UK?s flagship product ?Race for Life?, teaching English in Tokyo, and helping a small Cornish company create an app for their staff.\r\n ',0),
	(280,'bobby',1),
	(281,'Cat',1),
	(282,'bobsdfdsfdsfdsfdsfdsfdsfdsfdsfdsfds',1),
	(283,'djsfnodsnfjkdsnfjkndskjfnjkdsfnbjknfdsjk',1),
	(284,'shfjksdbnjkdnsjkfnsdjkfnbjksdn',0);

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password`;

CREATE TABLE `password` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT '',
  `password` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `password` WRITE;
/*!40000 ALTER TABLE `password` DISABLE KEYS */;

INSERT INTO `password` (`id`, `username`, `password`)
VALUES
	(1,'pete','$2y$10$4VVzH3AuHMZa3QR/JTs.MeSlWVACkAJjYVImEVbYPChth./xEeUry');

/*!40000 ALTER TABLE `password` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
