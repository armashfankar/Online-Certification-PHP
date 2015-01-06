-- MySQL dump 10.13  Distrib 5.1.69, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: tech
-- ------------------------------------------------------
-- Server version	5.1.69-0ubuntu0.10.04.1

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
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg` (
  `username` varchar(23) NOT NULL,
  `passwd` varchar(23) DEFAULT NULL,
  `dept` varchar(23) DEFAULT NULL,
  `name1` varchar(34) DEFAULT NULL,
  `name2` varchar(23) DEFAULT NULL,
  `name3` varchar(23) DEFAULT NULL,
  `ann` int(23) DEFAULT NULL,
  `gender` varchar(23) DEFAULT NULL,
  `email` varchar(34) DEFAULT NULL,
  `qua` varchar(23) DEFAULT NULL,
  `ssc` int(23) DEFAULT NULL,
  `mob` int(23) DEFAULT NULL,
  `addrs` varchar(33) DEFAULT NULL,
  `city` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg`
--

LOCK TABLES `reg` WRITE;
/*!40000 ALTER TABLE `reg` DISABLE KEYS */;
INSERT INTO `reg` VALUES ('saima','admin','computer','saima','murad','shameem',250000,'female','saima.hajee3@gmail.com','B.E',86,11001100,'mumbai','mumbai'),('huma','èÙ„œâ{ª\"SÒ‹%pz','computer','huma','momin','momin',150000,'female','abcd@gmail.com','B.E',85,150150,'mumbai','mumbai');
/*!40000 ALTER TABLE `reg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-08-08  2:05:45
