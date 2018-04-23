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
-- Table structure for table `mixtadesempeño`
--

DROP TABLE IF EXISTS `mixtadesempeño`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mixtadesempeño` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CODIGO_ES` char(9) NOT NULL,
  `Semestre` enum('Primer Semestre','Segundo Semestre','Tercer Semestre','CuartoSemestre') DEFAULT NULL,
  `InformeActividades` longblob,
  `Informe_Nomb_Temp` varchar(255) DEFAULT NULL,
  `Informe_Tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mixtaDesempeño_idfk_1_idx` (`CODIGO_ES`),
  CONSTRAINT `mixtaDesempeño_idfk_1` FOREIGN KEY (`CODIGO_ES`) REFERENCES `estudiante` (`CODIGO_ES`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mixtadesempeño`
--

LOCK TABLES `mixtadesempeño` WRITE;
/*!40000 ALTER TABLE `mixtadesempeño` DISABLE KEYS */;
INSERT INTO `mixtadesempeño` VALUES (1,'Prueba001','Primer Semestre',NULL,NULL,NULL),(2,'Prueba001','Segundo Semestre',NULL,NULL,NULL);
/*!40000 ALTER TABLE `mixtadesempeño` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-23 14:09:52
