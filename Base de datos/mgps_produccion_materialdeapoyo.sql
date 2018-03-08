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
-- Table structure for table `produccion_materialdeapoyo`
--

DROP TABLE IF EXISTS `produccion_materialdeapoyo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion_materialdeapoyo` (
  `id_Articulo` int(10) unsigned NOT NULL,
  `Autor` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Descripccion` longtext,
  `EmpresaBeneficiaria` varchar(255) DEFAULT NULL,
  `Pais` varchar(225) DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Proposito` varchar(255) DEFAULT NULL,
  `Probatorio` longblob,
  `ProduccionAlumnos` int(10) unsigned NOT NULL,
  `IdActividades` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Articulo`),
  KEY `MaterialDeApoyo_idx1` (`IdActividades`),
  CONSTRAINT `MaterialDeApoyo_idx1` FOREIGN KEY (`IdActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_materialdeapoyo`
--

LOCK TABLES `produccion_materialdeapoyo` WRITE;
/*!40000 ALTER TABLE `produccion_materialdeapoyo` DISABLE KEYS */;
/*!40000 ALTER TABLE `produccion_materialdeapoyo` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_materialdeapoyo_BEFORE_INSERT` BEFORE INSERT ON `produccion_materialdeapoyo` FOR EACH ROW
BEGIN
	INSERT INTO `mgps`.`produccionalumnos`(`NO_Publicacion`,`IdActividades`, CODIGO_ES,`Titulo`,`TipoDeProduccion`,`Probatorio`)VALUES(0,
   new.IdActividades, (Select ID_Est from actividades where idActividades= new.IdActividades), new.Titulo, 'Material de apoyo', new.Probatorio);
	
	set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=new.Titulo and IdActividades= new.idActividades and TipoDeProduccion='Material de apoyo');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_materialdeapoyo_BEFORE_UPDATE` BEFORE UPDATE ON `produccion_materialdeapoyo` FOR EACH ROW
BEGIN
set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=old.Titulo and IdActividades= old.idActividades and TipoDeProduccion='Material de apoyo');
	
    UPDATE `mgps`.`produccionalumnos`
SET
`Titulo` = new.Titulo,
`Probatorio` = new.Probatorio
WHERE `NO_Publicacion` = new.ProduccionAlumnos;
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

-- Dump completed on 2018-03-08  9:05:03
