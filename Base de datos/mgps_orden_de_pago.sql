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
-- Table structure for table `orden_de_pago`
--

DROP TABLE IF EXISTS `orden_de_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_de_pago` (
  `Descripccion` varchar(6000) DEFAULT NULL,
  `Total_a_pagar` double(12,2) DEFAULT '0.00',
  `Estado_orden` enum('Pagado','Espera','NOPagado') DEFAULT 'Espera',
  KEY `Estado_orden` (`Estado_orden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_de_pago`
--

LOCK TABLES `orden_de_pago` WRITE;
/*!40000 ALTER TABLE `orden_de_pago` DISABLE KEYS */;
INSERT INTO `orden_de_pago` VALUES ('Solicitud de aspirante $759.00 Examen de admisión CENEVAL EXANI III, $ 626.00 Curso propedéutico $4,206.00',5591.00,'Espera'),('Solicitud de aspirante $759.00 Examen de admisión CENEVAL EXANI III, $ 626.00 Curso propedéutico $4,206.00',5591.00,'Espera'),('Solicitud de aspirante $759.00 Examen de admisión CENEVAL EXANI III, $ 626.00 Curso propedéutico $4,206.00',5591.00,'Espera');
/*!40000 ALTER TABLE `orden_de_pago` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-08  9:05:44
