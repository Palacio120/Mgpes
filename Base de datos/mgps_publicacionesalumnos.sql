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
-- Table structure for table `publicacionesalumnos`
--

DROP TABLE IF EXISTS `publicacionesalumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicacionesalumnos` (
  `NO_Publicacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CODIGO_ES` char(9) DEFAULT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `TituloPublicacion` varchar(255) DEFAULT '',
  `Co_autoría` longtext,
  `TipoPublicacion` enum('libro','capítulo','artículo','otro') DEFAULT 'libro',
  `NombreLibXRev` longtext,
  `ISBNXISSN` char(20) DEFAULT NULL,
  `Editorial` longtext,
  `Lugar` longtext,
  `Año` date DEFAULT NULL,
  `ApoyoEconomico` double(12,2) DEFAULT '0.00',
  `InstituciónDeApoyo` longtext,
  `Evidencias` longblob,
  `Programa_apoyo` longtext,
  PRIMARY KEY (`NO_Publicacion`),
  KEY `CODIGO_ES` (`CODIGO_ES`),
  KEY `publicacionesalumnos_ibfk_2` (`NombreCompleto`),
  CONSTRAINT `publicacionesalumnos_ibfk_1` FOREIGN KEY (`CODIGO_ES`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `publicacionesalumnos_ibfk_2` FOREIGN KEY (`NombreCompleto`) REFERENCES `estudiante` (`NombreCompleto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacionesalumnos`
--

LOCK TABLES `publicacionesalumnos` WRITE;
/*!40000 ALTER TABLE `publicacionesalumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicacionesalumnos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 11:57:51
