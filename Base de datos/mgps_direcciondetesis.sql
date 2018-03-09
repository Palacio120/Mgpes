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
-- Table structure for table `direcciondetesis`
--

DROP TABLE IF EXISTS `direcciondetesis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciondetesis` (
  `No_Tesis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DirectorTesis` varchar(255) DEFAULT '',
  `Co_Director` varchar(255) DEFAULT '',
  `NombreALUMNO` varchar(255) DEFAULT '',
  `CODIGO_ES` char(9) DEFAULT NULL,
  `GRADO` longtext,
  `TemaTesis` varchar(255) DEFAULT NULL,
  `Periodo` char(20) DEFAULT '',
  `Aprovacion_TR` enum('espera','SI') DEFAULT 'espera',
  `lector_1` varchar(255) DEFAULT NULL,
  `lector_2` varchar(255) DEFAULT NULL,
  `LGAC` char(6) DEFAULT NULL,
  `Semestre` enum('Primer Semestre','Segundo Semestre','Tercer Semestre','Cuarto Semestre') DEFAULT NULL,
  PRIMARY KEY (`No_Tesis`),
  KEY `lector_1` (`lector_1`),
  KEY `lector_2` (`lector_2`),
  KEY `LGAC` (`LGAC`),
  KEY `CODIGO_ES` (`CODIGO_ES`),
  KEY `Director` (`DirectorTesis`),
  KEY `Co-director` (`Co_Director`),
  CONSTRAINT `direcciondetesis_ibfk_3` FOREIGN KEY (`LGAC`) REFERENCES `lgac` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_8` FOREIGN KEY (`CODIGO_ES`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciondetesis`
--

LOCK TABLES `direcciondetesis` WRITE;
/*!40000 ALTER TABLE `direcciondetesis` DISABLE KEYS */;
INSERT INTO `direcciondetesis` VALUES (2,'Dra. Sonia Reynaga Obregón','','Alejandro Palacio Alvarez','Prueba001','NULL','La internacionalización de programas de posgrado. El caso del Consejo Mexicano se Estudios de Posgrado','2017B','espera','','','CYMLES','Segundo Semestre'),(3,'Alejandro Palacio Alvarez','','Alejandro Palacio Alvarez','MG3_APA18','','Prueba de edición','2017A','espera','P','A','NPDES','Segundo Semestre');
/*!40000 ALTER TABLE `direcciondetesis` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`direcciondetesis_AFTER_INSERT` AFTER INSERT ON `direcciondetesis` FOR EACH ROW
BEGIN
	UPDATE `mgps`.`estudiante`SET `DireccionTesis` = new.No_Tesis WHERE `CODIGO_ES` = new.CODIGO_ES;


    
END */;;
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

-- Dump completed on 2018-03-09 15:31:31
