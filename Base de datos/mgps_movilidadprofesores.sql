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
-- Table structure for table `movilidadprofesores`
--

DROP TABLE IF EXISTS `movilidadprofesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movilidadprofesores` (
  `RegistroMovilidad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `No_PROFESOR` int(10) unsigned NOT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `Facultad_Departamento` varchar(255) DEFAULT '',
  `País_Estado` varchar(255) DEFAULT '',
  `TipoMovilidad` char(10) DEFAULT '',
  `ActividadDesarrollada` longtext,
  `DatosMovilidad` longtext,
  `FechaInicio` date DEFAULT NULL,
  `FechaTérmino` date DEFAULT NULL,
  `ApoyoEconomico` double(12,2) DEFAULT '0.00',
  `Institución` longtext,
  `Evidencias` longblob,
  `ProgramaApoyo` longtext,
  PRIMARY KEY (`RegistroMovilidad`),
  KEY `No_PROFESOR` (`No_PROFESOR`),
  KEY `movilidadprofesores_ibfk_1` (`TipoMovilidad`),
  KEY `movilidadprofesores_ibfk_3_idx` (`NombreCompleto`),
  CONSTRAINT `movilidadprofesores_ibfk_1` FOREIGN KEY (`TipoMovilidad`) REFERENCES `tipo_de_movilidad` (`Tipo`) ON UPDATE CASCADE,
  CONSTRAINT `movilidadprofesores_ibfk_2` FOREIGN KEY (`No_PROFESOR`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `movilidadprofesores_ibfk_3` FOREIGN KEY (`NombreCompleto`) REFERENCES `plantaacademica` (`NombreCompleto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movilidadprofesores`
--

LOCK TABLES `movilidadprofesores` WRITE;
/*!40000 ALTER TABLE `movilidadprofesores` DISABLE KEYS */;
/*!40000 ALTER TABLE `movilidadprofesores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-09 15:41:31
