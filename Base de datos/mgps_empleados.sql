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
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `CodigoEmp` char(9) NOT NULL,
  `Fotografia` longblob,
  `NombreEmpleado` varchar(255) DEFAULT '',
  `FechaNacimientoEmp` date DEFAULT NULL,
  `LugarNacimientoEmp` varchar(255) DEFAULT '',
  `NacionalidadEmp` varchar(255) DEFAULT '',
  `SexoEmp` enum('M','F') DEFAULT 'M',
  `FormaMigratoriaEmp` longblob,
  `EstadoCivilEmp` varchar(255) DEFAULT '',
  `TipoSangreEmp` char(10) DEFAULT '',
  `DomicilioEMP` varchar(255) DEFAULT '',
  `CP_Emp` char(20) DEFAULT '',
  `Temp_Def` enum('Temporal','Definitivo') DEFAULT 'Definitivo',
  `GE_ID` char(9) DEFAULT '',
  `MunicipioEmp` varchar(255) DEFAULT '',
  `EstadoEmp` varchar(255) DEFAULT '',
  `TelefonoCelularEmp` char(10) DEFAULT '',
  `NSS_Emp` char(20) DEFAULT '',
  `SegundoIngreso` enum('SI','No') DEFAULT 'No',
  `CURP_Emp` char(20) DEFAULT '',
  `CorreoEmp` varchar(255) DEFAULT '',
  `Telefono_Oficina_Emp` char(10) DEFAULT '',
  `CreditoINFONAVIT` enum('SI','No') DEFAULT 'No',
  `TelefonoParticular_Emp` char(10) DEFAULT '',
  `IDLabor` char(5) DEFAULT NULL,
  `IDHorarioPersonal` int(10) unsigned NOT NULL,
  PRIMARY KEY (`CodigoEmp`),
  KEY `NombreEmpleado` (`NombreEmpleado`),
  KEY `FechaNacimientoEmp` (`FechaNacimientoEmp`),
  KEY `LugarNacimientoEmp` (`LugarNacimientoEmp`),
  KEY `SexoEmp` (`SexoEmp`),
  KEY `EstadoCivilEmp` (`EstadoCivilEmp`),
  KEY `CalleEmp` (`DomicilioEMP`),
  KEY `CP_Emp` (`CP_Emp`),
  KEY `MunicipioEmp` (`MunicipioEmp`),
  KEY `EstadoEmp` (`EstadoEmp`),
  KEY `TelefonoCelularEmp` (`TelefonoCelularEmp`),
  KEY `CURP_Emp` (`CURP_Emp`),
  KEY `CorreoEmp` (`CorreoEmp`),
  KEY `Telefono_Oficina_Emp` (`Telefono_Oficina_Emp`),
  KEY `TelefonoParticular_Emp` (`TelefonoParticular_Emp`),
  KEY `IDLabor` (`IDLabor`),
  KEY `IDHorarioPersonal` (`IDHorarioPersonal`),
  KEY `NacionalidadEmp` (`NacionalidadEmp`),
  KEY `GE_ID` (`GE_ID`),
  CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`GE_ID`) REFERENCES `datosacademicos` (`GE_ID`) ON UPDATE CASCADE,
  CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`IDLabor`) REFERENCES `labor` (`IDLabor`) ON UPDATE CASCADE,
  CONSTRAINT `empleados_ibfk_3` FOREIGN KEY (`IDHorarioPersonal`) REFERENCES `horariopersonal` (`Registro`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES ('prueba002',NULL,'Ricardo Palacio Alvarez','2017-09-20','prueba','prueba','M',NULL,'prueba','prueba','prueba','prueba','Temporal','SE','prueba','prueba','prueba','prueba','No','prueba','prueba','prueba','SI','prueba','Ejemp',1),('Pureba001',NULL,'Alejandro Palacio Alvarez',NULL,'','','M',NULL,'','','','','Definitivo','SE','','','','','No','','','','No','','Ejem',1);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`empleados_AFTER_INSERT` AFTER INSERT ON `empleados` FOR EACH ROW
BEGIN
	insert into Usuariosemp(Usuario, Nombre) values (new.codigoEmp, new.NombreEmpleado);
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

-- Dump completed on 2018-04-16 13:54:16
