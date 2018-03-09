-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mgps
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `asignaturasest`
--

DROP TABLE IF EXISTS `asignaturasest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignaturasest` (
  `RegistroAsignaturas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NRC` int(10) unsigned NOT NULL,
  `CodigoEs` char(9) DEFAULT NULL,
  `Codigo_Asignatura` char(9) DEFAULT NULL,
  PRIMARY KEY (`RegistroAsignaturas`),
  KEY `NRC` (`NRC`),
  KEY `CodigoEs` (`CodigoEs`),
  KEY `asignaturasest_ibfk_3_idx` (`Codigo_Asignatura`),
  CONSTRAINT `asignaturasest_ibfk_1` FOREIGN KEY (`NRC`) REFERENCES `ofertaacademica` (`NRC`) ON UPDATE CASCADE,
  CONSTRAINT `asignaturasest_ibfk_2` FOREIGN KEY (`CodigoEs`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `asignaturasest_ibfk_3` FOREIGN KEY (`Codigo_Asignatura`) REFERENCES `ofertaacademica` (`Codigo_Asignatura`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaturasest`
--

LOCK TABLES `asignaturasest` WRITE;
/*!40000 ALTER TABLE `asignaturasest` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignaturasest` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-09 15:41:33
