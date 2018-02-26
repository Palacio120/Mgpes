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
-- Table structure for table `produccion_otro`
--

DROP TABLE IF EXISTS `produccion_otro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion_otro` (
  `id_Articulo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Autor` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Descripccion` longtext,
  `Pais` varchar(225) DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Proposito` varchar(255) DEFAULT NULL,
  `Probatorio` longblob,
  `ProduccionAlumnos` int(10) unsigned NOT NULL,
  `IdActividades` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Articulo`),
  KEY `produccion_otro_idx1_idx` (`IdActividades`),
  CONSTRAINT `produccion_otro_idx1` FOREIGN KEY (`IdActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_otro`
--

LOCK TABLES `produccion_otro` WRITE;
/*!40000 ALTER TABLE `produccion_otro` DISABLE KEYS */;
INSERT INTO `produccion_otro` VALUES (1,'Alejandro','Prueba Otro','Peque√±a descripccion','MX','2018-02-01','5','',10,21),(2,'Prueba2','Prueba 2','Prueba','MX','2018-01-01','5','%PDF-1.4\n3 0 obj\n<</Type /Page\n/Parent 1 0 R\n/Resources 2 0 R\n/Contents 4 0 R>>\nendobj\n4 0 obj\n<</Filter /FlateDecode /Length 211>>\nstream\nxúméΩN\√@Ñ{?≈î§\»f\Ô\«w∂\Ë)¢\0q%M_bá$w~}\÷HàÜb4#\Õ\Í\€\—\ÿTLµ\«T}Ç±Å\¬$~≠E0Y\Ô¥D˛çµ#\◊\Í¶±dòvg¨\¬Û\„>\·EhçıXW?gMMö°C\÷aiô©e\‰à\◊\Í.`ı®†41#\ÏÒ\Ê	‰ïï∑R\ZØ\»Xxo©VnB?tiw=\«Àà“ß\Î©\√ˆT¶î\ﬂGÅ»Ñ1égõ1\”0ˆ˚à}é\€\\b\∆W\ÃeH\‹.\ﬂ§o¢™Eû\nendstream\nendobj\n1 0 obj\n<</Type /Pages\n/Kids [3 0 R ]\n/Count 1\n/MediaBox [0 0 595.28 841.89]\n>>\nendobj\n5 0 obj\n<</Filter /FlateDecode /Length 364>>\nstream\nxú]R\ÀnÉ0ºÛ>¶áL\ZÇ%ÑDIê8Ù°\“~\0Å%E*r\‡Ôªªv“™HX\„±gvVk?/è•\Ó·øô±©`]Ø[Ûx5\rà3\\z\Ì\…P¥}≥∏Ø\ÕPOûè\‚jùJ›ç^í¯\Ôx6/fõ¨\œ\‡˘Ø¶\”\Îã\ÿ|\Ê\Ó´\Î4}\√\0zÅó¶¢Ö}û\Î\È•@¯,€ñ-û˜À∫E\ÕÔçèuÚ^\⁄,\Õ\ÿ\¬<\’\ròZ_¿KÇ IQ§\Ëˆ\ﬂYd\Á\Ó\Ô\’CÅKÄ_\Í%qÑ8>\‡!J\"V!2&bGƒ£%r\"H¢¨D\Óê\»\\}2EL1n•∫hæjÉ\Âñe\‰ª\"a*H¨ã\ÿ\’:\ﬁ\€d\·ò\ÓÑ9c\≈¸é[\»X1~≤º\"ú3øg\œ\„√ëÚ;O\‚ïı<r_\Ï)-\Ô<%a\ÁI9ïÛ§∂ïÛ§ú™∞8v\›s∑4z0˜97Wcp\ƒ¸™x∂4\’^\√˝\·M\„D*˙\0\r∂©\nendstream\nendobj\n6 0 obj\n<</Type /Font\n/BaseFont /Helvetica\n/Subtype /Type1\n/Encoding /WinAnsiEncoding\n/ToUnicode 5 0 R\n>>\nendobj\n7 0 obj\n<</Type /XObject /Subtype /Form /FormType 1 /BBox [0 0 595.28 841.89 ]\n/Group <</Type /Group /S /Transparency >>\n/Resources <</Font <</F1 8 0 R >>\n>>\n/Filter /FlateDecode /Length 113 >>\nstream\nxú ΩÇ0Ä—ùß¯F5±∂˛Vù\\L\Ó\‘rQ¥±Ö¯˙\Ír¶SΩ±<8\…\Ê\‚pG§\√5\∆\Óë+[Kms\ÿ\’H˚kÚ˘Ú\Ïm\nÛ®qb.ZƒîG?r*eùµ”¨1(ìøjñ\»Yqñ\Íˆ∂¯ µ\nendstream\nendobj\n8 0 obj\n<</Type /Font /Subtype /Type1 /BaseFont /Helvetica-Bold /Encoding /WinAnsiEncoding >>\nendobj\n2 0 obj\n<<\n/ProcSet [/PDF /Text /ImageB /ImageC /ImageI]\n/Font <<\n/F1 6 0 R\n>>\n/XObject <<\n/TPL0 7 0 R\n>>\n>>\nendobj\n9 0 obj\n<<\n/Producer (FPDF 1.81)\n/CreationDate (D:20180220094318)\n>>\nendobj\n10 0 obj\n<<\n/Type /Catalog\n/Pages 1 0 R\n>>\nendobj\nxref\n0 11\n0000000000 65535 f \n0000000368 00000 n \n0000001435 00000 n \n0000000009 00000 n \n0000000087 00000 n \n0000000455 00000 n \n0000000889 00000 n \n0000001002 00000 n \n0000001334 00000 n \n0000001551 00000 n \n0000001627 00000 n \ntrailer\n<<\n/Size 11\n/Root 10 0 R\n/Info 9 0 R\n>>\nstartxref\n1677\n%%EOF\n',24,21);
/*!40000 ALTER TABLE `produccion_otro` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_otro_BEFORE_INSERT` BEFORE INSERT ON `produccion_otro` FOR EACH ROW
BEGIN
		INSERT INTO `mgps`.`produccionalumnos`(`NO_Publicacion`,`IdActividades`, CODIGO_ES,`Titulo`,`TipoDeProduccion`,`Probatorio`)VALUES(0,
   new.IdActividades, (Select ID_Est from actividades where idActividades= new.IdActividades), new.Titulo, 'Otro', new.Probatorio);
	
	set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=new.Titulo and IdActividades= new.idActividades and TipoDeProduccion='Otro');
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_otro_BEFORE_UPDATE` BEFORE UPDATE ON `produccion_otro` FOR EACH ROW
BEGIN
set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=old.Titulo and IdActividades= old.idActividades and TipoDeProduccion='Otro');
	
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

-- Dump completed on 2018-02-26  0:30:37
