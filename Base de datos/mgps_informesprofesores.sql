CREATE DATABASE  IF NOT EXISTS `mgps` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgps`;
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
-- Table structure for table `informesprofesores`
--

DROP TABLE IF EXISTS `informesprofesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informesprofesores` (
  `No_Informe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CodigoEmp` char(9) DEFAULT NULL,
  `No_profesor` int(10) unsigned NOT NULL,
  `NombreCompleto` varchar(255) DEFAULT '',
  `DEPARTAMENTO` char(9) DEFAULT NULL,
  `CURRICULUM` longblob,
  `NOMBRAMIENTO` longtext,
  `GRADOS_ACADEMICOS` char(9) DEFAULT NULL,
  `ANTIGÜEDAD_LABORAL` int(11) DEFAULT '0',
  `PUBLICACIONES` int(11) DEFAULT '0',
  `CARGA_HORARIA` longtext,
  `ASISTENCIA_CURSOS` int(11) DEFAULT '0',
  `EXPERIENCIANoDocente` longtext,
  `EVALUACIÓN` double(4,2) DEFAULT '0.00',
  `CartasDeDesempeño` longblob,
  `RECONOCIMIENTOS` longtext,
  `AÑO_INFORMES` char(10) DEFAULT NULL,
  PRIMARY KEY (`No_Informe`),
  KEY `No_profesor` (`No_profesor`),
  KEY `CodigoEmp` (`CodigoEmp`),
  KEY `DEPARTAMENTO` (`DEPARTAMENTO`),
  KEY `GRADOS_ACADEMICOS` (`GRADOS_ACADEMICOS`),
  KEY `informesprofesores_ibfk_3` (`NombreCompleto`),
  CONSTRAINT `informesprofesores_ibfk_1` FOREIGN KEY (`No_profesor`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `informesprofesores_ibfk_2` FOREIGN KEY (`CodigoEmp`) REFERENCES `plantaacademica` (`CodigoEmp`) ON UPDATE CASCADE,
  CONSTRAINT `informesprofesores_ibfk_3` FOREIGN KEY (`NombreCompleto`) REFERENCES `plantaacademica` (`NombreCompleto`) ON UPDATE CASCADE,
  CONSTRAINT `informesprofesores_ibfk_4` FOREIGN KEY (`DEPARTAMENTO`) REFERENCES `plantaacademica` (`Departamento`) ON UPDATE CASCADE,
  CONSTRAINT `informesprofesores_ibfk_5` FOREIGN KEY (`GRADOS_ACADEMICOS`) REFERENCES `empleados` (`GE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informesprofesores`
--

LOCK TABLES `informesprofesores` WRITE;
/*!40000 ALTER TABLE `informesprofesores` DISABLE KEYS */;
/*!40000 ALTER TABLE `informesprofesores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-12 12:34:09
