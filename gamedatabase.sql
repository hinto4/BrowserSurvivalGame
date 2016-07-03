-- MySQL dump 10.13  Distrib 5.1.69, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: game
-- ------------------------------------------------------
-- Server version	5.1.69

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `andmed`
--

DROP TABLE IF EXISTS `andmed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `andmed` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `kasutaja` varchar(32) DEFAULT NULL,
  `elud` varchar(32) DEFAULT NULL,
  `staatus` varchar(32) DEFAULT NULL,
  `energia` varchar(32) DEFAULT NULL,
  `kaal` varchar(32) DEFAULT NULL,
  `kott` varchar(32) DEFAULT NULL,
  `kivi` varchar(32) DEFAULT NULL,
  `raud` int(32) DEFAULT NULL,
  `puit` varchar(32) DEFAULT NULL,
  `toit` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `andmed`
--

LOCK TABLES `andmed` WRITE;
/*!40000 ALTER TABLE `andmed` DISABLE KEYS */;
INSERT INTO `andmed` VALUES (1,'admin','100','Tsiviil','6','90','10','0',0,'3682','0');
/*!40000 ALTER TABLE `andmed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ehitised`
--

DROP TABLE IF EXISTS `ehitised`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ehitised` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `kasutaja` varchar(32) DEFAULT NULL,
  `baas` int(32) DEFAULT NULL,
  `baas_tase` mediumint(9) DEFAULT NULL,
  `farm` mediumint(9) DEFAULT NULL,
  `farm_tase` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ehitised`
--

LOCK TABLES `ehitised` WRITE;
/*!40000 ALTER TABLE `ehitised` DISABLE KEYS */;
INSERT INTO `ehitised` VALUES (1,'admin',0,0,NULL,NULL);
/*!40000 ALTER TABLE `ehitised` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `esemed`
--

DROP TABLE IF EXISTS `esemed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esemed` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `nimetus` varchar(32) DEFAULT NULL,
  `vastupidavus` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esemed`
--

LOCK TABLES `esemed` WRITE;
/*!40000 ALTER TABLE `esemed` DISABLE KEYS */;
INSERT INTO `esemed` VALUES (1,'Kirves',100),(2,'Saag',100);
/*!40000 ALTER TABLE `esemed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kasutajad`
--

DROP TABLE IF EXISTS `kasutajad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kasutajad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasutaja` varchar(32) DEFAULT NULL,
  `parool` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasutajad`
--

LOCK TABLES `kasutajad` WRITE;
/*!40000 ALTER TABLE `kasutajad` DISABLE KEYS */;
INSERT INTO `kasutajad` VALUES (1,'admin','lammas');
/*!40000 ALTER TABLE `kasutajad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kott`
--

DROP TABLE IF EXISTS `kott`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kott` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `kasutaja` varchar(32) DEFAULT NULL,
  `koht0` mediumint(9) DEFAULT NULL,
  `koht1` mediumint(9) DEFAULT NULL,
  `koht2` mediumint(9) DEFAULT NULL,
  `koht3` mediumint(9) DEFAULT NULL,
  `koht4` mediumint(9) DEFAULT NULL,
  `koht5` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kott`
--

LOCK TABLES `kott` WRITE;
/*!40000 ALTER TABLE `kott` DISABLE KEYS */;
INSERT INTO `kott` VALUES (1,'admin',0,0,0,0,0,0);
/*!40000 ALTER TABLE `kott` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-02 16:20:45
