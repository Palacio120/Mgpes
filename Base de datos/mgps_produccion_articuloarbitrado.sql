CREATE DATABASE  IF NOT EXISTS `mgps` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgps`;
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
-- Table structure for table `produccion_articuloarbitrado`
--

DROP TABLE IF EXISTS `produccion_articuloarbitrado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion_articuloarbitrado` (
  `id_Articulo` int(10) unsigned NOT NULL,
  `Autores` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `NombreRevista` varchar(255) DEFAULT NULL,
  `dePagina` int(11) DEFAULT NULL,
  `aPagina` int(11) DEFAULT NULL,
  `Pais` varchar(225) DEFAULT NULL,
  `Editorial` varchar(64) DEFAULT NULL,
  `Volumen` varchar(64) DEFAULT NULL,
  `ISSN` varchar(64) DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Proposito` varchar(64) DEFAULT NULL,
  `Descripccion` longtext,
  `Probatorio` longblob,
  `ProduccionAlumnos` int(10) unsigned NOT NULL,
  `IdActividades` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Articulo`),
  KEY `Id_actividades_idx` (`IdActividades`),
  KEY `Id_Produccion_idx` (`ProduccionAlumnos`),
  CONSTRAINT `Id_Produccion` FOREIGN KEY (`ProduccionAlumnos`) REFERENCES `produccionalumnos` (`NO_Publicacion`) ON UPDATE CASCADE,
  CONSTRAINT `Id_actividades` FOREIGN KEY (`IdActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Produccion de alumnos de un articulo arbitrado';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_articuloarbitrado`
--

LOCK TABLES `produccion_articuloarbitrado` WRITE;
/*!40000 ALTER TABLE `produccion_articuloarbitrado` DISABLE KEYS */;
/*!40000 ALTER TABLE `produccion_articuloarbitrado` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_articuloarbitrado_AFTER_INSERT` AFTER INSERT ON `produccion_articuloarbitrado` FOR EACH ROW
BEGIN

	INSERT INTO `mgps`.`produccionalumnos`(`NO_Publicacion`,`IdActividades`,`Titulo`,`TipoDeProduccion`,`Probatorio`)VALUES(0,
   new.IdActividades,new.Titulo, 'Artículo de difusión y divulgación', new.Probatorio);


END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 17:17:55