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
-- Table structure for table `aspirante`
--

DROP TABLE IF EXISTS `aspirante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspirante` (
  `codigo_Aspirante` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Fotografia` longblob,
  `modalidad` varchar(255) DEFAULT '',
  `Orientacion` varchar(100) DEFAULT '',
  `NombrePrograma` varchar(255) DEFAULT '',
  `Fecha_SecionInformativa` date DEFAULT NULL,
  `calendario_Escolar` char(20) DEFAULT '',
  `NombreCompleto` varchar(255) DEFAULT '',
  `Edad` int(11) DEFAULT '0',
  `Genero` enum('M','F') DEFAULT 'M',
  `CURP` char(20) DEFAULT '',
  `RFC` char(20) DEFAULT '',
  `Calle_asp` varchar(255) DEFAULT '',
  `Numero_Calle` varchar(30) DEFAULT '',
  `numero_interior` varchar(10) DEFAULT '',
  `colonia_Asp` varchar(255) DEFAULT '',
  `cp_Asp` char(6) DEFAULT '',
  `Municipio_asp` varchar(255) DEFAULT '',
  `Estado_Asp` varchar(255) DEFAULT '',
  `Telefono_casa_asp` char(8) DEFAULT '',
  `Telefono_personal` char(10) DEFAULT '',
  `Correo_Personal` varchar(255) DEFAULT '',
  `Lugar_nacimiento` varchar(255) DEFAULT '',
  `ViveCon` varchar(255) DEFAULT '',
  `Dependientes` varchar(255) DEFAULT '',
  `EstadoCivil` varchar(255) DEFAULT '',
  `Licenciatura` varchar(255) DEFAULT '',
  `Universidad` varchar(255) DEFAULT '',
  `Promedio` double(4,2) DEFAULT '0.00',
  `Generacion` char(20) DEFAULT '',
  `Estudios_act_term` enum('Activos','Terminados') DEFAULT NULL,
  `Idiomas` varchar(255) DEFAULT '',
  `Ocupacion` longtext,
  `Nombre_Empresa` varchar(255) DEFAULT '',
  `Puesto_desempeñado` varchar(255) DEFAULT '',
  `IngresoMensual` double(12,2) DEFAULT '0.00',
  `Domicilio_Trabajo` longtext,
  `MunicipioTrabajo` longtext,
  `EstadoTrabajo` longtext,
  `Telefono_trabajo` char(8) DEFAULT '',
  `Extencion_trabajo` char(5) DEFAULT '',
  `CorreoTrabajo` longtext,
  `AntiguedadPuesto` int(11) DEFAULT '0',
  `AntiguedadEmpresa` int(11) DEFAULT '0',
  `Firma` longblob,
  `CedulaRecepccion` longblob,
  PRIMARY KEY (`codigo_Aspirante`),
  KEY `modalidad` (`modalidad`),
  KEY `NombrePrograma` (`NombrePrograma`),
  KEY `Fecha_SecionInformativa` (`Fecha_SecionInformativa`),
  KEY `calendario_Escolar` (`calendario_Escolar`),
  KEY `NombreCompleto` (`NombreCompleto`),
  KEY `Edad` (`Edad`),
  KEY `Genero` (`Genero`),
  KEY `CURP` (`CURP`),
  KEY `RFC` (`RFC`),
  KEY `Calle_asp` (`Calle_asp`),
  KEY `Numero_Calle` (`Numero_Calle`),
  KEY `numero_interior` (`numero_interior`),
  KEY `colonia_Asp` (`colonia_Asp`),
  KEY `cp_Asp` (`cp_Asp`),
  KEY `Municipio_asp` (`Municipio_asp`),
  KEY `Esatado_Asp` (`Estado_Asp`),
  KEY `Telefono_casa_asp` (`Telefono_casa_asp`),
  KEY `Telefono_personal` (`Telefono_personal`),
  KEY `Correo_Personal` (`Correo_Personal`),
  KEY `Lugar_nacimiento` (`Lugar_nacimiento`),
  KEY `ViveCon` (`ViveCon`),
  KEY `Dependientes` (`Dependientes`),
  KEY `EstadoCivil` (`EstadoCivil`),
  KEY `Licenciatura` (`Licenciatura`),
  KEY `Universidad` (`Universidad`),
  KEY `Promedio` (`Promedio`),
  KEY `Generacion` (`Generacion`),
  KEY `Idiomas` (`Idiomas`),
  KEY `Puesto_desempeñado` (`Puesto_desempeñado`),
  KEY `IngresoMensual` (`IngresoMensual`),
  KEY `Telefono_trabajo` (`Telefono_trabajo`),
  KEY `AntiguedadPuesto` (`AntiguedadPuesto`),
  KEY `AntiguedadEmpresa` (`AntiguedadEmpresa`),
  KEY `Nombre_Empresa` (`Nombre_Empresa`),
  KEY `aspirante_ibfk_1` (`Orientacion`),
  CONSTRAINT `aspirante_ibfk_1` FOREIGN KEY (`Orientacion`) REFERENCES `lgac` (`Orientacion`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirante`
--

LOCK TABLES `aspirante` WRITE;
/*!40000 ALTER TABLE `aspirante` DISABLE KEYS */;
INSERT INTO `aspirante` VALUES (1,NULL,'tiempo completo','Nuevos paradigmas','','2017-08-23','2017A','Alejandro Palacio Alvarez',20,'M','','','','','','','','','','','','','','','','','','',90.00,'','Activos','',NULL,'','',1000.00,NULL,NULL,NULL,'','',NULL,0,0,NULL,NULL),(2,NULL,'tiempo completo','Nuevos paradigmas','','2017-08-23','2017A','Alejandro Palacio Alvarez',20,'M','','','','','','','','','','','','','','','','','','',90.00,'','Activos','',NULL,'','',1000.00,NULL,NULL,NULL,'','',NULL,0,0,NULL,NULL);
/*!40000 ALTER TABLE `aspirante` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER NUEVOASP 
AFTER INSERT ON ASPIRANTE
FOR EACH ROW
BEGIN
	insert into exani(codigo_asp) values (new.codigo_Aspirante);
	insert into orden_de_pago(codigo_asp) values(new.codigo_Aspirante);
	insert into anteproyecto(codigo_asp) values(new.codigo_Aspirante);
	insert into documentosASP(codigo_asp) values(new.codigo_Aspirante);
	insert into ResultadoEntrevistas(codigo_asp) values( new.codigo_Aspirante);
	Insert into CursoPropedeutico(codigo_asp) values (new.codigo_Aspirante);
	insert into evaluacion(codigo_asp) values (new.codigo_Aspirante);
	
	
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

-- Dump completed on 2018-01-24  0:01:08
