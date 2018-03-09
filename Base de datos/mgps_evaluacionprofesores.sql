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
-- Table structure for table `evaluacionprofesores`
--

DROP TABLE IF EXISTS `evaluacionprofesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluacionprofesores` (
  `registro` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `No_PROFESOR` int(10) unsigned NOT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `Calificaciones` double(4,2) DEFAULT '0.00',
  `Periodo` char(10) DEFAULT NULL,
  PRIMARY KEY (`registro`),
  KEY `No_PROFESOR` (`No_PROFESOR`),
  KEY `evaluacionprofesores_ibfk_2_idx` (`NombreCompleto`),
  CONSTRAINT `evaluacionprofesores_ibfk_1` FOREIGN KEY (`No_PROFESOR`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacionprofesores_ibfk_2` FOREIGN KEY (`NombreCompleto`) REFERENCES `plantaacademica` (`NombreCompleto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluacionprofesores`
--

LOCK TABLES `evaluacionprofesores` WRITE;
/*!40000 ALTER TABLE `evaluacionprofesores` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluacionprofesores` ENABLE KEYS */;
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
-- Dump completed on 2018-03-09 15:31:43
=======
-- Dump completed on 2018-03-08  9:05:52
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
