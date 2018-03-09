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
-- Table structure for table `materias_cursadas`
--

DROP TABLE IF EXISTS `materias_cursadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias_cursadas` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre_Curso` longtext,
  `Calendario` date DEFAULT NULL,
  `Id_Materias` int(10) unsigned NOT NULL,
  `Calificacion` double unsigned DEFAULT NULL,
  `NombreProfesor` longtext,
  PRIMARY KEY (`Id`),
  KEY `materias_cursadas_ibfk_2_idx` (`Id_Materias`),
  CONSTRAINT `materias_cursadas_ibfk_2` FOREIGN KEY (`Id_Materias`) REFERENCES `materias_semestres` (`Id_Materias`) ON UPDATE CASCADE
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias_cursadas`
--

LOCK TABLES `materias_cursadas` WRITE;
/*!40000 ALTER TABLE `materias_cursadas` DISABLE KEYS */;
INSERT INTO `materias_cursadas` VALUES (12,'Nombre del curso 2','2018-02-13',4,1,'Nombre del profesor'),(13,'Nombre del curso','2018-02-16',9,100,'Nombre del profesor'),(14,'Nombre del curso','2018-02-16',5,100,'Nombre del profesor'),(15,'Nombre del curso','2018-02-16',4,100,'Nombre del profesor'),(16,'Estadistica','2017-12-12',3,97,'Profesor'),(17,'Gobierno y gestion de la educacion superior','2017-12-12',3,82,'Profesor'),(18,'Institución y sistemas de educación superior','2017-12-12',3,90,'Profesor'),(19,'Marco Normativo de la educación','2017-12-12',3,95,'Profesor'),(20,'Metodología de la investigación (N)','2017-12-12',3,93,'Profesor'),(21,'Nombre del curso','2018-03-09',10,100,'Nombre del profesor');
/*!40000 ALTER TABLE `materias_cursadas` ENABLE KEYS */;
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
-- Dump completed on 2018-03-09 15:31:27
=======
-- Dump completed on 2018-03-08  9:04:58
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
