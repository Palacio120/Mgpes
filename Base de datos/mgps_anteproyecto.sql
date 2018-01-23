CREATE DATABASE  IF NOT EXISTS `mgps` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgps`;
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
-- Table structure for table `anteproyecto`
--

DROP TABLE IF EXISTS `anteproyecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anteproyecto` (
  `No_AnteProyecto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreAnteproyecto` varchar(255) DEFAULT '',
  `LineaInvestigacion` char(6) DEFAULT NULL,
  `Justificacion` longtext,
  `Antecedentes` longtext,
  `PlanteamientoDelProblema` longtext,
  `Objetivos` longtext,
  `PreguntasInvestigacion` longtext,
  `PosiblesRespuestas` longtext,
  `calificacionAnteproyecto` double(5,2) DEFAULT '0.00',
  `codigo_asp` int(10) unsigned NOT NULL,
  `Equivalencia25` double(4,2) DEFAULT '0.00',
  PRIMARY KEY (`No_AnteProyecto`),
  KEY `CalificacionAnteproyecto` (`calificacionAnteproyecto`),
  KEY `codigo_asp` (`codigo_asp`),
  KEY `nombreAnteproyecto` (`nombreAnteproyecto`),
  KEY `Equivalencia25` (`Equivalencia25`),
  KEY `anteproyecto_ibfk_1` (`LineaInvestigacion`),
  CONSTRAINT `anteproyecto_ibfk_1` FOREIGN KEY (`LineaInvestigacion`) REFERENCES `lgac` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `anteproyecto_ibfk_2` FOREIGN KEY (`codigo_asp`) REFERENCES `aspirante` (`codigo_Aspirante`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anteproyecto`
--

LOCK TABLES `anteproyecto` WRITE;
/*!40000 ALTER TABLE `anteproyecto` DISABLE KEYS */;
INSERT INTO `anteproyecto` VALUES (1,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,1,0.00),(2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,2,0.00);
/*!40000 ALTER TABLE `anteproyecto` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger DefaultAnteproyecto
before insert on Anteproyecto
for each row
begin

	set new.calificacionAnteproyecto=0;

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger EquivalenciaProy
before update on anteproyecto
for each row
begin
	set new.equivalencia25=(new.CalificacionAnteproyecto*.25);
	update evaluacion set calificacionDelAspirante=0;

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 17:17:54
