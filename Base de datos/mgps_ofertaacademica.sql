CREATE DATABASE  IF NOT EXISTS `mgps` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgps`;
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
-- Table structure for table `ofertaacademica`
--

DROP TABLE IF EXISTS `ofertaacademica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ofertaacademica` (
  `NRC` int(10) unsigned NOT NULL,
  `Codigo_Asignatura` char(9) DEFAULT NULL,
  `Asignatura` varchar(255) DEFAULT '',
  `NumeroHorario` int(10) unsigned NOT NULL,
  `Hora` char(20) DEFAULT '',
  `Dia` enum('Lunes','Martes','Miercoles','Jueves','Viernes','sabado') DEFAULT 'Lunes',
  `NumeroSalon` int(10) unsigned NOT NULL,
  `Salon` char(3) DEFAULT '',
  `Edificio` char(1) DEFAULT '',
  `No_Profesor` int(10) unsigned NOT NULL,
  `NombreProfesor` varchar(255) DEFAULT '',
  `Periodo` char(10) DEFAULT NULL,
  PRIMARY KEY (`NRC`),
  KEY `Codigo_Asignatura` (`Codigo_Asignatura`),
  KEY `NumeroHorario` (`NumeroHorario`),
  KEY `NumeroSalon` (`NumeroSalon`),
  KEY `No_Profesor` (`No_Profesor`),
  KEY `ofertaacademica_ibfk_10` (`Edificio`),
  KEY `ofertaacademica_ibfk_2` (`Asignatura`),
  KEY `ofertaacademica_ibfk_6` (`NombreProfesor`),
  KEY `ofertaacademica_ibfk_7` (`Dia`),
  KEY `ofertaacademica_ibfk_8` (`Hora`),
  KEY `ofertaacademica_ibfk_9` (`Salon`),
  CONSTRAINT `ofertaacademica_ibfk_1` FOREIGN KEY (`Codigo_Asignatura`) REFERENCES `plan_de_estudios` (`Codigo_Asignaturas`) ON UPDATE CASCADE,
  CONSTRAINT `ofertaacademica_ibfk_3` FOREIGN KEY (`NumeroHorario`) REFERENCES `horarios_glo` (`numero_Horario`) ON UPDATE CASCADE,
  CONSTRAINT `ofertaacademica_ibfk_5` FOREIGN KEY (`No_Profesor`) REFERENCES `plantaacademica` (`No_profesor`) ON UPDATE CASCADE,
  CONSTRAINT `ofertaacademica_ibfk_8` FOREIGN KEY (`NumeroSalon`) REFERENCES `salones_glo` (`Numero_salones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertaacademica`
--

LOCK TABLES `ofertaacademica` WRITE;
/*!40000 ALTER TABLE `ofertaacademica` DISABLE KEYS */;
INSERT INTO `ofertaacademica` VALUES (1,'AD533','INTRODUCCION AL ANALISIS DE LAS POLITICAS PUBLICAS',14,'13:00','Lunes',22,'102','F',1,'Ricardo Palacio Alvarez','2018-A'),(2,'AD533','',13,'','Lunes',22,'','',1,'','2018-A');
/*!40000 ALTER TABLE `ofertaacademica` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`ofertaacademica_BEFORE_INSERT` BEFORE INSERT ON `ofertaacademica` FOR EACH ROW
BEGIN
	set new.asignatura=(select Asignatura from plan_de_Estudios where codigo_asignaturas= new.codigo_asignatura);
    set new.hora=(select Hora from Horarios_GLO where numero_horario= new.numeroHorario);
    set new.Dia=(select Dia from Horarios_GLO where numero_horario= new.numeroHorario);
    set new.Salon=(select Salon from Salones_Glo where numero_Salones= new.numeroSalon);
    set new.Edificio=(select Edificios from Salones_Glo where numero_Salones= new.numeroSalon);
    set new.NombreProfesor=(select NombreCompleto from plantaAcademica where No_Profesor= new.No_Profesor);
    
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`ofertaacademica_BEFORE_UPDATE` BEFORE UPDATE ON `ofertaacademica` FOR EACH ROW
BEGIN
	set new.asignatura=(select Asignatura from plan_de_Estudios where codigo_asignaturas= new.codigo_asignatura);
    set new.hora=(select Hora from Horarios_GLO where numero_horario= new.numeroHorario);
    set new.Dia=(select Dia from Horarios_GLO where numero_horario= new.numeroHorario);
    set new.Salon=(select Salon from Salones_Glo where numero_Salones= new.numeroSalon);
    set new.Edificio=(select Edificios from Salones_Glo where numero_Salones= new.numeroSalon);
    set new.NombreProfesor=(select NombreCompleto from plantaAcademica where No_Profesor= new.No_Profesor);
    
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

-- Dump completed on 2018-03-12 12:34:26
