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
-- Table structure for table `produccion_revistainderxada`
--

DROP TABLE IF EXISTS `produccion_revistainderxada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion_revistainderxada` (
  `id_Articulo` int(10) unsigned NOT NULL,
  `Autores` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `NombreRevista` varchar(255) DEFAULT NULL,
  `dePagina` int(11) DEFAULT NULL,
  `aPagina` int(11) DEFAULT NULL,
  `Descripccion` longtext,
  `Pais` varchar(225) DEFAULT NULL,
  `Editorial` varchar(64) DEFAULT NULL,
  `Volumen` varchar(64) DEFAULT NULL,
  `ISSN` varchar(64) DEFAULT NULL,
  `IndiceDeRegistro` varchar(64) DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Proposito` varchar(64) DEFAULT NULL,
  `Probatorio` longblob,
  `ProduccionAlumnos` int(10) unsigned NOT NULL,
  `IdActividades` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Articulo`),
  KEY `RevistaInderxada_1_idx` (`IdActividades`),
  KEY `RevistaInderxada_2_idx` (`ProduccionAlumnos`),
  CONSTRAINT `RevistaInderxada_1` FOREIGN KEY (`IdActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE,
  CONSTRAINT `RevistaInderxada_2` FOREIGN KEY (`ProduccionAlumnos`) REFERENCES `produccionalumnos` (`NO_Publicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_revistainderxada`
--

LOCK TABLES `produccion_revistainderxada` WRITE;
/*!40000 ALTER TABLE `produccion_revistainderxada` DISABLE KEYS */;
/*!40000 ALTER TABLE `produccion_revistainderxada` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-09 15:31:36
