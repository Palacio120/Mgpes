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
-- Table structure for table `externos`
--

DROP TABLE IF EXISTS `externos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `externos` (
  `No_Externo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NombreCompleto` varchar(255) DEFAULT '',
  `Registro_SNI` char(30) DEFAULT '',
  `CVU` longblob,
  `IncorporaciónPrograma` longblob,
  `Codigo` char(20) DEFAULT '',
  `Sexo` enum('M','F') DEFAULT 'M',
  `CorreoEmp` varchar(255) DEFAULT '',
  `Domicilio` varchar(255) DEFAULT '',
  `CodigoPostal` char(20) DEFAULT '',
  `Municipio` varchar(255) DEFAULT '',
  `Tel_Particular` char(8) DEFAULT '',
  `Tel_Movil` char(10) DEFAULT '',
  `FechaNacimiento` date DEFAULT NULL,
  `LugarNacimiento` varchar(255) DEFAULT '',
  `GradoAcademico` char(5) DEFAULT '',
  `Tel_Oficina` char(8) DEFAULT '',
  `LGAC` char(6) DEFAULT NULL,
  `Orientacion` varchar(100) DEFAULT '',
  `Estudiante` varchar(255) DEFAULT '',
  `CodigoEs` char(9) DEFAULT '',
  `Fecha_visita` date DEFAULT NULL,
  `Funcion` enum('co-director','lector,asesor') DEFAULT NULL,
  `Observacion` enum('coloquio','Asesoria','Examen De grado') DEFAULT NULL,
  `Institución` longtext,
  PRIMARY KEY (`No_Externo`),
  KEY `Codigo` (`Codigo`),
  KEY `LGAC` (`LGAC`),
  KEY `externos_ibfk_1` (`NombreCompleto`),
  KEY `externos_ibfk_10` (`LugarNacimiento`),
  KEY `externos_ibfk_11` (`GradoAcademico`),
  KEY `externos_ibfk_12` (`Tel_Oficina`),
  KEY `externos_ibfk_2` (`Sexo`),
  KEY `externos_ibfk_3` (`CorreoEmp`),
  KEY `externos_ibfk_4` (`Domicilio`),
  KEY `externos_ibfk_5` (`CodigoPostal`),
  KEY `externos_ibfk_6` (`Municipio`),
  KEY `externos_ibfk_7` (`Tel_Particular`),
  KEY `externos_ibfk_8` (`Tel_Movil`),
  KEY `externos_ibfk_9` (`FechaNacimiento`),
  KEY `externos_ibfk_14` (`Orientacion`),
  KEY `externos_ibfk_15` (`Estudiante`),
  KEY `externos_ibfk_16` (`CodigoEs`),
  CONSTRAINT `externos_ibfk_1` FOREIGN KEY (`NombreCompleto`) REFERENCES `empleados` (`NombreEmpleado`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_10` FOREIGN KEY (`LugarNacimiento`) REFERENCES `empleados` (`LugarNacimientoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_11` FOREIGN KEY (`GradoAcademico`) REFERENCES `empleados` (`GE_ID`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_12` FOREIGN KEY (`Tel_Oficina`) REFERENCES `empleados` (`Telefono_Oficina_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_13` FOREIGN KEY (`LGAC`) REFERENCES `lgac` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_14` FOREIGN KEY (`Orientacion`) REFERENCES `lgac` (`Orientacion`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_15` FOREIGN KEY (`Estudiante`) REFERENCES `estudiante` (`NombreCompleto`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_16` FOREIGN KEY (`CodigoEs`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_2` FOREIGN KEY (`Sexo`) REFERENCES `empleados` (`SexoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_3` FOREIGN KEY (`CorreoEmp`) REFERENCES `empleados` (`CorreoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_4` FOREIGN KEY (`Domicilio`) REFERENCES `empleados` (`DomicilioEMP`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_5` FOREIGN KEY (`CodigoPostal`) REFERENCES `empleados` (`CP_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_6` FOREIGN KEY (`Municipio`) REFERENCES `empleados` (`MunicipioEmp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_7` FOREIGN KEY (`Tel_Particular`) REFERENCES `empleados` (`TelefonoParticular_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_8` FOREIGN KEY (`Tel_Movil`) REFERENCES `empleados` (`TelefonoCelularEmp`) ON UPDATE CASCADE,
  CONSTRAINT `externos_ibfk_9` FOREIGN KEY (`FechaNacimiento`) REFERENCES `empleados` (`FechaNacimientoEmp`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `externos`
--

LOCK TABLES `externos` WRITE;
/*!40000 ALTER TABLE `externos` DISABLE KEYS */;
/*!40000 ALTER TABLE `externos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-05 15:05:35
