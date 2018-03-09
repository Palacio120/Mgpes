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
-- Table structure for table `boletas`
--

DROP TABLE IF EXISTS `boletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boletas` (
  `RegistroAsignaturas` int(10) unsigned NOT NULL,
  `NRC` int(10) unsigned NOT NULL,
  `Codigo_es` char(9) DEFAULT NULL,
  `Codigo_Asignatura` char(9) DEFAULT NULL,
  `Asignatura` varchar(255) DEFAULT '',
  `Hora` char(20) DEFAULT '',
  `Dia` enum('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado') DEFAULT 'Lunes',
  `Salon` char(3) DEFAULT '',
  `Edificio` char(1) DEFAULT '',
  `No_Profesor` int(10) unsigned NOT NULL,
  `NombreProfesor` varchar(255) DEFAULT '',
  `Periodo` char(10) DEFAULT '',
  `Calificacion` double(4,2) DEFAULT '0.00',
  PRIMARY KEY (`RegistroAsignaturas`),
  KEY `NRC` (`NRC`),
  KEY `Codigo_es` (`Codigo_es`),
  KEY `Codigo_Asignatura` (`Codigo_Asignatura`),
  KEY `No_Profesor` (`No_Profesor`),
  KEY `boletas_ibfk_10` (`NombreProfesor`),
  KEY `boletas_ibfk_2` (`Asignatura`),
  KEY `boletas_ibfk_6` (`Hora`),
  KEY `boletas_ibfk_7` (`Dia`),
  KEY `boletas_ibfk_8` (`Salon`),
  KEY `boletas_ibfk_9` (`Edificio`),
  CONSTRAINT `boletas_ibfk_1` FOREIGN KEY (`RegistroAsignaturas`) REFERENCES `asignaturasest` (`RegistroAsignaturas`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_10` FOREIGN KEY (`NombreProfesor`) REFERENCES `plantaacademica` (`NombreCompleto`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_11` FOREIGN KEY (`No_Profesor`) REFERENCES `ofertaacademica` (`No_Profesor`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_2` FOREIGN KEY (`Asignatura`) REFERENCES `plan_de_estudios` (`Asignatura`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_3` FOREIGN KEY (`NRC`) REFERENCES `asignaturasest` (`NRC`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_4` FOREIGN KEY (`Codigo_es`) REFERENCES `asignaturasest` (`CodigoEs`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_5` FOREIGN KEY (`Codigo_Asignatura`) REFERENCES `asignaturasest` (`Codigo_Asignatura`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_6` FOREIGN KEY (`Hora`) REFERENCES `ofertaacademica` (`Hora`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_7` FOREIGN KEY (`Dia`) REFERENCES `ofertaacademica` (`Dia`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_8` FOREIGN KEY (`Salon`) REFERENCES `ofertaacademica` (`Salon`) ON UPDATE CASCADE,
  CONSTRAINT `boletas_ibfk_9` FOREIGN KEY (`Edificio`) REFERENCES `ofertaacademica` (`Edificio`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletas`
--

LOCK TABLES `boletas` WRITE;
/*!40000 ALTER TABLE `boletas` DISABLE KEYS */;
/*!40000 ALTER TABLE `boletas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-09 15:41:37
