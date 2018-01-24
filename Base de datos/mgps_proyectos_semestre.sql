-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mgps
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `proyectos_semestre`
--

DROP TABLE IF EXISTS `proyectos_semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos_semestre` (
  `Id_tesis` int(10) unsigned NOT NULL,
  `DirectorTesis` varchar(255) DEFAULT NULL,
  `Co_director` varchar(255) DEFAULT NULL,
  `Lector_1` varchar(255) DEFAULT NULL,
  `Lector_2` varchar(255) DEFAULT NULL,
  `Avance` int(11) DEFAULT NULL,
  `Proyecto` longblob,
  `Codigo_es` char(9) DEFAULT NULL,
  `Semestre` enum('Primer Semestre','Segundo Semestre','Tercer Semestre','Cuarto Semestre') DEFAULT NULL,
  `idActividades` int(10) unsigned NOT NULL,
  `Direccion_de_tesis` int(10) unsigned NOT NULL,
  `TemaTesis` longtext,
  PRIMARY KEY (`Id_tesis`),
  KEY `Informe_de_actividades_idx` (`idActividades`),
  KEY `Direccion_de_tesis_idx` (`Direccion_de_tesis`),
  KEY `codigo_idx` (`Codigo_es`),
  CONSTRAINT `Direccion_de_tesis` FOREIGN KEY (`Direccion_de_tesis`) REFERENCES `direcciondetesis` (`No_Tesis`) ON UPDATE CASCADE,
  CONSTRAINT `Informe_de_actividades` FOREIGN KEY (`idActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE,
  CONSTRAINT `codigo` FOREIGN KEY (`Codigo_es`) REFERENCES `estudiante` (`CODIGO_ES`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos_semestre`
--

LOCK TABLES `proyectos_semestre` WRITE;
/*!40000 ALTER TABLE `proyectos_semestre` DISABLE KEYS */;
INSERT INTO `proyectos_semestre` VALUES (0,'Ricardo Palacio Alvarez','','Prueba Prueba Prueba','Ricardo Palacio Alvarez',0,NULL,'Prueba001','Primer Semestre',21,2,'Prueba');
/*!40000 ALTER TABLE `proyectos_semestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-24  0:01:09
