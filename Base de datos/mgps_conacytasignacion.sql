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
-- Table structure for table `conacytasignacion`
--

DROP TABLE IF EXISTS `conacytasignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conacytasignacion` (
  `idAsignacion` int(11) NOT NULL,
  `CODIGO_ES` char(9) NOT NULL,
  `ComprobanteArchivo` longblob,
  `ComprobanteTypo` varchar(45) DEFAULT NULL,
  `ComprobanteNombreTmp` varchar(255) DEFAULT NULL,
  `promedioArchivo` longblob,
  `promedioTypo` varchar(45) DEFAULT NULL,
  `promedioNombreTmp` varchar(255) DEFAULT NULL,
  `ConstanciaNivArchivo` longblob,
  `ConstanciaNivTypo` varchar(45) DEFAULT NULL,
  `ConstanciaNivTmp` varchar(255) DEFAULT NULL,
  `PromediRecArchivo` longblob,
  `PromediRecTypo` varchar(45) DEFAULT NULL,
  `PromediRecTmp` varchar(255) DEFAULT NULL,
  `IdentificacionArchivo` longblob,
  `IdentificacionTypo` varchar(45) DEFAULT NULL,
  `IdentificacionTmp` varchar(255) DEFAULT NULL,
  `CartacompromisoArchivo` longblob,
  `CartacompromisoTypo` varchar(45) DEFAULT NULL,
  `CartacompromisoTmp` varchar(255) DEFAULT NULL,
  `CopiaVISAArchivo` longblob,
  `CopiaVISATypo` varchar(45) DEFAULT NULL,
  `CopiaVISATmp` varchar(255) DEFAULT NULL,
  `AsignacionArchivo` longblob,
  `AsignacionTypo` varchar(45) DEFAULT NULL,
  `AsignacionTmp` varchar(255) DEFAULT NULL,
  `ConvenioArchivo` longblob,
  `ConvenioTypo` varchar(45) DEFAULT NULL,
  `ConvenioTmp` varchar(255) DEFAULT NULL,
  `ISSSTEArchivo` longblob,
  `ISSSTETypo` varchar(45) DEFAULT NULL,
  `ISSSTETmp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAsignacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conacytasignacion`
--

LOCK TABLES `conacytasignacion` WRITE;
/*!40000 ALTER TABLE `conacytasignacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `conacytasignacion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-13 14:31:28
