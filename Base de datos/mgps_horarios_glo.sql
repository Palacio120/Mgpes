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
-- Table structure for table `horarios_glo`
--

DROP TABLE IF EXISTS `horarios_glo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios_glo` (
  `numero_Horario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Hora` char(20) DEFAULT NULL,
  `Dia` enum('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado') DEFAULT NULL,
  PRIMARY KEY (`numero_Horario`),
  KEY `Dia` (`Dia`),
  KEY `Hora` (`Hora`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios_glo`
--

LOCK TABLES `horarios_glo` WRITE;
/*!40000 ALTER TABLE `horarios_glo` DISABLE KEYS */;
INSERT INTO `horarios_glo` VALUES (1,'00:00','Lunes'),(2,'1:00','Lunes'),(3,'2:00','Lunes'),(4,'3:00','Lunes'),(5,'4:00','Lunes'),(6,'5:00','Lunes'),(7,'6:00','Lunes'),(8,'7:00','Lunes'),(9,'8:00','Lunes'),(10,'9:00','Lunes'),(11,'10:00','Lunes'),(12,'11:00','Lunes'),(13,'12:00','Lunes'),(14,'13:00','Lunes'),(15,'14:00','Lunes'),(16,'15:00','Lunes'),(17,'16:00','Lunes'),(18,'17:00','Lunes'),(19,'18:00','Lunes'),(20,'19:00','Lunes'),(21,'20:00','Lunes'),(22,'21:00','Lunes'),(23,'22:00','Lunes'),(24,'23:00','Lunes'),(25,'00:00','Martes'),(26,'1:00','Martes'),(27,'2:00','Martes'),(28,'3:00','Martes'),(29,'4:00','Martes'),(30,'5:00','Martes'),(31,'6:00','Martes'),(32,'7:00','Martes'),(33,'8:00','Martes'),(34,'9:00','Martes'),(35,'10:00','Martes'),(36,'11:00','Martes'),(37,'12:00','Martes'),(38,'13:00','Martes'),(39,'14:00','Martes'),(40,'15:00','Martes'),(41,'16:00','Martes'),(42,'17:00','Martes'),(43,'18:00','Martes'),(44,'19:00','Martes'),(45,'20:00','Martes'),(46,'21:00','Martes'),(47,'22:00','Martes'),(48,'23:00','Martes'),(49,'00:00','Miercoles'),(50,'1:00','Miercoles'),(51,'2:00','Miercoles'),(52,'3:00','Miercoles'),(53,'4:00','Miercoles'),(54,'5:00','Miercoles'),(55,'6:00','Miercoles'),(56,'7:00','Miercoles'),(57,'8:00','Miercoles'),(58,'9:00','Miercoles'),(59,'10:00','Miercoles'),(60,'11:00','Miercoles'),(61,'12:00','Miercoles'),(62,'13:00','Miercoles'),(63,'14:00','Miercoles'),(64,'15:00','Miercoles'),(65,'16:00','Miercoles'),(66,'17:00','Miercoles'),(67,'18:00','Miercoles'),(68,'19:00','Miercoles'),(69,'20:00','Miercoles'),(70,'21:00','Miercoles'),(71,'22:00','Miercoles'),(72,'23:00','Miercoles'),(73,'00:00','Jueves'),(74,'1:00','Jueves'),(75,'2:00','Jueves'),(76,'3:00','Jueves'),(77,'4:00','Jueves'),(78,'5:00','Jueves'),(79,'6:00','Jueves'),(80,'7:00','Jueves'),(81,'8:00','Jueves'),(82,'9:00','Jueves'),(83,'10:00','Jueves'),(84,'11:00','Jueves'),(85,'12:00','Jueves'),(86,'13:00','Jueves'),(87,'14:00','Jueves'),(88,'15:00','Jueves'),(89,'16:00','Jueves'),(90,'17:00','Jueves'),(91,'18:00','Jueves'),(92,'19:00','Jueves'),(93,'20:00','Jueves'),(94,'21:00','Jueves'),(95,'22:00','Jueves'),(96,'23:00','Jueves'),(97,'00:00','Viernes'),(98,'1:00','Viernes'),(99,'2:00','Viernes'),(100,'3:00','Viernes'),(101,'4:00','Viernes'),(102,'5:00','Viernes'),(103,'6:00','Viernes'),(104,'7:00','Viernes'),(105,'8:00','Viernes'),(106,'9:00','Viernes'),(107,'10:00','Viernes'),(108,'11:00','Viernes'),(109,'12:00','Viernes'),(110,'13:00','Viernes'),(111,'14:00','Viernes'),(112,'15:00','Viernes'),(113,'16:00','Viernes'),(114,'17:00','Viernes'),(115,'18:00','Viernes'),(116,'19:00','Viernes'),(117,'20:00','Viernes'),(118,'21:00','Viernes'),(119,'22:00','Viernes'),(120,'23:00','Viernes'),(121,'00:00','Sabado'),(122,'1:00','Sabado'),(123,'2:00','Sabado'),(124,'3:00','Sabado'),(125,'4:00','Sabado'),(126,'5:00','Sabado'),(127,'6:00','Sabado'),(128,'7:00','Sabado'),(129,'8:00','Sabado'),(130,'9:00','Sabado'),(131,'10:00','Sabado'),(132,'11:00','Sabado'),(133,'12:00','Sabado'),(134,'13:00','Sabado'),(135,'14:00','Sabado'),(136,'15:00','Sabado'),(137,'16:00','Sabado'),(138,'17:00','Sabado'),(139,'18:00','Sabado'),(140,'19:00','Sabado'),(141,'20:00','Sabado'),(142,'21:00','Sabado'),(143,'22:00','Sabado'),(144,'23:00','Sabado');
/*!40000 ALTER TABLE `horarios_glo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-24  0:01:06
