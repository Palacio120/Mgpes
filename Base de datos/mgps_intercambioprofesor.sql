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
-- Table structure for table `intercambioprofesor`
--

DROP TABLE IF EXISTS `intercambioprofesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intercambioprofesor` (
  `No_profesorInter` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `No_PROFESOR` int(10) unsigned NOT NULL,
  `codigoEmp` char(9) DEFAULT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `Sexo` enum('M','F') DEFAULT 'M',
  `Nacionalidad` varchar(255) DEFAULT '',
  `Correo` longtext,
  `Domicilio` longtext,
  `Tel_Particular` char(8) DEFAULT '',
  `Tel_Movil` char(10) DEFAULT '',
  `FechaNacimiento` date DEFAULT NULL,
  `LugarNacimiento` varchar(255) DEFAULT '',
  `No_Pasaporte` char(20) DEFAULT '',
  `PeriodoMovilidad` char(20) DEFAULT '',
  `MateriaImpartida` longtext,
  `LicenciaturaCursada` longtext,
  `InstituciónOrigen` longtext,
  PRIMARY KEY (`No_profesorInter`),
  KEY `No_PROFESOR` (`No_PROFESOR`),
  KEY `codigoEmp` (`codigoEmp`),
  KEY `FechaNacimiento` (`FechaNacimiento`),
  KEY `intercambioprofesor_ibfk_3` (`NombreCompleto`),
  KEY `intercambioprofesor_ibfk_4` (`Nacionalidad`),
  KEY `intercambioprofesor_ibfk_5` (`Tel_Particular`),
  KEY `intercambioprofesor_ibfk_6` (`Tel_Movil`),
  KEY `intercambioprofesor_ibfk_8` (`LugarNacimiento`),
  CONSTRAINT `intercambioprofesor_ibfk_1` FOREIGN KEY (`No_PROFESOR`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_2` FOREIGN KEY (`codigoEmp`) REFERENCES `plantaacademica` (`CodigoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_3` FOREIGN KEY (`NombreCompleto`) REFERENCES `plantaacademica` (`NombreCompleto`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_4` FOREIGN KEY (`Nacionalidad`) REFERENCES `empleados` (`NacionalidadEmp`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_5` FOREIGN KEY (`Tel_Particular`) REFERENCES `empleados` (`TelefonoParticular_Emp`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_6` FOREIGN KEY (`Tel_Movil`) REFERENCES `empleados` (`TelefonoCelularEmp`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_7` FOREIGN KEY (`FechaNacimiento`) REFERENCES `empleados` (`FechaNacimientoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `intercambioprofesor_ibfk_8` FOREIGN KEY (`LugarNacimiento`) REFERENCES `empleados` (`LugarNacimientoEmp`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intercambioprofesor`
--

LOCK TABLES `intercambioprofesor` WRITE;
/*!40000 ALTER TABLE `intercambioprofesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `intercambioprofesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-02 18:14:51
