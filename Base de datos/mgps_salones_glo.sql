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
-- Table structure for table `salones_glo`
--

DROP TABLE IF EXISTS `salones_glo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salones_glo` (
  `Numero_salones` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Salon` char(3) DEFAULT NULL,
  `Edificios` char(1) DEFAULT NULL,
  PRIMARY KEY (`Numero_salones`),
  KEY `Salon` (`Salon`),
  KEY `Edificios` (`Edificios`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salones_glo`
--

LOCK TABLES `salones_glo` WRITE;
/*!40000 ALTER TABLE `salones_glo` DISABLE KEYS */;
INSERT INTO `salones_glo` VALUES (1,'101','Q'),(2,'102','Q'),(3,'103','Q'),(4,'104','Q'),(5,'105','Q'),(6,'106','Q'),(7,'107','Q'),(8,'108','Q'),(9,'109','Q'),(10,'201','Q'),(11,'202','Q'),(12,'203','Q'),(13,'204','Q'),(14,'205','Q'),(15,'206','Q'),(16,'207','Q'),(17,'208','Q'),(18,'209','Q'),(19,'210','Q'),(20,'211','Q'),(21,'212','Q'),(22,'102','F');
/*!40000 ALTER TABLE `salones_glo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-20 15:13:17
