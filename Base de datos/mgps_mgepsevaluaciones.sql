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
-- Table structure for table `mgepsevaluaciones`
--

DROP TABLE IF EXISTS `mgepsevaluaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mgepsevaluaciones` (
  `RegistroMGEPS` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PERIODO` char(10) DEFAULT NULL,
  `Registro` int(10) unsigned NOT NULL,
  `No_profesor` int(10) unsigned NOT NULL,
  PRIMARY KEY (`RegistroMGEPS`),
  KEY `Registro` (`Registro`),
  KEY `No_profesor` (`No_profesor`),
  CONSTRAINT `mgepsevaluaciones_ibfk_1` FOREIGN KEY (`Registro`) REFERENCES `autoevaluacion` (`Registro`) ON UPDATE CASCADE,
  CONSTRAINT `mgepsevaluaciones_ibfk_2` FOREIGN KEY (`No_profesor`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mgepsevaluaciones`
--

LOCK TABLES `mgepsevaluaciones` WRITE;
/*!40000 ALTER TABLE `mgepsevaluaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `mgepsevaluaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-24 13:08:46
