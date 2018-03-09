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
-- Table structure for table `agenda_examen_grado`
--

DROP TABLE IF EXISTS `agenda_examen_grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda_examen_grado` (
  `Codigo_es` char(9) NOT NULL,
  `fecha_examen` date DEFAULT NULL,
  `hora_examen` char(20) DEFAULT '',
  `salon_examen` char(3) DEFAULT '',
  `Edificio_Examen` char(1) DEFAULT '',
  `Director` int(10) unsigned NOT NULL,
  `Lector_1` int(10) unsigned NOT NULL,
  `Lector_2` int(10) unsigned NOT NULL,
  `No_Tesis` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`Codigo_es`),
  KEY `Director` (`Director`),
  KEY `agenda_examen_grado_ibfk_1` (`hora_examen`),
  KEY `agenda_examen_grado_ibfk_2` (`salon_examen`),
  KEY `agenda_examen_grado_ibfk_3` (`Edificio_Examen`),
  KEY `agenda_examen_grado_ibfk_7_idx` (`No_Tesis`,`Lector_2`,`Lector_1`),
  CONSTRAINT `agenda_examen_grado_ibfk_1` FOREIGN KEY (`hora_examen`) REFERENCES `horarios_glo` (`Hora`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_examen_grado_ibfk_2` FOREIGN KEY (`salon_examen`) REFERENCES `salones_glo` (`Salon`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_examen_grado_ibfk_3` FOREIGN KEY (`Edificio_Examen`) REFERENCES `salones_glo` (`Edificios`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_examen_grado_ibfk_4` FOREIGN KEY (`Director`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_examen_grado_ibfk_5` FOREIGN KEY (`No_Tesis`) REFERENCES `direcciondetesis` (`No_Tesis`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda_examen_grado`
--

LOCK TABLES `agenda_examen_grado` WRITE;
/*!40000 ALTER TABLE `agenda_examen_grado` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda_examen_grado` ENABLE KEYS */;
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
-- Dump completed on 2018-03-09 15:31:36
=======
-- Dump completed on 2018-03-08  9:05:22
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
