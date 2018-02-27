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
-- Table structure for table `reporte_asesorias`
--

DROP TABLE IF EXISTS `reporte_asesorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_asesorias` (
  `idReporte_Asesorias` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `Calendario_Escolar` varchar(45) DEFAULT NULL,
  `Nombre_Es` varchar(255) DEFAULT NULL,
  `Codigo_Es` char(9) DEFAULT NULL,
  `Titulo_de_Tesis` longtext,
  `Activiadades_realiadas` longtext,
  `Tareas` longtext,
  `Observaciones` longtext,
  `SiguienteAsesoria` date DEFAULT NULL,
  `Id_act` int(10) unsigned NOT NULL,
  `Probatorio` longblob,
  PRIMARY KEY (`idReporte_Asesorias`),
  KEY `Reporte_Asesorias_idfk1_idx` (`Id_act`),
  CONSTRAINT `Reporte_Asesorias_idfk1` FOREIGN KEY (`Id_act`) REFERENCES `actividades` (`idActividades`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_asesorias`
--

LOCK TABLES `reporte_asesorias` WRITE;
/*!40000 ALTER TABLE `reporte_asesorias` DISABLE KEYS */;
INSERT INTO `reporte_asesorias` VALUES (1,'2018-01-01','2018','Alejandro Palacio Alvarez','Prueba001','BB','Prueba','Prueba','Prueba','2018-01-01',22,'PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/header1.xml��\�r\�0ǟ�\�\�ѝ\�\�\�t<19����О;�$l}\�J6\��}�J�\"@&\�Ph�\�o?����%���Fd~���kj�\�eA~�x�}!��H�yAܑ�ŧ�}^1L��v�����y�:Zq\�\�X���5���-��\�\�vF��\�\�FH\�\�m�}&=\��F�����3[]r�\�\n\��e��)q;����\�ڷS\�2\�`���uM]Kb5@���h�\�\�\�hanB\�.\�\� �h(w.X��8\�لF\�\�1%�ӘC&\n�1q.\�@c\��oZ�:r셓S\�\'�A�\�epE?_�[1i�\��\�\�8\�5Z� �!HCw�}\��8̬�4\�g$&�DP\�!u�\�yv6.\�\n,?\�\���}GS[�o�M�yx�\�sA��CzӒ\�K\�\�\���\�[��CY\�+cn�\���\�éB�u��\�KNҨQ�=�5ȵ\Z��e��+k:�6\�\�⋸�\���\�/��\�O0\�4�����\�Jͫ���\�,؈p\�4;𽶼Ѿ\�\�K�<))\�7w�쐤E\�86�,Vt\�x\�xY�`�\�F\�v����GG�\�@]g\�\���PK\�\�\��\Z\0\0�\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/numbering.xml\�YYn\�0=A\�`�\�\�\�%�9�hQ���h�aH\�q�Џ���=[OJ�\�%H*�\���Y\�\�\��\0�\��A�΂�fJF(8�Q�J�b&\��rw\���6XƘ+I#��\Z]N\�\\,\�2S\n6�c!��Ęt\�y�$T`}�R*�s�@`c�0���,\�%RlؔqfV^\��C��Q\�@�\�]�(�f&O�ٌ�>�hR�L�Q$T����\��\�	Ku�&�E�ΤY�4\�B�*n�6�^\�w�,�T��\�\�ZoJg��\r0��3���[�\�D`&k��{@u\�3[{�h\�f�\�[hޤ�\���M\�\�i���\�\�OY#\�!\�,�AM\�c H��T\0��\�=���\\\��\�����b�\�ņ���o6��\��9�)ݠ\��\�-�,E���T�\�|\�Dg\��.���\�n]\���]f`�m�y\�M\�Uv+j\�4㜚\�c\�\�C\����{mO*+��ux�	�\�\��rs�\�C�R�\�\�y�S{C?��\�`(��B�vϮ#\n�WT\�&x�a�:L\�\�2M�\n\���u\�4a0le�\�I��F�L\�?	\�l�L38	\���v���$L�\�l��0mp\�\���i\��kmoGR����\�[��No�\�:�uz\���u�\��gz�J\Z�ϡ	c��y�I�օbm�4\�[�\�J\�:�\�(��jnX|J��ZYà�\\\�}�S~��N���;\�w\���*�,_n���#�;czE䓴������\��i�\�4o\��\�#PK&�Jj�\0\0G\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/settings.xml�Uێ�0����{\�e�i��\�CWm�O\�~�`�\�l\�\�\���T\��	���s�a4<=�<ꨱL\��\�ETbE���\�\�\�\���I�+It�=>=���\��(yis�\�8��8���\�Vi*=Y)#����c\�\�\�\rVB�c%\�̝\�,I�h�Qj�\�\'��`\�(�*7�䪪�\�#d�5�cʋ­�\�]cC��AI\�0m���W͓M\����\�!�\�k܈�\�7Z�ѨW�h�0�֣/#9+�Ɋsƚ�=C%��e�\����\�{j\�Ejy����)d�~�Ҁ9�\�\�\��|\�VM�\�r���	܀qA�ߣ�>Q�d�0�z\�8\�(�����/�&7\�rl@\�E��?�\�F�\Z�\"����7(�N\�\�;�3�9KP<\�\�YN\�q_��t��Q��s{��^�\�\Z��\��2��\�\�8$\�W\�z�-\�@�ՍK}\�oį\�˥���\�.\\6r�`췌���\�]\�C�l�݂=\�q��\�Xs\�\�p&O�\r\�8\��\�\\���X�\�ԏ��8�PK��\��\0\0h\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/fontTable.xml��MN\�0�O�\"\�ۤ,��V�\n6\�L\'�j{���\�\�\�6P$\�ʊ\'\�{\��\�\���F��h2�Z&,�c.M�����\�=����B#2v�m77\�6-\�x�q�\����i;^	\rn�V�P,�4��Ie���]p\��\�K%�1�M�;\�c0c5��G,�\���X��~4Ƿ�\�\�Zv�I�\�\ZWI\�����\�\0i~;D�\��_k\�\�m��:�)��\\8vw]q$��<!FŜ�{�h�fĜ�q\Z����\�5d��Ss\Z\�J/rO@ǟ]�����rV�/A\�k\Zy\r�W@~\0�k\n�A\�`\ZÜ��\�|A\�%�z\n��\�ͮ����V`\�D+�G{&�-\���OԦt�\�IP,ެ\��Y\�|PKi1`\�j\0\0\�\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/styles.xml\�W\�n�0}��C\��B\�,��N]�}HU7�\�܀	^�m\�&,{�\�`���䥕\�%?��\�\\|||1\�\��*\�h��Č.��y�MX�\�z�x�x6FRM�0���\�\��\�w\�B�-Ar��\\\�2ȕ\�0�I�\n�\�#��(=\�\0�X�^a�\�6��hX�JA\���`�eʤ,X�\�ً\�>u�������\nD�30*s̥C+NE\�\�܁l�6�MA\\\\\�}��*�i\nUL�\\�I��7��EG\Z�6\�\�k�\')\0\�\�H�\�\�>׵-i5\�n\";.$�y�\�u�W\���)\�>��9�RqAg�R��<\"\�A(@NA ,yD\�5\�\r�bN\�^r\� �\���H\�?�\�8\�\�\�>�vh맡}�\���n?)KnP%Q\�\�7a�vT_>2�\�Z�L0^W��\\�H\�\�\0�TWÞ)����\r\�J[7�U\Z5c\�\��.�v%�#\�F�hm�\�F�v\�8v�kٵ�\�@uK�ay��&\�\n�b�I\�\�\�.��^S\�[�D;t\�<�\�k[h����\�\�\\\�w\�\�\�՘ou�.1NYu�\�G0\�\\\�\�\�?�5�b\\{$��4s�\�\�4\�\�vqʔ_\�)\�\n�X�׹/,RB\�\'8\�\�\�g\��2��\\!��]��Zogn�$\�\"6Z���!\�f\�3��R\�\��:�\�\�X�o�\�\�\�\����ʾ4£]Z�t�\�r]��0��\�5Y\��%]w�7ջ0m2�.L2��\�H�	jjש\��\nV@?�~9��\�?�\�\�\�8o#+u�ӯ\�\�\�Y{{i\�>�\�\�\�m<��q|��i�\�\'l+ڦ�\�Q\�\�G5��\�q\nm� m�+�m2��\�\�8\�i��\�4Ni��4��C\�SY<x�N\'\��&���I\�\�@\�t�\�\�\�7��\�{@\��\�9\��s�t^\�y�\�\�>\'��\�\'\�9�s��҉;�/B\�V�Tqt^��/\�\��l\��>�\�!\�\�Idݗ+\�\�W\�xa\�&�I�=\�e�C\�Cԓ�s\�d\�\�\�\�\�\�PK3�_̷\0\0\�\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/document.xml\�kr7�O�w@\�o�CR�\�L�6�7\�*\'���hM1�\02�m�3?�#�#\�b\��<(ҏ�d:�\�`�4<\Z��\Z@πO���Pl�\�I�g\�x8\�jn�\�\�Y�\�7�<ɘ�(�q�m\�e\�^�\�\�f*�\nԞ�\���e+\�\�i�;�\�\�Д�)ral�n\�2/���\�7E	^Υ�~�OF���cfYe��1($�ƙ�Y�f���K�\��)�\�r\�T9��[TT�\�J���V\�U\ZE�Z!\�O5b]�6ݦ\�S����\�(T]\�\�XQZ\�\�9\n��#;�\�Q�\"�}��_f[��\�\�\�8ԕ=���N��v\r\���S}*RG��sv�~-\��y3){i�\�\�+\�)\�]D�X\�\nPw���\�\�5t\�,��\��@����P\�\�\�jdǣuy��wҖ�\'\�{k�2� 47b�%\�L\�~�W�l\�|�&\�\���W\���\�T\� \�\�\��\�]\�x�Nī7�|n���Pyr�8���w͗5Pe4Y\�,�x�\�$���؅T���.5W6$�ER�)��\�$JU2�wr~>�N�<>o���q�*�MŢn�\�_|\�u\'1�5�\�mݼؠ6\�,~�z�kC\'\�6\�\�\�1y\�[�S�{�ۏQ/�\�\�^{�Np�\�ځ+-:�k\�.�+v�@3�\�5.++檒��)�k��\�07L\�\��\'�rM\�\�y����\�t�s�\�!��\�I�\r\�h�h�V\Zu����P�\�\�\�\�ю\�H�$�\�Z.)?����,B�\�\�A�b+]\�CaTEJB���\�hԯ�ԏ(L\�5�,*MȫGAPj\�\�&d�\�\�0\�\�\�\\\�0���{�\�\�_\�\���+c#5p\�Dl\���<b�m:�+\�Z�=\0Piʅ�$\�30\'�\�\��ט!�����\�\'Tՠ\�\\\�\�Q�K\Z0n˄�Ƚ����D[HߐK�!\����Q�h�\�:��D��\\��ѕZr\��\�\�%a���m#0N\��S ��T�%	*��`�<Wr�R�\�ۈ͊T����$�Jp�\�\�نE\�Zd+ \�B��D]�y��(\�`�5z��\�G캏�\�>\�����\��@C�KRbw��\�l��g�65#���)\�Zd��b/}~#\�gM�\�\�:�Tuʹ�\��\�\�F]��E�A2\�=\��̑�u[\�m��ԡ\�\�o�켖�ۈ[�^F�\�\�\�\�/�W3�?�6 =�E\�L�X�{j\�nm\�.�\�\�?�~)\��w�\�\�Ci\�!���іAi͜�}|���+�GK�dܓqO\�����ԠhMj���vo�h*\�\�5�w\�\Z\��U6��6m\\UDb�\�f�c�\�k\\��\r\�\�6Z���nٞU�p����s\�~�̣F،\�=#5	y\�l���\\�,\�!2j�0�VO	0Pt@U\�=X*��aX�B\�DH]sj\��{��H\�%\�>A\��ʎan�\�\�8F��Fp5D5O[�YH-m\�t^\�\�\�\�qi\��\�u�f�\�\"�\�M\��\�\'G^>H��\�\�}�N\'\�T��\�\�\�/*��\�\�y�\�<@:�T<���T�g\�za�3IǓ�?H�����\����i!��\��U\�\�r��v�l�\�77�L#G�\�g�l\�\�rrY\�����Ҿvt��\�=6>�\�C��\\\�O\�$��\�\�������\�-��wN\�$r9��R��ڽ.\�<�I\0%�@�V���C��\�7\�DF	��Q/�ޘ�yBa*.Mx��6HiFJ(%��>*�\�\�#o\�gP\�a�hJ4%��=��Z@����Ux9%8\�1��t\�\�!���ږh��o��J1\�\�q�}9�?\��訆\�\�ꮊ\�	\�l6òX���0�d4>\�Ǔ\\:3���F\��A�S�<?��\�Уvbz�+���+�\�54V\�xh����\���0���#p \�e`xz\�ֆ_F�f��=\�\��.�o,�@�\n\�n�;��$\�I�g���nU�|Z�\"�Ϟ���T�@�7�o\�?@hN}:��NOc�IIv7�\"��kN���u��\�(�?V\��IP$\�\�N��\�\�\�_L\�w�\�t�?PK�F��[\0\0\0J\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/_rels/document.xml.rels��Mn\�0�O\�;D\�;N(Tش�XtS\�{�X8v\�q��}\�\0$�Z)\�rƚ��7�f:\�U:ڀCeMF\�8!a�2EF>�otB\"�\�H����\�\�|�0�\0\�}��R\��)���CQB\�1�5��[WqJW���5/�\r�d\�ܥ�]iF���)���\Z~�m�\\	x�����̇Y�\�\�3Җ�f\Z1\�n3�d@�>,\��\�=�\�>rk����\�*�\�=�a���V\�B\�3D׺�\�\�g���˯h\�{��>\�ˠ\�2\�3�Qv�\�\�uUPD[�\�t\�\�Sh\�`�$)Mk\�\r�@�\�)\�%;\�[_w�\�?f�C<�i�j�L�ܨ&d\�w�]\0�\��U	Ns.����?\����w���{��\�\�PKɿ�bi\0\0P\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0_rels/.rels�\�;\�0\�p�\�;Mˀj\�!uE\�\0Q\�\�CIx��d`\0\��h��g�\�v&7�\�xǠ�j \�W\�i\�\�\�IY8%f\���	:�jO8�\\v\�dB\"q���s\�S�\�V�\�te2�hE.e\�4y\Z馮�4��?L\�+�W\r�a	��\�\�\�H<xy�\��_�\"��13����z��\�\�-�x�?PK-h\�\"�\0\0\0*\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/theme/theme1.xml\�YKo\�6�\�w toe\�V\�u�رۭM$n�i��\�P�@\�I|\�\�úa�\�m�a[�إ�4\�:lЯ���)�ΣM��6I��\�I��È�}\"$\�q\�r.\�,Db��4\�\�\�A�B\�BR\�\�ǌǤmM������e��B��\\\�m+T*Y�m\��2�yBbx6\�\"\�\n�\"�}��o\�\�z��bG�\��qlo�F\�#h���֧\�{�b%\���]/��SdX\�I\�Dv�@���-�\��9TbX*xжj\�ǲ\�/\�%SKh5�~�)\�\n��щ`X:�\�\�͒=翈\��zݞS�\�\0\���Rg\�췜Δ�ʇ���5�֬\�5���j�\�qW+�\�\�\\��j+͍zߜ\�\�E�;\�\�J\�\��+���Օf��BF\�t\Z\�22%d\�\�5#��\�4f([ˮ�>V\�r-\���\� .V4Fj���\0\�ŌM\�5��\'��\'�RYHz�&�m}�`��\�\�_>{��\�?=��\�уG�6P]\�q�S�����}��z�݋�_��R\���\�g�����t\�������o>�����C>��\�&9@;<\�\�P��bb�Slā\�1Ni\�\n+\�̰\�!U\�\�L��\�{�wC1V\�\0�F\�\�ÅѦ\�,\�\�80c���Ivw.��q�LM,�!���\� \�8 1Q(}\��1�ݥ�\�\�-\�	.�H��u05�d@�\�Lt�F��IA�w\�7[wP�3�M�_EBU`fbIXōW�X\�Ȩ1�����UhRrw\"��å�H�q\��&�[bRQ�:�sط\�$�\"��{&\�\r̹�\�\�{\�G�Qg\Z�:�#�)�\�6WF%x�B\�9\�\�K\�}�u�ھM�М 铱0�\�\�z��&q\�\�+�:��q�;���ϻqC�|�\���Q\�\�\0\'�jf�Q/\�ͷ\�.>}���&\�\�\n\�}s~ߜ\�\�漬�Ͽ%Ϻ���36\�\�S��2��&�ܐY��`�߇\�l����$�a!��\�\�Hp�	U\�n�\�dY�$J������wv?�`s�\�N/��\�j���rC�l�l�Y uA���i�5.��0\'�R�㚥�\�J�5oB\� ��JpV\�hH̈��=g0\r\��S\�bb��5��\��{&%\�\�ɵ\'ۋ\�\�\�\���U�\�Z\�\�I\�\Z�i	�Q�d\�i0\�\�\���kq\�\�UsV95w����j\�0�\�M_�\�3�\�n3�\��`h&�Ӣ\�r�C-\��Вшxj\�\�lZ<\�cE\�n\��!�z7�\��N_�N\�v�H�j\��1�ʦ�̒\�\�\�b�óq�C6\�Գ�\����4\�\��\�5%\�\\8�6�\�\����(\�ѶŅ\n9t�$�^_���\���E�b\�\�TW�?\�[9��\��ڡ:�\n!۪��fN]\����>S�+��wH�	�ջ�\�o�p\�M\nGd���٦\�\Z���\�\�|��g&�y�ͯ�5}m+X}=N�k\�\�f�\�\�ҝg~�M\���\�/h\�Txlv<��>*�y�x�U�_�8�[�q)�\�\�Z\��<;j\�n,q��\�^\�ٮ�\�\��K\�\�\�!\�l\�(>��7\�z3f��L`��Ef���b\�d\�rGL[:�w\�Q�p\Z\�9������N. ��$l�LX\�g�HI\\?����\��J\�\�gb�f�s|\�E��b�\�\�ʛ]f\�\�Ӻ\��z��\�\�]Vx\�6%9Tw�]A�ڳ�]�PK!Z��,\0\0\�\0\0PK\0\0\�OL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0[Content_Types].xml��MN\�0�O�\"oQ\�B�i�,�E9�Ԟ4��=-\�\�$%�*H ��e\�ͼ�y�x�>:[0e|%\�\\\�U\�\�\�*�y�݉\"x\r6x�\�	�X����S\�\\p�ϕh�⽔Y5\� �!�g�\��1\�d�;�7���T�z�Q\�!V\�G�ao�x迷֕��Q@\�%\�LOG{\��,\�w��fv)ڮ&7&\�\�\�\0Vs��ʓIF\�\"B]�:��\��3$SP�3\�\�2#\�Ωo�\�\�ʶR~�\���\� \�\�\�O\0�6i|\�^\�Z\'\�I!�\�m1�~b�\'�Ə�%�\�A���0�N\�\�ŤWo4�q�^�e�ڬ�\0PK��ȏ7\0\0�\0\0PK\0\0\0\�OL\�\�\��\Z\0\0�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0word/header1.xmlPK\0\0\0\�OL&�Jj�\0\0G\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0X\0\0word/numbering.xmlPK\0\0\0\�OL��\��\0\0h\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0K\0\0word/settings.xmlPK\0\0\0\�OLi1`\�j\0\0\�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0�\0\0word/fontTable.xmlPK\0\0\0\�OL3�_̷\0\0\�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0*	\0\0word/styles.xmlPK\0\0\0\�OL�F��[\0\0\0J\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\r\0\0word/document.xmlPK\0\0\0\�OLɿ�bi\0\0P\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0�\0\0word/_rels/document.xml.relsPK\0\0\0\�OL-h\�\"�\0\0\0*\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0k\0\0_rels/.relsPK\0\0\0\�OL!Z��,\0\0\�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0U\0\0word/theme/theme1.xmlPK\0\0\0\�OL��ȏ7\0\0�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\�\0\0[Content_Types].xmlPK\0\0\0\0\n\0\n\0�\0\0<\0\0\0\0');
/*!40000 ALTER TABLE `reporte_asesorias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 11:58:00
