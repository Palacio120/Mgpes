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
-- Table structure for table `evaluacion`
--

DROP TABLE IF EXISTS `evaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluacion` (
  `Codigo_Asp` int(10) unsigned NOT NULL,
  `CalificacionEntrevistas` double(4,2) DEFAULT '0.00',
  `CalificacionCursoPropedeutico` double(4,2) DEFAULT '0.00',
  `CalificacionAnteproyecto` double(4,2) DEFAULT '0.00',
  `Estado_Orden` enum('Pagado','Espera','NOPagado') DEFAULT 'Espera',
  `CalificacionExamenExani` double(4,2) DEFAULT '0.00',
  `CalificacionDelAspirante` double(5,2) DEFAULT '0.00',
  PRIMARY KEY (`Codigo_Asp`),
  KEY `CalificacionExamenExani` (`CalificacionExamenExani`),
  KEY `Estado_Orden` (`Estado_Orden`),
  KEY `CalificacionEntrevistas` (`CalificacionEntrevistas`),
  KEY `CalificacionCursoPropedeutico` (`CalificacionCursoPropedeutico`),
  KEY `CalificacionAnteproyecto` (`CalificacionAnteproyecto`),
  CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`CalificacionExamenExani`) REFERENCES `exani` (`Equivalencia25`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`Estado_Orden`) REFERENCES `orden_de_pago` (`Estado_orden`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacion_ibfk_5` FOREIGN KEY (`CalificacionEntrevistas`) REFERENCES `resultadoentrevistas` (`CalificacionEntrvistas`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacion_ibfk_6` FOREIGN KEY (`Codigo_Asp`) REFERENCES `aspirante` (`codigo_Aspirante`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacion_ibfk_7` FOREIGN KEY (`CalificacionCursoPropedeutico`) REFERENCES `cursopropedeutico` (`Equivalencia25`) ON UPDATE CASCADE,
  CONSTRAINT `evaluacion_ibfk_8` FOREIGN KEY (`CalificacionAnteproyecto`) REFERENCES `anteproyecto` (`Equivalencia25`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluacion`
--

LOCK TABLES `evaluacion` WRITE;
/*!40000 ALTER TABLE `evaluacion` DISABLE KEYS */;
INSERT INTO `evaluacion` VALUES (1,0.00,0.00,0.00,'Espera',12.50,25.00),(2,0.00,0.00,0.00,'Espera',12.50,25.00),(4,0.00,0.00,0.00,'Espera',0.00,0.00);
/*!40000 ALTER TABLE `evaluacion` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger calificacionAsp
before update on evaluacion
for each row
begin
	 set new.calificacionDelAspirante=(new.CalificacionEntrevistas + New.CalificacionCursoPropedeutico + new.CalificacionAnteproyecto +new.CalificacionExamenExani);
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

-- Dump completed on 2018-03-08  9:05:35
