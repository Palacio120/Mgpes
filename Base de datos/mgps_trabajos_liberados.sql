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
-- Table structure for table `trabajos_liberados`
--

DROP TABLE IF EXISTS `trabajos_liberados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajos_liberados` (
  `no_trabajos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Codigo_es` char(9) DEFAULT NULL,
  `Carta_liberacion` longblob,
  `DirectorXLector` enum('Lector','Director') DEFAULT NULL,
  `No_Tesis` int(10) unsigned NOT NULL,
  PRIMARY KEY (`no_trabajos`),
  KEY `No_Tesis` (`No_Tesis`),
  KEY `Codigo_es` (`Codigo_es`),
  CONSTRAINT `trabajos_liberados_ibfk_1` FOREIGN KEY (`No_Tesis`) REFERENCES `direcciondetesis` (`No_Tesis`) ON UPDATE CASCADE,
  CONSTRAINT `trabajos_liberados_ibfk_2` FOREIGN KEY (`Codigo_es`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajos_liberados`
--

LOCK TABLES `trabajos_liberados` WRITE;
/*!40000 ALTER TABLE `trabajos_liberados` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajos_liberados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-24 14:36:31
