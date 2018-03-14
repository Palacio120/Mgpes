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
-- Table structure for table `maestriaemp`
--

DROP TABLE IF EXISTS `maestriaemp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestriaemp` (
  `No_Maestria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NombrePosgrado` longtext,
  `EstadoActual` enum('Cursando','terminada','licencia','baja') DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `Disiplina` longtext,
  `Duracion` int(11) DEFAULT '0',
  `FechaConclucion` date DEFAULT NULL,
  `Grado` int(11) DEFAULT '0',
  `DomicioloInstitucion` longtext,
  `DomicilioNum` char(10) DEFAULT '',
  `TelefonoInstitucion` char(8) DEFAULT '',
  `ApoyoEconomico` int(10) unsigned NOT NULL,
  PRIMARY KEY (`No_Maestria`),
  KEY `ApoyoEconomico` (`ApoyoEconomico`),
  CONSTRAINT `maestriaemp_ibfk_1` FOREIGN KEY (`ApoyoEconomico`) REFERENCES `apoyoeconomico` (`Registro`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestriaemp`
--

LOCK TABLES `maestriaemp` WRITE;
/*!40000 ALTER TABLE `maestriaemp` DISABLE KEYS */;
INSERT INTO `maestriaemp` VALUES (1,'prueba',NULL,NULL,NULL,0,NULL,0,NULL,'','',1);
/*!40000 ALTER TABLE `maestriaemp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-14 14:13:55
