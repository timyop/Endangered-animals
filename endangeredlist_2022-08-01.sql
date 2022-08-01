# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.38)
# Database: endangeredlist
# Generation Time: 2022-08-01 14:23:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table animals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `animals`;

CREATE TABLE `animals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `species` varchar(2000) DEFAULT NULL,
  `population` int(200) DEFAULT NULL,
  `country` varchar(2000) DEFAULT NULL,
  `charity` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `animals` WRITE;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;

INSERT INTO `animals` (`id`, `species`, `population`, `country`, `charity`)
VALUES
	(1,'Javan Rhinos',75,'Indonesia','https://support.wwf.org.uk/adopt-a-rhino'),
	(2,'Amur Leapord',100,'China / Russia','https://support.wwf.org.uk/adopt-a-leopard'),
	(3,'Sumatran Tiger',600,'Indonesia','https://support.wwf.org.uk/adopt-a-tiger'),
	(4,'Mountain Gorillas',1000,'Rwanda / Uganda','https://support.wwf.org.uk/adopt-a-gorilla'),
	(5,'Tapanuli Orangutan',800,'Indonesia','https://support.wwf.org.uk/adopt-a-gorilla'),
	(6,'Yangtze Finless Porpoise',1000,'China','https://support.wwf.org.uk/donate-to-wwf?_ga=2.78220884.1143952079.1659360636-67874068.1659360636'),
	(7,'Black Rhinos',5630,'Africa','https://support.wwf.org.uk/adopt-a-rhino'),
	(8,'African Forest Elephant',1000,'Africa','https://support.wwf.org.uk/adopt-an-elephant');

/*!40000 ALTER TABLE `animals` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
