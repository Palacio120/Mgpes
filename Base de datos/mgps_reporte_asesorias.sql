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
-- Table structure for table `reporte_asesorias`
--

DROP TABLE IF EXISTS `reporte_asesorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_asesorias` (
  `idReporte_Asesorias` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Numero_Reporte` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Calendario_Escolar` varchar(45) DEFAULT NULL,
  `Nombre_Es` varchar(255) DEFAULT NULL,
  `Codigo_Es` char(9) DEFAULT NULL,
  `Titulo_de_Tesis` longtext,
  `Activiadades_realiadas` longtext,
  `Tareas` longtext,
  `Observaciones` longtext,
  `SiguienteAsesoria` date DEFAULT NULL,
  `Id_act` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idReporte_Asesorias`),
  KEY `Reporte_Asesorias_idfk1_idx` (`Id_act`),
  CONSTRAINT `Reporte_Asesorias_idfk1` FOREIGN KEY (`Id_act`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_asesorias`
--

LOCK TABLES `reporte_asesorias` WRITE;
/*!40000 ALTER TABLE `reporte_asesorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_asesorias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-24  0:01:14