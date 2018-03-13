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
  `calendario_Escolar` char(20) DEFAULT '',
  `NombreCompleto` varchar(255) DEFAULT '',
  `Edad` int(11) DEFAULT '0',
  `Genero` enum('M','F') DEFAULT 'M',
  `CURP` char(20) DEFAULT '',
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
  `EstadoCivil` varchar(255) DEFAULT '',
  `Licenciatura` varchar(255) DEFAULT '',
  `Universidad` varchar(255) DEFAULT '',
  `Promedio` double(4,2) DEFAULT '0.00',
  `Generacion` char(20) DEFAULT '',
  `CodigoSIIAU` varchar(9) DEFAULT NULL,
  `TemaTesis` varchar(255) DEFAULT NULL,
  `RFC` char(20) DEFAULT '',
  PRIMARY KEY (`codigo_Aspirante`),
  KEY `modalidad` (`modalidad`),
  KEY `NombrePrograma` (`NombrePrograma`),
  KEY `calendario_Escolar` (`calendario_Escolar`),
  KEY `NombreCompleto` (`NombreCompleto`),
  KEY `Edad` (`Edad`),
  KEY `Genero` (`Genero`),
  KEY `CURP` (`CURP`),
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
  KEY `EstadoCivil` (`EstadoCivil`),
  KEY `Licenciatura` (`Licenciatura`),
  KEY `Universidad` (`Universidad`),
  KEY `Promedio` (`Promedio`),
  KEY `Generacion` (`Generacion`),
  KEY `aspirante_ibfk_1` (`Orientacion`),
  CONSTRAINT `aspirante_ibfk_1` FOREIGN KEY (`Orientacion`) REFERENCES `lgac` (`Orientacion`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirante`
--

LOCK TABLES `aspirante` WRITE;
/*!40000 ALTER TABLE `aspirante` DISABLE KEYS */;
/*!40000 ALTER TABLE `aspirante` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-13 14:31:24
