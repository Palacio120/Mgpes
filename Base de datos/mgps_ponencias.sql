-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mgps
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `ponencias`
--

DROP TABLE IF EXISTS `ponencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponencias` (
  `NO_Ponencias` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CODIGO_ES` char(9) DEFAULT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `NombrePonencia` longtext,
  `Co_autoría` longtext,
  `Tipo` longtext,
  `Lugar` longtext,
  `Fecha` date DEFAULT NULL,
  `ApoyoEconomico` double(12,2) DEFAULT '0.00',
  `Institución` longtext,
  `Evidencias` longblob,
  `ProgramaApoyo` longtext,
  PRIMARY KEY (`NO_Ponencias`),
  KEY `CODIGO_ES` (`CODIGO_ES`),
  KEY `ponencias_ibfk_2` (`NombreCompleto`),
  CONSTRAINT `ponencias_ibfk_1` FOREIGN KEY (`CODIGO_ES`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `ponencias_ibfk_2` FOREIGN KEY (`NombreCompleto`) REFERENCES `estudiante` (`NombreCompleto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponencias`
--

LOCK TABLES `ponencias` WRITE;
/*!40000 ALTER TABLE `ponencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `ponencias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2018-03-09 15:31:26
=======
-- Dump completed on 2018-03-08  9:04:47
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
