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
-- Table structure for table `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspirantes` (
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
  KEY `aspirantes_ibfk_1` (`Orientacion`),
  CONSTRAINT `aspirantes_ibfk_1` FOREIGN KEY (`Orientacion`) REFERENCES `lgac` (`Orientacion`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirantes`
--

<<<<<<< HEAD:Base de datos/mgps_aspirante.sql
LOCK TABLES `aspirante` WRITE;
/*!40000 ALTER TABLE `aspirante` DISABLE KEYS */;
/*!40000 ALTER TABLE `aspirante` ENABLE KEYS */;
=======
LOCK TABLES `aspirantes` WRITE;
/*!40000 ALTER TABLE `aspirantes` DISABLE KEYS */;
INSERT INTO `aspirantes` VALUES (1,NULL,'tiempo completo','Nuevos paradigmas','','2017A','Alejandro Palacio Alvarez',20,'M','','','','','','','','','','','','','','','',90.00,'',NULL,NULL,''),(2,NULL,'tiempo completo','Nuevos paradigmas','','2017A','Alejandro Palacio Alvarez',20,'M','','','','','','','','','','','','','','','',90.00,'',NULL,NULL,''),(4,'C:xampp	mpphp8E35.tmp','TIEMPO COMPLETO','Calidad y mejoramiento','Maestría en Gestión y Politicas Publicas de la Educación Superior','2018A','Alejandro Palacio Álvarez',21,'M','PAAA970303HJCLLL02','Andador Dr. Luis Farah','652','0','Los Paraisos','44150','Jalisco','Guadalajara','-','3331174635','alejandropalacio119@gmail.com','Guadalajara Jal. México','Soltero','Tecnologías de la información','UdeG',90.00,'2015B','212546785','Prueba','prueba');
/*!40000 ALTER TABLE `aspirantes` ENABLE KEYS */;
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957:Base de datos/mgps_aspirantes.sql
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD:Base de datos/mgps_aspirante.sql
-- Dump completed on 2018-03-09 15:31:28
=======
-- Dump completed on 2018-03-08  9:05:23
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957:Base de datos/mgps_aspirantes.sql