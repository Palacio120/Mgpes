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
-- Table structure for table `produccion_articulodifucion`
--

DROP TABLE IF EXISTS `produccion_articulodifucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion_articulodifucion` (
  `id_Articulo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Autores` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `NombreRevista` varchar(255) DEFAULT NULL,
  `dePagina` int(11) DEFAULT NULL,
  `aPagina` int(11) DEFAULT NULL,
  `Pais` varchar(225) DEFAULT NULL,
  `Editorial` varchar(64) DEFAULT NULL,
  `Volumen` varchar(64) DEFAULT NULL,
  `ISSN` varchar(64) DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Proposito` varchar(64) DEFAULT NULL,
  `Probatorio` longblob,
  `ProduccionAlumnos` int(10) unsigned NOT NULL,
  `IdActividades` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Articulo`),
  KEY `Actividades_id_idx` (`IdActividades`),
  CONSTRAINT `Actividades_id` FOREIGN KEY (`IdActividades`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Producción de los articulos de revistas por parte de los estudiantes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_articulodifucion`
--

LOCK TABLES `produccion_articulodifucion` WRITE;
/*!40000 ALTER TABLE `produccion_articulodifucion` DISABLE KEYS */;
INSERT INTO `produccion_articulodifucion` VALUES (6,'Alejandro Palacio Alovarez','Prueba de insercion','1','Pruebas',6,7,'MX','Pruebas','Primer Volumen','1','2017-12-31','Asimilación de tecnología','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0\0\0\0\0\0�x\��\0\0\0sBIT|d�\0\0\0	pHYs\0\0�\0\0�w\���\0\0\0tEXtSoftware\0www.inkscape.org�\�<\Z\0\0CIDATx�\�\�}�gw]\���\�,\�f� d`\�!!H�aHj}\�(2�N����\�ʨ\�vZ�V\nؖڢ6V���\�*PEf!8�			�\�&$d�\�\�\�r�\�\�\�����s\�\�\�k\�\�\�����=��\���}\��{ή��V��s���3�=թ��=\�\�S��pGu`q�uq]�q�jq���\\�]SpgTV-\�=m8\0�.\�VWT�/6�{\�J�9\�\�\���\'�\0f\�\�\�՛��\'����\0xP�\�\�%\�S&�\0\��\�\�\���/O\�T�iտ�~<�\�ؙ\�\�X���y싟4��N�^Y�~ý�\�#_\0��\�\�ӫ�W�TU\�\�cu\0��V�P=b�k�v��\�\�V�]��\�\�(\0�[��:o�k�v�\�\�U\�;\�y�y\0O�\�P=s�\�\0�\�����>>��\�U\0�����ߜ\���\�Ά9�=\�g=	p�z�\�f�\0l\�\�\�\�\�ix�\�=�\Zx���\�\�V\�5\�1��W\�_\�2��fU\0�U]V=nF\�\0���\��k6;\�\�\�c\�\�\�I�\00o�kȹnv�\�\���\�\�)�\r\0X��W?X\�X�\�F\�L�cկ5�.\0�v\�s�\�`�\�9\0V���\00��շ7�rx]6R\0�\�p�\�A8\0��/W�Ή�\�m\�\�m�\�/��\��ܼw=\'��\0XhX\�o�?\0l-�k\�\�k\�\�\����G�\0[\�cV\�g-��\0xiC\0\0l]O�>W}\�x�e\���\�\�>\0�\�\�P����\�+xC�?\0l�k\�ݫ:^�\�\�3	\0\�3r�1�v`��\�\�YF\0�\�\�7U�V�r��K��`�:�UV\��pr�\�\��\0\�\��ޱ��cu\0~2\�\0��G4\��{Y�pZ�\�\��\0\�W�\�T7/�p��b\�\��\0�\�\�\�|\��w\0T}a�`\0\�\�pG���7V���\�$\08ќܐ\�X^\0�d�X\0��\�\�8�\�?n,\0���UW\�\�����\0ɑ\\��\0x��\0\0\�9�\�\�8��\�4�\0\0#zXu�\��u�\0�3\\X_�pф�\0\0㹨�^\0\�\0\0�\�pa\rs\0ز\�\0\'�\�\Z\�\0;Ǿ�\�ܩ�\0\0Fu�\0\0\�<�\0\0��\�[�Μ:\n\0`Tg.T{��\0՞�\�ԩ�\0\0Fu�\0\0\�<{\0\0��\�Y�vO\00�\�Ձ��\0\0Fu�\0\0v�[\0\0��P\0\0�\�s`!���\�\�\�3SG\0�\�3\����\0\0F���j\�(\0�Q]�\0\0;\��]\�BuKu\�\��\0\0�w[�w�:T�\�`\0�q��:���\�\�SF\0�\��\Z\��G�\0\0Nx�W\�Z�cW��\��\�\�\0\�\��\�!\�=�;\0�T\�.\0`\�i\��GnT�e�X\0��\����|���B�\�\�\�\0\�\�\�\�\��:�p��\�)\"\0\�\�w[L�utPu鸱\0\0#9*\�//\0>^}`�X\0�|�!\��k���V}p�p\0�1<��\�\��w\0Z<\�G	\0��?lY�;\0U\�VWV\'\�3\"\0`�\�ί�Z�\�J���yF\0\�\�o�B�cw\0�ά>S=`\0su{uvu\�J_�\�\�	o�GD\0�ܽ�c$�Z�P����z�,#\0\�\�\�\�\�cp�I~w.n\�9à\0����\�}�p�@\r�	\�Q=o\0suY��\�\�j��\0�:�a\r\�y�\n\0��O6<\�\�\�\��\��\�\�\�Ǫ\�7\00?7U\�R]���W[�ܵ\���6\00?w5\�\�5%�Z������>�\0`+yE������G��Uò�6p.\00[o���zOZ\���vW\���\�\06\�\��\�\\\�-\0�N��$�\0\0�\�G�\�n\�\�\�\��\�\�ճ��lb\0`�~�!o(�\�\�_�{�a\���Յm��\0\0�\�P��\�\�@\��Y&\�\�7t�\�pL\0`pK�ջf1ج��\��\�G\�x\\\0\�ɮi����Y\r��9\0+��\�)D���\0\0X�+\Z&\�\�,�\�\�\�\0�\���[�UOμ\0\0؈��_�^Z\�6\��g\�8\�\�\'�\'4�{\0���Q��\�+\�\�d�c\�\����\�UO\�z\0�}��\�\��м:\0\��E�\�\�E\�\�#]\0���\r/�yz#$��\���\�\�G�WWgLp}\0\�*�X�|��ͩ\�,SN\�;�zy����\0�S�]��\�\�0�o-�\��\'V/ix���\0\0\'�뫷V�V3q,[�\08줆�-nO�\�;iD\0�1_�>\\]��}�aiߖ�\�\n�\�P=��\�\�걋{]\0��\�&�zq�\�\r��n�2�\�l�\�X�Vg.\�O]\�\�\�\���?��\�S}�\���T�.\�[\�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0��e\�\�l\�I՞%\�\�m��\0[\�=\�Ձ%\�ݓF�	\�!Y�V=�\�W���\�W�Y\�¸\0\�\�u\��\�\��\��\'��\'�븶b���\�\�\�\�\�\r\�a҈\0`}5ﭮ�\�_\�2iD\�l�\��\�\�\�\rI��i\������xs�\�mӆ3}pa��\�{\Z�\0\08\�\�V��zSCw`S\0O�^_=c�\��V��\�g��}\�ﭟ\�P�|0\�\0�ѐ\�ސ#G3VpfuIue�\�#]\0��\�nȑ�4\�̹��-��\r����0\�k��\��\�\r\r�\�\�r`��U��<\�k\0��\�\�\�U\�o\�c�y,�\�]�j��\�\0��\��\�ê?mx��\�̺pz�����\0�l��zQuӬ�e��ꏪ�f8&\00���#�Y6�U\0\�iX\�(��|�Րk�3��f1\�g\Z&(�<��\0�c�_�↗}p3m\��}�߬^��\0\0�\r���\�ꮍ�����6,�\0\���\�!ջ6r�F�WT�\�\�\0�l<��R������[\0Ϯ��a�?\00��\�?iX*�f\�-\0S}�a�?\0�5\�T]P}v�\'�g\�\r\��%\0\�ZNo\�ѧ����\0\�[��6\00\�5\�\�5\���N|Mf��V��\�Y�\���\�xnu\�f#\0F�ꝫp�`wueCE\0l���V�\�x�	~(\�\0��}\�\��j�S�\�4��\0\�^�X�]ݶҗ�u\0^�\�\0\�\�\�\Zr���\�xH\�{�׼�\0\�rnmx��q�e����u�\0sw�\��ջ��R\�\�\�S\r��\0����\�7\�\�;b�9\0��\�\0\'��4\���,\�\0<�\�\��F\�\0lM�4\����\�;\0\'���fWC�?ꃥ��;Z8\0�X>]�s�����&���\�\r��:�\0��\�\�\0\'�#�~\�-�\�U�=\0`,�P=��\�xL�?\0�\�ِ�\0M\00��J\0\0;\�E��9\0\�W�.\0`$7Tg\�jx]\�u\0�\�̅j\�\�Q\0\0�ڷP�;u\0��\�\�\0��g�\0\0v�}Ճ��\0Ճ�=SG\0�j�\0\0v\0\0\�@{vUwV��:\0`4_[8�1\0��f�:0u\0��(\0\0`\�Q\0\0��\0\0�\��Bu\�\�Q\0\0��q�\�?u\0���+\0\0`\�ٿP]5u\0���\�U=��n\�H\0�ќ�k�\�W�2\0`7Tg~�{��\0\�{kxp\�\�\0�\��R\0\0�Nsyծ%|�z\�$�\0\0c��\�Q��@ջ&	\0ˑ\\��\0x��\0\0\�9�\�w-�\�\�\�\�\�\0�\�\�\�9��XX�\�\�\00��r�����kV�\0ؾ\�Ϊ�=�����\�\�ƌ\0����$�\�ʿ�Ϯ>U\�g��\0����z|���.\�\0�x�%cD\0\�\�%-K�u\�{�i�p\�<#\0\�\�ֆ{�_Z�\�I\�8\��jw�\�9\0\�\�/U\�^\�\�f��\�\�2x\�<\"\0\�\�\r��n[\�\�cu\0j�4p�z\��\0\�맫\�\�\��\�]]Y\�eD\0�\\\��ί뀕V,u���\0\0���n�\�_�\�8\�\�\�\�\���\0��\�V�~��\��\�߅\�\��6\00W�U/�\���<��Ԇ\�\�m0(\0`~>Y=�a\��q���?��>Z��\��\0�������\�ZO8\�$�\�>[��\�L,\0\0Fs�!7�9�\�\�&.���J\�98\0���ho�\�HP���\'>y�\�\0��߫��7Z\0T�Y�\�\�	�\0ؘK�k\r3�W��\�P\�\��۫�Z��B\0`�U?��m(�\�\��s��V{g4\0po��������\��\�W\��\�a\0`�>]=��j��w\�j>U=�z\�\�\0\�\�r\�L�mn�J�Z��zhV\0�,�\�\�\�9w33\���		\�>_=�z��\0\'��WT��\��\��(\0�\�ꒆ�\�\�\�}\�x-\08Q\�\��F�\�kx\�\�\\̳\0�������\r/zb��w\0\0\'��\�oT\�S���\�</6�\��s�\�T\�=�u`+{{�s\�\�c]p���<�z}����\0[����><���~z߅\�\�\Z\��L\n\0�ⶆ_�oj�M>���\�N�^ذ\�\�\�\�n\0�\�\�\�伹���\"`R[�\0Xjo��\r݁g7�l\�\�A\0��C\�\'\Z��\���[&�h��X\0,wZC��a\�\�\�\�\��\�\0_����/nW-\�?Q\�<a\\ǵ\n�՜T\�Y��\���?�5\�S\�QX�\�=iD\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\00O��`��Vg.\�O]\�\�\�\���?��\�S}��eq�uq\�\�~[\�\�\��\�3�o�Ω��?cʠ\0`�뫫�O/\����@u��A�f�\0\'UO�.ZܞZ\�w҈\0`c�V}��|q�pu��-�U\n�\'V/�~ �\�81]_�������c��\08�zy��\�\'�\0\��w՛�K�ۦ`�`w�#ի�k��\��\�\��Q�\�c\0\�[�R\�D>\0`pu���\�\�c\0Ϫ^W=e�\��v��\�_V1\�ͻ\08�zm��9_\0N$\�^U]9�̫\0�O���WTs�\0�\�U�V���kփϣ\0xp�\�3\�06\0\�4\�^X\�8\�Ag]\0�_]V=j\�\��N��\�y\���,\��ϯ>�\�\0������Y\rxҌ\�yU�\��f4\0p��V\�\���\�lv�\�\�8��\�\�7\0�fo�~��c�l�\08���\�M�\0l\�G�\�n\�\�\�����_I�\00�\Zr��\�9\0�R�x�\�\0��\�Aջ\�{\�F\n��~q\�\0�wAu]�W\�9i�s\0�U��\�I\0�\�pW�m�\�\�)\0]}�:}�A\0�wS�-յk9x��\0Omx\�\0[\�\�\r��Ե��`�a�\�y�\n\0���\Zr�q��Z&�D�\�7\00�}՗���v\��\�\0쭮ix\�\0�=\�X�U\�r��\��7\rO\0��T��+�u�j�3�\�,\0l/�Wg7<#\�^V\�\0��\��\0���4�x\�J_�pnue�{]0\00���󫫖q�e�I��\��~/+u\0�V}p�\�\0\0czz����\�x�8�\0\0#�Wn_\�xR\�|�\0�-��\�\��X\�xɸ�\0\0#9*\�/\�\0쮾P=t\�p\0�1\�P=�:XGw\0�#\�\0NTm\�\�}�\0?8~,\0���\��]K�_jx�0\0pb��zHu\�\����\�DwzC\�?r\�\�b\0FtQ)\0\0`����{�\�-\�)��\0�\�j\�B�\rI�\0�S�R}\�B�o\�H\0�Q\�[�Ν:\n\0`T\�\�\0\0�γo�:{\�(\0�Q��P�6u\0��N[��L\00�=\n\0\0\�y\0\0������\�=u$\0�h.T��\0\���\��\�Q\0\0�:�\0\0��\��Bu\�\�Q\0\0��U\0\0v�\�uSG\0�꺅j�\�Q\0\0�گ\0\0��g�Bu\�\�Q\0\0��jW��\�\�#\0Fs\�B��\�ک#\0Fqm���\�?��2\0`4WT.\0.�0\0`<�W\�Z�\�\�\�\�\0�\�a\���;\0\�WWN\00W6\��#�\0�\�1M,\0�H�\��]K><\'�پ\�\�:�pu��I\�\0\�\�#-&�:�\0��t\�X\0���\�w-��A\���G\0��;��W_>������7�\00wolI�{w\0�N�>\���\0\0`{�J�����\��������\0\�\�խ�\�ߕ:\05\��t��yF\0\�\�\�\�6��?\�J���\r-�:Ǡ\0���\�_��ű:\05L�\�\�yD\0\�\�\'�o���\��U\0K�^5��\0��{U\�H��zి��9�p\0�y{_��\�XK�\�\��f\00WwVO�>�\�A�\�8\�\�\�\�g\00w/\�8ɿ��\n`�OT{\Z*\n\0`k��\�/�\���\�8l������D\0\�\�W\�k��K��\0�\�[}�z\�:\�\0\�\�﫧V�����\0UgUmxs \00�/WT׬礵L\\\�\�E\rO\0�s�!\'�+�\�\�\'.wmuc��\r�\0lޏWo\�ȉ-\0jx��\rշ��N\0�1���ot��\�X\�\�Ü\0\0����\���f�EP\�\��˲:\0\0\�\�\��\�nv�Y�\�iX~�\�3\Z\08\�e\�ӚA�\�\�X\�\�\���S�\�@\0���P�hC���Y\0U�T\�>W}g�{\�\��NrG�\�\�4\�ؙ�up\�\'\Zn<�z䜮\0\'�+\Z\����<�\��7���y\r�\0�\��ۆ�\�\\\���z.\�X��\�ꛪV}~�\��v���U\�\\�{\��\�2��:��\�\�\��|m\0؊nn�\��\�\Z\���b^s\0�\�`��\�X���2Q��鎆\�}/�.o\�w\�\�X\�AՋ��TO�8\0\�G�K�\�y� �.\0�:���zAu�ı\0�,]Y��zsu�ıT[�\0Xꌆw\\����\�\0��\\۰�\��\���ӆso[�\0X\�վ\�\�\���\�\�jOu\�\�~O\�$C\0��;��ۭ��\���\�U���L\�Z�cF2��yv\0\0\0\0IEND�B`�',11,21),(7,'Prueba','Prueba','1','Prueba',3,3,'MX','Prueba','Prueba','Prueba','2018-01-01','Asimilación de tecnología','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0\0\0\0\0\0�x\��\0\0\0sBIT|d�\0\0\0	pHYs\0\0�\0\0�w\���\0\0\0tEXtSoftware\0www.inkscape.org�\�<\Z\0\0CIDATx�\�\�}�gw]\���\�,\�f� d`\�!!H�aHj}\�(2�N����\�ʨ\�vZ�V\nؖڢ6V���\�*PEf!8�			�\�&$d�\�\�\�r�\�\�\�����s\�\�\�k\�\�\�����=��\���}\��{ή��V��s���3�=թ��=\�\�S��pGu`q�uq]�q�jq���\\�]SpgTV-\�=m8\0�.\�VWT�/6�{\�J�9\�\�\���\'�\0f\�\�\�՛��\'����\0xP�\�\�%\�S&�\0\��\�\�\���/O\�T�iտ�~<�\�ؙ\�\�X���y싟4��N�^Y�~ý�\�#_\0��\�\�ӫ�W�TU\�\�cu\0��V�P=b�k�v��\�\�V�]��\�\�(\0�[��:o�k�v�\�\�U\�;\�y�y\0O�\�P=s�\�\0�\�����>>��\�U\0�����ߜ\���\�Ά9�=\�g=	p�z�\�f�\0l\�\�\�\�\�ix�\�=�\Zx���\�\�V\�5\�1��W\�_\�2��fU\0�U]V=nF\�\0���\��k6;\�\�\�c\�\�\�I�\00o�kȹnv�\�\���\�\�)�\r\0X��W?X\�X�\�F\�L�cկ5�.\0�v\�s�\�`�\�9\0V���\00��շ7�rx]6R\0�\�p�\�A8\0��/W�Ή�\�m\�\�m�\�/��\��ܼw=\'��\0XhX\�o�?\0l-�k\�\�k\�\�\����G�\0[\�cV\�g-��\0xiC\0\0l]O�>W}\�x�e\���\�\�>\0�\�\�P����\�+xC�?\0l�k\�ݫ:^�\�\�3	\0\�3r�1�v`��\�\�YF\0�\�\�7U�V�r��K��`�:�UV\��pr�\�\��\0\�\��ޱ��cu\0~2\�\0��G4\��{Y�pZ�\�\��\0\�W�\�T7/�p��b\�\��\0�\�\�\�|\��w\0T}a�`\0\�\�pG���7V���\�$\08ќܐ\�X^\0�d�X\0��\�\�8�\�?n,\0���UW\�\�����\0ɑ\\��\0x��\0\0\�9�\�\�8��\�4�\0\0#zXu�\��u�\0�3\\X_�pф�\0\0㹨�^\0\�\0\0�\�pa\rs\0ز\�\0\'�\�\Z\�\0;Ǿ�\�ܩ�\0\0Fu�\0\0\�<�\0\0��\�[�Μ:\n\0`Tg.T{��\0՞�\�ԩ�\0\0Fu�\0\0\�<{\0\0��\�Y�vO\00�\�Ձ��\0\0Fu�\0\0v�[\0\0��P\0\0�\�s`!���\�\�\�3SG\0�\�3\����\0\0F���j\�(\0�Q]�\0\0;\��]\�BuKu\�\��\0\0�w[�w�:T�\�`\0�q��:���\�\�SF\0�\��\Z\��G�\0\0Nx�W\�Z�cW��\��\�\�\0\�\��\�!\�=�;\0�T\�.\0`\�i\��GnT�e�X\0��\����|���B�\�\�\�\0\�\�\�\�\��:�p��\�)\"\0\�\�w[L�utPu鸱\0\0#9*\�//\0>^}`�X\0�|�!\��k���V}p�p\0�1<��\�\��w\0Z<\�G	\0��?lY�;\0U\�VWV\'\�3\"\0`�\�ί�Z�\�J���yF\0\�\�o�B�cw\0�ά>S=`\0su{uvu\�J_�\�\�	o�GD\0�ܽ�c$�Z�P����z�,#\0\�\�\�\�\�cp�I~w.n\�9à\0����\�}�p�@\r�	\�Q=o\0suY��\�\�j��\0�:�a\r\�y�\n\0��O6<\�\�\�\��\��\�\�\�Ǫ\�7\00?7U\�R]���W[�ܵ\���6\00?w5\�\�5%�Z������>�\0`+yE������G��Uò�6p.\00[o���zOZ\���vW\���\�\06\�\��\�\\\�-\0�N��$�\0\0�\�G�\�n\�\�\�\��\�\�ճ��lb\0`�~�!o(�\�\�_�{�a\���Յm��\0\0�\�P��\�\�@\��Y&\�\�7t�\�pL\0`pK�ջf1ج��\��\�G\�x\\\0\�ɮi����Y\r��9\0+��\�)D���\0\0X�+\Z&\�\�,�\�\�\�\0�\���[�UOμ\0\0؈��_�^Z\�6\��g\�8\�\�\'�\'4�{\0���Q��\�+\�\�d�c\�\����\�UO\�z\0�}��\�\��м:\0\��E�\�\�E\�\�#]\0���\r/�yz#$��\���\�\�G�WWgLp}\0\�*�X�|��ͩ\�,SN\�;�zy����\0�S�]��\�\�0�o-�\��\'V/ix���\0\0\'�뫷V�V3q,[�\08줆�-nO�\�;iD\0�1_�>\\]��}�aiߖ�\�\n�\�P=��\�\�걋{]\0��\�&�zq�\�\r��n�2�\�l�\�X�Vg.\�O]\�\�\�\���?��\�S}�\���T�.\�[\�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0��e\�\�l\�I՞%\�\�m��\0[\�=\�Ձ%\�ݓF�	\�!Y�V=�\�W���\�W�Y\�¸\0\�\�u\��\�\��\��\'��\'�븶b���\�\�\�\�\�\r\�a҈\0`}5ﭮ�\�_\�2iD\�l�\��\�\�\�\rI��i\������xs�\�mӆ3}pa��\�{\Z�\0\08\�\�V��zSCw`S\0O�^_=c�\��V��\�g��}\�ﭟ\�P�|0\�\0�ѐ\�ސ#G3VpfuIue�\�#]\0��\�nȑ�4\�̹��-��\r����0\�k��\��\�\r\r�\�\�r`��U��<\�k\0��\�\�\�U\�o\�c�y,�\�]�j��\�\0��\��\�ê?mx��\�̺pz�����\0�l��zQuӬ�e��ꏪ�f8&\00���#�Y6�U\0\�iX\�(��|�Րk�3��f1\�g\Z&(�<��\0�c�_�↗}p3m\��}�߬^��\0\0�\r���\�ꮍ�����6,�\0\���\�!ջ6r�F�WT�\�\�\0�l<��R������[\0Ϯ��a�?\00��\�?iX*�f\�-\0S}�a�?\0�5\�T]P}v�\'�g\�\r\��%\0\�ZNo\�ѧ����\0\�[��6\00\�5\�\�5\���N|Mf��V��\�Y�\���\�xnu\�f#\0F�ꝫp�`wueCE\0l���V�\�x�	~(\�\0��}\�\��j�S�\�4��\0\�^�X�]ݶҗ�u\0^�\�\0\�\�\�\Zr���\�xH\�{�׼�\0\�rnmx��q�e����u�\0sw�\��ջ��R\�\�\�S\r��\0����\�7\�\�;b�9\0��\�\0\'��4\���,\�\0<�\�\��F\�\0lM�4\����\�;\0\'���fWC�?ꃥ��;Z8\0�X>]�s�����&���\�\r��:�\0��\�\�\0\'�#�~\�-�\�U�=\0`,�P=��\�xL�?\0�\�ِ�\0M\00��J\0\0;\�E��9\0\�W�.\0`$7Tg\�jx]\�u\0�\�̅j\�\�Q\0\0�ڷP�;u\0��\�\�\0��g�\0\0v�}Ճ��\0Ճ�=SG\0�j�\0\0v\0\0\�@{vUwV��:\0`4_[8�1\0��f�:0u\0��(\0\0`\�Q\0\0��\0\0�\��Bu\�\�Q\0\0��q�\�?u\0���+\0\0`\�ٿP]5u\0���\�U=��n\�H\0�ќ�k�\�W�2\0`7Tg~�{��\0\�{kxp\�\�\0�\��R\0\0�Nsyծ%|�z\�$�\0\0c��\�Q��@ջ&	\0ˑ\\��\0x��\0\0\�9�\�w-�\�\�\�\�\�\0�\�\�\�9��XX�\�\�\00��r�����kV�\0ؾ\�Ϊ�=�����\�\�ƌ\0����$�\�ʿ�Ϯ>U\�g��\0����z|���.\�\0�x�%cD\0\�\�%-K�u\�{�i�p\�<#\0\�\�ֆ{�_Z�\�I\�8\��jw�\�9\0\�\�/U\�^\�\�f��\�\�2x\�<\"\0\�\�\r��n[\�\�cu\0j�4p�z\��\0\�맫\�\�\��\�]]Y\�eD\0�\\\��ί뀕V,u���\0\0���n�\�_�\�8\�\�\�\�\���\0��\�V�~��\��\�߅\�\��6\00W�U/�\���<��Ԇ\�\�m0(\0`~>Y=�a\��q���?��>Z��\��\0�������\�ZO8\�$�\�>[��\�L,\0\0Fs�!7�9�\�\�&.���J\�98\0���ho�\�HP���\'>y�\�\0��߫��7Z\0T�Y�\�\�	�\0ؘK�k\r3�W��\�P\�\��۫�Z��B\0`�U?��m(�\�\��s��V{g4\0po��������\��\�W\��\�a\0`�>]=��j��w\�j>U=�z\�\�\0\�\�r\�L�mn�J�Z��zhV\0�,�\�\�\�9w33\���		\�>_=�z��\0\'��WT��\��\��(\0�\�ꒆ�\�\�\�}\�x-\08Q\�\��F�\�kx\�\�\\̳\0�������\r/zb��w\0\0\'��\�oT\�S���\�</6�\��s�\�T\�=�u`+{{�s\�\�c]p���<�z}����\0[����><���~z߅\�\�\Z\��L\n\0�ⶆ_�oj�M>���\�N�^ذ\�\�\�\�n\0�\�\�\�伹���\"`R[�\0Xjo��\r݁g7�l\�\�A\0��C\�\'\Z��\���[&�h��X\0,wZC��a\�\�\�\�\��\�\0_����/nW-\�?Q\�<a\\ǵ\n�՜T\�Y��\���?�5\�S\�QX�\�=iD\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\00O��`��Vg.\�O]\�\�\�\���?��\�S}��eq�uq\�\�~[\�\�\��\�3�o�Ω��?cʠ\0`�뫫�O/\����@u��A�f�\0\'UO�.ZܞZ\�w҈\0`c�V}��|q�pu��-�U\n�\'V/�~ �\�81]_�������c��\08�zy��\�\'�\0\��w՛�K�ۦ`�`w�#ի�k��\��\�\��Q�\�c\0\�[�R\�D>\0`pu���\�\�c\0Ϫ^W=e�\��v��\�_V1\�ͻ\08�zm��9_\0N$\�^U]9�̫\0�O���WTs�\0�\�U�V���kփϣ\0xp�\�3\�06\0\�4\�^X\�8\�Ag]\0�_]V=j\�\��N��\�y\���,\��ϯ>�\�\0������Y\rxҌ\�yU�\��f4\0p��V\�\���\�lv�\�\�8��\�\�7\0�fo�~��c�l�\08���\�M�\0l\�G�\�n\�\�\�����_I�\00�\Zr��\�9\0�R�x�\�\0��\�Aջ\�{\�F\n��~q\�\0�wAu]�W\�9i�s\0�U��\�I\0�\�pW�m�\�\�)\0]}�:}�A\0�wS�-յk9x��\0Omx\�\0[\�\�\r��Ե��`�a�\�y�\n\0���\Zr�q��Z&�D�\�7\00�}՗���v\��\�\0쭮ix\�\0�=\�X�U\�r��\��7\rO\0��T��+�u�j�3�\�,\0l/�Wg7<#\�^V\�\0��\��\0���4�x\�J_�pnue�{]0\00���󫫖q�e�I��\��~/+u\0�V}p�\�\0\0czz����\�x�8�\0\0#�Wn_\�xR\�|�\0�-��\�\��X\�xɸ�\0\0#9*\�/\�\0쮾P=t\�p\0�1\�P=�:XGw\0�#\�\0NTm\�\�}�\0?8~,\0���\��]K�_jx�0\0pb��zHu\�\����\�DwzC\�?r\�\�b\0FtQ)\0\0`����{�\�-\�)��\0�\�j\�B�\rI�\0�S�R}\�B�o\�H\0�Q\�[�Ν:\n\0`T\�\�\0\0�γo�:{\�(\0�Q��P�6u\0��N[��L\00�=\n\0\0\�y\0\0������\�=u$\0�h.T��\0\���\��\�Q\0\0�:�\0\0��\��Bu\�\�Q\0\0��U\0\0v�\�uSG\0�꺅j�\�Q\0\0�گ\0\0��g�Bu\�\�Q\0\0��jW��\�\�#\0Fs\�B��\�ک#\0Fqm���\�?��2\0`4WT.\0.�0\0`<�W\�Z�\�\�\�\�\0�\�a\���;\0\�WWN\00W6\��#�\0�\�1M,\0�H�\��]K><\'�پ\�\�:�pu��I\�\0\�\�#-&�:�\0��t\�X\0���\�w-��A\���G\0��;��W_>������7�\00wolI�{w\0�N�>\���\0\0`{�J�����\��������\0\�\�խ�\�ߕ:\05\��t��yF\0\�\�\�\�6��?\�J���\r-�:Ǡ\0���\�_��ű:\05L�\�\�yD\0\�\�\'�o���\��U\0K�^5��\0��{U\�H��zి��9�p\0�y{_��\�XK�\�\��f\00WwVO�>�\�A�\�8\�\�\�\�g\00w/\�8ɿ��\n`�OT{\Z*\n\0`k��\�/�\���\�8l������D\0\�\�W\�k��K��\0�\�[}�z\�:\�\0\�\�﫧V�����\0UgUmxs \00�/WT׬礵L\\\�\�E\rO\0�s�!\'�+�\�\�\'.wmuc��\r�\0lޏWo\�ȉ-\0jx��\rշ��N\0�1���ot��\�X\�\�Ü\0\0����\���f�EP\�\��˲:\0\0\�\�\��\�nv�Y�\�iX~�\�3\Z\08\�e\�ӚA�\�\�X\�\�\���S�\�@\0���P�hC���Y\0U�T\�>W}g�{\�\��NrG�\�\�4\�ؙ�up\�\'\Zn<�z䜮\0\'�+\Z\����<�\��7���y\r�\0�\��ۆ�\�\\\���z.\�X��\�ꛪV}~�\��v���U\�\\�{\��\�2��:��\�\�\��|m\0؊nn�\��\�\Z\���b^s\0�\�`��\�X���2Q��鎆\�}/�.o\�w\�\�X\�AՋ��TO�8\0\�G�K�\�y� �.\0�:���zAu�ı\0�,]Y��zsu�ıT[�\0Xꌆw\\����\�\0��\\۰�\��\���ӆso[�\0X\�վ\�\�\���\�\�jOu\�\�~O\�$C\0��;��ۭ��\���\�U���L\�Z�cF2��yv\0\0\0\0IEND�B`�',28,21);
/*!40000 ALTER TABLE `produccion_articulodifucion` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `produccion_articulorevista_AFTER_INSERT` BEFORE INSERT ON `produccion_articulodifucion` FOR EACH ROW BEGIN
	
    
	INSERT INTO `mgps`.`produccionalumnos`(`NO_Publicacion`,`IdActividades`, CODIGO_ES,`Titulo`,`TipoDeProduccion`,`Probatorio`)VALUES(0,
   new.IdActividades, (Select ID_Est from actividades where idActividades= new.IdActividades), new.Titulo, 'Artículo de difusión y divulgación', new.Probatorio);
	
   set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=new.Titulo);
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

-- Dump completed on 2018-01-24  0:01:15
