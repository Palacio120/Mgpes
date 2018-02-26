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
-- Table structure for table `intercambioestudiantes`
--

DROP TABLE IF EXISTS `intercambioestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intercambioestudiantes` (
  `Intercambios` char(9) NOT NULL,
  `Nombre` varchar(255) DEFAULT '',
  `Apellidos` varchar(255) DEFAULT '',
  `Sexo` enum('M','F') DEFAULT 'M',
  `Nacionalidad` varchar(255) DEFAULT '',
  `Correo` longtext,
  `Domicilio` varchar(255) DEFAULT '',
  `Tel_Particular` char(8) DEFAULT '',
  `FechaNacimiento` date DEFAULT NULL,
  `LugarNacimiento` varchar(255) DEFAULT '',
  `No_Pasaporte` char(20) DEFAULT '',
  `Licenciatura` varchar(255) DEFAULT '',
  `instituciónOrigen` varchar(255) DEFAULT '',
  `Periodo` char(10) DEFAULT '',
  `movilidad` varchar(255) DEFAULT '',
  `Materia_Cursada` varchar(255) DEFAULT '',
  `Tutor_Externo` varchar(255) DEFAULT '',
  `Tutor_UDG` char(9) DEFAULT NULL,
  PRIMARY KEY (`Intercambios`),
  KEY `Tutor_UDG` (`Tutor_UDG`),
  CONSTRAINT `intercambioestudiantes_ibfk_1` FOREIGN KEY (`Tutor_UDG`) REFERENCES `empleados` (`CodigoEmp`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intercambioestudiantes`
--

LOCK TABLES `intercambioestudiantes` WRITE;
/*!40000 ALTER TABLE `intercambioestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `intercambioestudiantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-26  0:30:54
