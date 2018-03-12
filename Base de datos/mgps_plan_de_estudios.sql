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
-- Table structure for table `plan_de_estudios`
--

DROP TABLE IF EXISTS `plan_de_estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_de_estudios` (
  `Codigo_Asignaturas` char(9) NOT NULL,
  `Asignatura` varchar(255) DEFAULT NULL,
  `prerrequisitos` char(9) DEFAULT NULL,
  `creditos` int(11) DEFAULT '0',
  `tipo_asignatura` enum('comun obligatoria','particular obligatoria','especializante selectiva','especializante obligatoria','investigacionMgps','optativa abierta') DEFAULT 'comun obligatoria',
  PRIMARY KEY (`Codigo_Asignaturas`),
  KEY `Asignatura` (`Asignatura`),
  KEY `prerrequisitos` (`prerrequisitos`),
  CONSTRAINT `plan_de_estudios_ibfk_1` FOREIGN KEY (`prerrequisitos`) REFERENCES `plan_de_estudios` (`Codigo_Asignaturas`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_de_estudios`
--

LOCK TABLES `plan_de_estudios` WRITE;
/*!40000 ALTER TABLE `plan_de_estudios` DISABLE KEYS */;
INSERT INTO `plan_de_estudios` VALUES ('AD533','INTRODUCCION AL ANALISIS DE LAS POLITICAS PUBLICAS',NULL,6,'investigacionMgps'),('AD534','IMPLEMENTACION Y EVALUACION DE POLITICAS PUBLICAS','AD533',6,'investigacionMgps'),('CJ510','INSTITUCIONES Y SISTEMAS DE EDUCACION SUPERIOR',NULL,6,'particular obligatoria'),('CJ512','GOBIERNO Y GESTION DE LA EDUCACION SUPERIOR',NULL,6,'particular obligatoria'),('CJ513','MARCO NORMATIVO DE LA EDUCACION',NULL,6,'particular obligatoria'),('CJ517','EVALUACION DE LA EDUCACION SUPERIOR',NULL,6,'especializante selectiva'),('CJ521','ECONOMIA Y GESTION DEL CONOCIMIENTO',NULL,6,'optativa abierta'),('CJ522','POLITICA Y GESTION DE LA TRANSMICION Y APLICACION DEL SABER EN LA EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ523','POLITICA Y GESTION DE LAS RELACIONES DE LAS INSTITUCION Y LOS SISTEMAS DE EDUCACION SUPERIOR CON EL ENTORNO SOCIAL',NULL,6,'optativa abierta'),('CJ525','LO PÚBLICO, LO PRIVADO Y LOS SECTORES \'NO UNIVERSITARIOS\' DE LA EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ526','POLITICAS DE EQUIDAD, GENERO Y EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ527','TEORIA ORGANIZACIONAL EN EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ528','NUEVOS PARADIGMAS E INSTRUMENTOS DE POLITICAS PUBLICAS EN LA EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ529','LOS CUERPOS ACADEMICOS EN MEXICO',NULL,6,'optativa abierta'),('CJ530','POLITICA Y GESTION ESTUDIANTIL',NULL,6,'optativa abierta'),('CJ531','POLITICAS Y GESTION DE LOS RECURSOS HUMANOS EN LA EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('CJ577','METODOLOGIAS DE A INVESTIGACION',NULL,6,'comun obligatoria'),('CJ582','SEMINARIO DE INVESTIGACION II','D0695',6,'especializante obligatoria'),('D0692','TEMAS FUNDAMENTALES DE EDUCACION SUPERIOR',NULL,6,'particular obligatoria'),('D0695','SEMINARIO DE INVESTIGACION I','CJ577',6,'especializante obligatoria'),('D0697','SEMINARIO DE INVESTIGACION III','CJ582',6,'especializante obligatoria'),('D0698','ADMINISTRACION ESTRATEGICA',NULL,6,'especializante selectiva'),('D0699','PLANEACION ESTRATEGICA',NULL,6,'especializante selectiva'),('D0701','DISEÑO CURRICULAR',NULL,6,'especializante selectiva'),('D0703','POLITICAS COMPARADAS DE LA EDUCACION SUPERIOR',NULL,6,'investigacionMgps'),('D0704','POLITACAS DE FINANCIAMIENTO',NULL,6,'investigacionMgps'),('D0709','POLITICA Y GESTION DE LA PRODUCCION Y DUFUSIÓN SOCIAL DE CONOCIMIENTO',NULL,6,'optativa abierta'),('D0717','EDUCACION SUPERIOR Y TRABAJO',NULL,6,'optativa abierta'),('D0718','TOPICOS AVANZADOS EN EDUCACION SUPERIOR',NULL,6,'optativa abierta'),('MC553','ESTADISTICA',NULL,6,'comun obligatoria');
/*!40000 ALTER TABLE `plan_de_estudios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-12 12:34:22
