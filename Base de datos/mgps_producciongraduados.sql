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
-- Table structure for table `producciongraduados`
--

DROP TABLE IF EXISTS `producciongraduados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producciongraduados` (
  `CodigoEs` char(9) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Articulos` int(11) DEFAULT NULL,
  `Libros` int(11) DEFAULT NULL,
  `CapitulosLib` int(11) DEFAULT NULL,
  `InformesTec` int(11) DEFAULT NULL,
  `Patentes` int(11) DEFAULT NULL,
  `DesarrolloSoftware` int(11) DEFAULT NULL,
  `DerechosAutor` int(11) DEFAULT NULL,
  `Congresos` int(11) DEFAULT NULL,
  `DesarrollosTec` int(11) DEFAULT NULL,
  `Periodo` date DEFAULT NULL,
  `No_Produccion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`No_Produccion`),
  KEY `Nombre` (`Nombre`),
  KEY `Codigo_ES` (`CodigoEs`),
  CONSTRAINT `producciongraduados_ibfk_1` FOREIGN KEY (`CodigoEs`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `producciongraduados_ibfk_2` FOREIGN KEY (`Nombre`) REFERENCES `estudiante` (`NombreCompleto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producciongraduados`
--

LOCK TABLES `producciongraduados` WRITE;
/*!40000 ALTER TABLE `producciongraduados` DISABLE KEYS */;
/*!40000 ALTER TABLE `producciongraduados` ENABLE KEYS */;
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
-- Dump completed on 2018-03-09 15:31:40
=======
-- Dump completed on 2018-03-08  9:05:41
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
