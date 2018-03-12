CREATE DATABASE  IF NOT EXISTS `mgps` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgps`;
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
-- Table structure for table `eventosprofesores`
--

DROP TABLE IF EXISTS `eventosprofesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventosprofesores` (
  `No_EventoRealizado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `No_PROFESOR` int(10) unsigned NOT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `NombreEvento` longtext,
  `Facultad_Departamento` longtext,
  `Estado_localidad` longtext,
  `País` longtext,
  `ActividadDesarrollada` longtext,
  `DatosActividad` longtext,
  `DimensiónEvento` longtext,
  `FechaInicio` date DEFAULT NULL,
  `FechaTérmino` date DEFAULT NULL,
  `ApoyoEconómico` double(12,2) DEFAULT NULL,
  `InstituciónApoyo` longtext,
  `Evidencias` longblob,
  `ProgramaApoyo` longtext,
  PRIMARY KEY (`No_EventoRealizado`),
  KEY `No_PROFESOR` (`No_PROFESOR`),
  KEY `eventosprofesores_ibfk_2_idx` (`NombreCompleto`),
  CONSTRAINT `eventosprofesores_ibfk_1` FOREIGN KEY (`No_PROFESOR`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `eventosprofesores_ibfk_2` FOREIGN KEY (`NombreCompleto`) REFERENCES `plantaacademica` (`NombreCompleto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventosprofesores`
--

LOCK TABLES `eventosprofesores` WRITE;
/*!40000 ALTER TABLE `eventosprofesores` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventosprofesores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-12 12:34:09
