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
-- Table structure for table `direcciondetesis`
--

DROP TABLE IF EXISTS `direcciondetesis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciondetesis` (
  `No_Tesis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DirectorTesis` varchar(255) DEFAULT '',
  `CodigoEmp` char(9) DEFAULT NULL,
  `Co_Director` varchar(255) DEFAULT '',
  `CodigoEmp_Co` char(9) DEFAULT NULL,
  `NombreALUMNO` varchar(255) DEFAULT '',
  `CODIGO_ES` char(9) DEFAULT NULL,
  `GRADO` longtext,
  `TemaTesis` longtext,
  `Periodo` char(10) DEFAULT '',
  `Aprovacion_TR` enum('espera','SI') DEFAULT 'espera',
  `lector_1` int(10) unsigned DEFAULT NULL,
  `lector_2` int(10) unsigned DEFAULT NULL,
  `LGAC` char(6) DEFAULT NULL,
  `Semestre` enum('Primer Semestre','Segundo Semestre','Tercer Semestre','Cuarto Semestre') DEFAULT NULL,
  PRIMARY KEY (`No_Tesis`),
  KEY `lector_1` (`lector_1`),
  KEY `lector_2` (`lector_2`),
  KEY `LGAC` (`LGAC`),
  KEY `CodigoEmp_Co` (`CodigoEmp_Co`),
  KEY `NombreALUMNO` (`NombreALUMNO`),
  KEY `CODIGO_ES` (`CODIGO_ES`),
  KEY `CodigoEmp` (`CodigoEmp`),
  KEY `Director` (`DirectorTesis`),
  KEY `Co-director` (`Co_Director`),
  CONSTRAINT `direcciondetesis_ibfk_1` FOREIGN KEY (`lector_1`) REFERENCES `lectores` (`No_Lector`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_10` FOREIGN KEY (`LGAC`) REFERENCES `estudiante` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_2` FOREIGN KEY (`lector_2`) REFERENCES `lectores` (`No_Lector`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_3` FOREIGN KEY (`LGAC`) REFERENCES `lgac` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_5` FOREIGN KEY (`CodigoEmp_Co`) REFERENCES `empleados` (`CodigoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_7` FOREIGN KEY (`NombreALUMNO`) REFERENCES `estudiante` (`NombreCompleto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_8` FOREIGN KEY (`CODIGO_ES`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `direcciondetesis_ibfk_9` FOREIGN KEY (`CodigoEmp`) REFERENCES `empleados` (`CodigoEmp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciondetesis`
--

LOCK TABLES `direcciondetesis` WRITE;
/*!40000 ALTER TABLE `direcciondetesis` DISABLE KEYS */;
INSERT INTO `direcciondetesis` VALUES (2,'Ricardo Palacio Alvarez','prueba002',NULL,NULL,'Alejandro Palacio Alvarez','Prueba001','NULL','Prueba','2017B','espera',1,2,'CYMLES','Primer Semestre');
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`direcciondetesis_BEFORE_INSERT` BEFORE INSERT ON `direcciondetesis` FOR EACH ROW
BEGIN
	declare nombreDirector varchar(255);
    declare nombreCodirector varchar(255);
	
		select NombreEmpleado from empleados where codigoEmp=new.codigoEmp into nombreDirector;
        select NombreEmpleado from empleados where codigoEmp=new.CodigoEmp_Co into nombreCodirector;
        
        set new.DirectorTesis =nombreDirector;
        set new.Co_Director=nombreCodirector;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`direcciondetesis_BEFORE_UPDATE` BEFORE UPDATE ON `direcciondetesis` FOR EACH ROW
BEGIN
	declare nombreDirector varchar(255);
    declare nombreCodirector varchar(255);
	
		select NombreEmpleado from empleados where codigoEmp=new.codigoEmp into nombreDirector;
        select NombreEmpleado from empleados where codigoEmp=new.CodigoEmp_Co into nombreCodirector;
        
        set new.DirectorTesis =nombreDirector;
        set new.Co_Director=nombreCodirector;
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

-- Dump completed on 2018-01-23 17:17:58
