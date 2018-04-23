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
-- Table structure for table `plantaacademica`
--

DROP TABLE IF EXISTS `plantaacademica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantaacademica` (
  `No_profesor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CodigoEmp` char(9) DEFAULT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `PertenenciaSNI` longtext,
  `NivelSNI` longtext,
  `RegistroSNI` longtext,
  `Incorporación_Programa` date DEFAULT NULL,
  `Estatus` enum('Parcial','Tiempo completo') DEFAULT 'Tiempo completo',
  `Codigo` char(20) DEFAULT '',
  `Sexo` enum('M','F') DEFAULT 'M',
  `EstadoCivil` varchar(255) DEFAULT '',
  `CorreoElectrónico` varchar(255) DEFAULT NULL,
  `Grado` longtext,
  `Busqueda` longtext,
  `GradoAcadémico` char(9) DEFAULT '',
  `Egresado` varchar(255) DEFAULT '',
  `CargoAdministrativoInstitución` longtext,
  `Dependencia` char(5) DEFAULT '',
  `Domicilio` varchar(255) DEFAULT '',
  `Código_Postal` char(10) DEFAULT '',
  `Municipio` varchar(255) DEFAULT '',
  `Tel_Particular` char(8) DEFAULT '',
  `Tel_Oficina` char(8) DEFAULT '',
  `Tel_Móvil` char(10) DEFAULT '',
  `RFC` char(20) DEFAULT '',
  `CURP` char(20) DEFAULT '',
  `FechaNacimiento` date DEFAULT NULL,
  `LugarNacimiento` varchar(255) DEFAULT '',
  `EstanciasPosdoctorales` longtext,
  `Premios_Reconocimientos` longtext,
  `LGAC` char(6) DEFAULT NULL,
  `Orientación` longtext,
  `Departamento` char(9) DEFAULT '',
  `Participacion_programa` int(11) DEFAULT '0',
  PRIMARY KEY (`No_profesor`),
  KEY `Codigo` (`Codigo`),
  KEY `LGAC` (`LGAC`),
  KEY `CodigoEmp` (`CodigoEmp`),
  KEY `Departamento` (`Departamento`),
  KEY `plantaacademica_ibfk_1` (`NombreCompleto`),
  KEY `plantaacademica_ibfk_10` (`Tel_Móvil`),
  KEY `plantaacademica_ibfk_11` (`CURP`),
  KEY `plantaacademica_ibfk_13` (`Dependencia`),
  KEY `plantaacademica_ibfk_2` (`Sexo`),
  KEY `plantaacademica_ibfk_3` (`EstadoCivil`),
  KEY `plantaacademica_ibfk_4` (`Egresado`),
  KEY `plantaacademica_ibfk_5` (`Domicilio`),
  KEY `plantaacademica_ibfk_6` (`Código_Postal`),
  KEY `plantaacademica_ibfk_7` (`Municipio`),
  KEY `plantaacademica_ibfk_8` (`Tel_Particular`),
  KEY `plantaacademica_ibfk_9` (`Tel_Oficina`),
  CONSTRAINT `plantaacademica_ibfk_1` FOREIGN KEY (`NombreCompleto`) REFERENCES `empleados` (`NombreEmpleado`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_10` FOREIGN KEY (`Tel_Móvil`) REFERENCES `empleados` (`TelefonoCelularEmp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_11` FOREIGN KEY (`CURP`) REFERENCES `empleados` (`CURP_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_12` FOREIGN KEY (`LGAC`) REFERENCES `lgac` (`LGAC`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_13` FOREIGN KEY (`Dependencia`) REFERENCES `dependienteseconomicos` (`cod_Dep`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_14` FOREIGN KEY (`CodigoEmp`) REFERENCES `empleados` (`CodigoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_2` FOREIGN KEY (`Sexo`) REFERENCES `empleados` (`SexoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_3` FOREIGN KEY (`EstadoCivil`) REFERENCES `empleados` (`EstadoCivilEmp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_4` FOREIGN KEY (`Egresado`) REFERENCES `licenciaturaemp` (`Institucion`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_5` FOREIGN KEY (`Domicilio`) REFERENCES `empleados` (`DomicilioEMP`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_6` FOREIGN KEY (`Código_Postal`) REFERENCES `empleados` (`CP_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_7` FOREIGN KEY (`Municipio`) REFERENCES `empleados` (`MunicipioEmp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_8` FOREIGN KEY (`Tel_Particular`) REFERENCES `empleados` (`TelefonoParticular_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `plantaacademica_ibfk_9` FOREIGN KEY (`Tel_Oficina`) REFERENCES `empleados` (`Telefono_Oficina_Emp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantaacademica`
--

LOCK TABLES `plantaacademica` WRITE;
/*!40000 ALTER TABLE `plantaacademica` DISABLE KEYS */;
INSERT INTO `plantaacademica` VALUES (1,'prueba002','Ricardo Palacio Alvarez','Prueba','Prueba','Prueba','2017-10-10','Tiempo completo','212546785','M','prueba','Prueba','Prueba','Prueba','Prueba','prueva','Prueba','00001','prueba','prueba','prueba','prueba','prueba','prueba','Prueba','prueba','1992-04-04','Prueba','Preuba','Prueba','CYMLES','Prueba','Prueba',0);
/*!40000 ALTER TABLE `plantaacademica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-23 14:10:02
