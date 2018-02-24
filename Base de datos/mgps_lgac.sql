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
-- Table structure for table `lgac`
--

DROP TABLE IF EXISTS `lgac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lgac` (
  `LGAC` char(6) NOT NULL,
  `Lineamiento` varchar(255) DEFAULT NULL,
  `Descripccion` longtext,
  `Orientacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`LGAC`),
  KEY `Lineamiento` (`Lineamiento`),
  KEY `Orientacion` (`Orientacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lgac`
--

LOCK TABLES `lgac` WRITE;
/*!40000 ALTER TABLE `lgac` DISABLE KEYS */;
INSERT INTO `lgac` VALUES ('CYMLES','Calidad y mejoramiento en la educación superior','Se analizan los enfoques teóricos, características, elementos y efectos de la calidad en las IES. La concepción de calidad en el discurso de las políticas públicas mexicanas para la educación superior y la forma como lo asumen e integran las IES. La calidad en la gestión educativa y en los procesos administrativos que soportan la docencia y la investigación. El mejoramiento en el desempeño y cumplimiento de los fines de la educación superior La eficiencia, eficacia, transparencia y rendición de cuentas en el uso de los recursos. Los proyectos vinculados a esta línea, por tanto, son  aquellos interesados en analizar los enfoques de la calidad en la educación superior y en las políticas públicas de educación superior; con el fin de mejorar la formación de recursos humanos para el desarrollo nacional, tanto en pregrado como en posgrado. Así como aquellos aspectos que afectan o mejoran la calidad en los procesos de la gestión académica y administrativa, con el fin de incrementar esta calidad en el desempeño de las instituciones.','Calidad y mejoramiento'),('GYPLES','Gestión y planeación de la educación superior','Se centra en el análisis de los procesos de la gestión administrativa en las IES, los métodos, técnicas y herramientas de gestión. Así como las teorías y enfoques relativos al campo de la gestión y planeación estrategia de las IES. Los proyectos en esta línea se orientarán al estudio de los problemas y obstáculos que dificultan la gestión y la planeación estratégica, así como a los métodos y técnicas de la planeación estratégica que pueden implementarse para mejorar la gestión en las IES.','Gestión y planeación'),('NPDES','Nuevos paradigmas de educación superior','Concibe los temas emergentes en el ámbito de la educación superior; los nuevos temas que se discuten en el debate nacional e internacional. Los proyectos en esta línea se enfocan en el estudio de temas y problemáticas nuevas de la educación superior.','Nuevos paradigmas'),('PPCIES','Políticas públicas y cambio institucional en la educación superior','El análisis se concentra en los estudios sobre las distintas teorías, enfoques, perspectivas y paradigmas del diseño, implementación y evaluación de las políticas públicas para la educación superior, así como las transformaciones estructurales de las Instituciones de Educación Superior (IES), derivadas de la implementación de esas políticas, y de los cambios globales en los campos de la cultura, política y economía. A esta línea se vinculan  proyectos que analizan las políticas públicas de educación superior, sus enfoques, fines y resultados, sus actores e impactos en las instituciones; que ofrecen aportaciones para su mejoramiento en su diseño, implementación y evaluación.','cambio institucional');
/*!40000 ALTER TABLE `lgac` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-24 14:36:18
