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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='Producción de los articulos de revistas por parte de los estudiantes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion_articulodifucion`
--

LOCK TABLES `produccion_articulodifucion` WRITE;
/*!40000 ALTER TABLE `produccion_articulodifucion` DISABLE KEYS */;
INSERT INTO `produccion_articulodifucion` VALUES (11,'PRUEBA','Preuba de edicion del articulo','1','PREUBA',1,1,'MX','PRUEBA','PRUEBA','OPRUEBA','2018-01-01','Asimilación de tecnología','%PDF-1.2\r\n1 0 obj\r\n<<\r\n/Type /Catalog\r\n/Pages 2 0 R\r\n>>\r\nendobj\r\n2 0 obj\r\n<<\r\n/Type /Pages\r\n/Count 1\r\n/Kids [3 0 R]\r\n>>\r\nendobj\r\n3 0 obj\r\n<<\r\n/Type /Page\r\n/Parent 2 0 R\r\n/MediaBox [0 0 345 345]\r\n/Annots 4 0 R\r\n/Resources 5 0 R\r\n/Contents 6 0 R\r\n/PieceInfo <<\r\n/Illustrator7.0 <<\r\n/LastModified (D:20060224142058+00\'00\')\r\n>>\r\n>>\r\n>>\r\nendobj\r\n5 0 obj\r\n<<\r\n/ProcSet [/PDF]\r\n>>\r\nendobj\r\n6 0 obj\r\n<<\r\n/Length 5524\r\n/Filter [/ASCII85Decode /FlateDecode]\r\n>>\r\nstream\r\nGhT9hh5Y$FElXe[^VdcZ!a2Y/dK^UrGfH-Z`t31qL6.>=ELSfA`ub-jPLl0LSps<X<GAR`RUHJ6L@1\\1\r\n;H9\\g.b36rGDC\\GrJ-l+5CI\\OinN5\"Isq?H++CqRp=\\ih^OQ1Sn_sHXs74X\"hu32.[s.lBnX#=:%Ii]0\r\n^O<W*qmW1^r9qZ:^WYNKr9iUKn*RmfpuAP\"^:Smprp^BqqT\"Z#YP;?%GFsA6s5K)h\\:+2G+.b%VVr.LE\r\nrg1B<WUVoMBrl*9nm^TCqqM8PT5(sP]KX^Cia+qMr-88%s,5-k-EI5`o#&`(:_/m[]DFqjBKjH5lUFN-\r\n6Df/)25Pr2%q$t1--$(Qe!Qos\"g]`$*$*_&QTqH;_rf[?D.q/!U6-:_BP,heN7V)^Fei39\'!HJnh#?L1\r\nrU&F5IfAT@5Ms66\\BmIO\'r4r_%]I6#I6(9*e30\\YjWikPpBT/p@*Q0[Vh;WTK;PERqLlGKltVTZ3]pOA\r\nJ&8spE\"M@rWMe5q6Li-n46no7MNC&CMWma(Ds=(S<JRDW`pO&\'cg$e5-!uBNeN4@AYVS^]-n]\\3j$D2Z\r\nVT=qi\"uY[OF\\qbrOY_.7_r1sNPL[k<+LoD;a%!3*<5KT]*?g)XU)q/)C:nak7K@db\"B`jKbtt$k6bU\")\r\n\\`UA`bgOkf*E\\7YL:\'t@,NlL4UM#.+iM+#Z7XLu5IEd2BE-TuXm7Tk<DAMp<dh+4dV^&c%0kRLs):m(^\r\nUcEd\"X!\\pmIYtS/L\'tusY,/iJ*R8r`rK)%<g/B-;?A@h^A02-4\'8]/CL@5^hX\\@Kka_[#dQk[!Q>nVXc\r\n7,Ggu\'qUCuTM55RYc0W.%aT-:e[ZL$aP&!\'KKc!IrCRBdf*M%k8r8-UXD[[8d;8uOKK#h=.U?nf\"B`iO\r\npk,ulHV13/Wc4@\"qab=58sGQ:AlHQCUM#:Vn0r+Z=/m\\M(;3MU:\'$M1$!lSRr$h<TaA%MS\'$>#_(i&`^\r\nI98^&9hHhaPc1+L0lFf3m7Wgn^VUTt=2CIjCjT?::=Js>[<P:Mcl?9D;SqdtVF3eu[S&[PTik,8ldC0W\r\n\"@lO_nZc!/`10DUCYVQTI(@i5\\;_)Y+X&#0`u\\2-\'u?US2c<CkV`AG`$&TZ.B;ODS(%Ia1RGuqo&BnmM\r\nV`JK[!(Tk0W)XA;4I*Y\":o$hEKF<pOUf/71E]S.hp<Bq$W.[+.;=CN;?Fb1Q<k(nWp\\e&%eXZq\"oW_9Z\r\n4dGL@X[`dKSLO-\\F]6+CMd6GG(daf3Z6a(7?H.ts;V9#)Xrp,;$+-CP:kIhNl@;o(%%sX]9!.)FZ.5e/\r\njb,kadr=8^[`E#eP2@hoX)SJ7b+\';(.OCOi-T,Yu&jpfmhPTsZiBm>KDHX,3MJ6mG9NCLG7s!-@PPZu0\r\nf!^]WH\'n^QKfg3MHT)O<p2kX3190EG42Y\\\\%(DPW(?e[Qh`q!\'ROU\\[n/02@O=a\"7Y,WWso^Ocboo;Jp\r\niVl%&!(r<.,OCWs8iOL<$#`WR8qsJg@+Oli+F%FmYo>Tc12-7U8?fZ.N[um.Uk,4?c%>!1Kt\"$]?KoT7\r\n5,uqcM;u@YErtCq(tY4:_^4?kPUC0QQq7BINL%*6I(39hW(@)fRKek2a5A##:brM!D*Sk#!J93!_X]`6\r\n8fiL[S2%Q0!>KJ3YiUJi99n.JK6%NC[CcQ_N_E+;Pn\"d\'@7J;[#8>r@+0InJ/m/+FK0OFjs*fm9M.=8L\r\nIIjRBKou/dc>U>M1Ss((_cn`2qRCr07ORBbBsaS(P1d0&\\DN<uQe*Qo)d?0$5b5qo\\W>M>2cN_cgcSqb\r\n-o6ug<3]bK!Tsj*8<nAcGVj0=\\rGPp17bA!I;Y#TO%mPN\'PbuKjG?u>Y,fsfpT0k\",lrc/b.gd,-G^0t\r\nH9Dko*H</1PHXI\'ftG87a&\\i_c?m#l.9AX2nW?cH.9F&Q\'MrYD*[[rJZP`Fp+DK&&\'F)\'-B1b#)FF4M9\r\no4P59,Z=54ZaKL9=Bi2_O_TkJHt#$YS%^U/:Mao7c/4=If5ZS\\SnTk,3lBFSLg4$)@&VhS@4u,6%e2Zc\r\np_M0WQ1^tbZI3\"Q`G#J70Ikk[Z7?<Ha\\t\\k;Jf9^-`b3BfA,O$FnBMj.[#ZsIGLjHrP#Ti\\p^r^G-mH`\r\njo-;je5j_k,H@!3`R_)DP]<4+::(5)U%uAH.SS]2@u_GKmdGW\\&s\\lFW1gK=MFJeaIV<=TU;C5S<_FI4\r\neu6Nfh1&p)\'\\=;t]\"d(2%Dg\"J7rF-]Wd9:(1c7H33CB;-_K*s.B&5Dg3.=!P,YHf^O\'$,pQ,g#9`g;cu\r\nYW`2XXYetqb\'bPMoXf>:S/IA\"?5r/T_g\"*:a\\gb^ZG5SD<(#8Bm:P7dZ*p?WCVt.QYW$rZ9kKG#$=Z#Q\r\n6=E0mJP*HebJY@0VY6,n-ei<.@@^GR2jD,t<+WL9ltd0k%60/^.P@PHM*=[X8(dG<`OLtfr16H3`H:eX\r\nQY?3S%>g\'IoX9:SO&X)po5Y?=;\"BpXq[f8P\'MH7D?BY69@AdLOd`r,&4/s)ilf!0dZUA&<D%BE+b)0a`\r\n]:M>2:UOiQ^b^JSOL9DP7BF?H;%2hI\\DiIt;!@$2!ZuH&eoE9gA(]Al`%%TlD1YCPUU@e;/aR\'#e$%?t\r\n\'CFCp`<>ArmaTHO2Cq=^DI-d&iWpIW\'fflZHKjUfCkJLO8;LRlH\'Q\"-9O)QJCM:(tqN<9#(9Q)im)\\;9\r\nLmi^Ek^\"f0[@>%EfD+R&[ZAXoj!AI:a+KAJES0p:8mu0K]7[00NS*=_Y6r2H#kKppg,R1>cmW:?`TPT2\r\n`$YAKaGE&W,\'Fu7)fs50DB$QI3b5LCY(PcOVs03)/JF,6Vpe24YNY#WSBZ\\KpXS>nG_9b9,9Pp?3ch]^\r\n+T<d<Ar@Y.7O*!L_B(2)Oba+!C0]J<B=L4>**.e`paCsUC?QI<jp%k\"k4@B7ib(_p`$G,sM)QnA@5ta\\\r\nb]$\\G)-N0O3b9eMP\\1+8-[)DYakDI&BdA^43Fa1/]V_--m4o`k:GV$kAgJPs\\;/f539sc=j%72H$A))<\r\n/,0IR1r^h*$+O+/f\\)K@ldlNm\\srsO%XJ^W>^L;r)hs\\mT<$=YPP3kPGqUG-,jY=+_4tHia&c^me4g$B\r\n*eELb1FarOTa:CG3oVXZKXbgEg:SU5ieDP`fKTj4&187O\\X^!;@X`4%&&]pA*?%Dt/`c)p:5k7_\"t7cW\r\nHOSPI)09e<HLZgWLuW4u6N+7;!+Gr\"Yg![C=2>F^H8$hRQ7pmN3&Z;n@.&k%6Nn0\'^\'^WujrOpgGjg7N\r\n!M%MZjTgq7!V$DVJP\\2iaFo.Rc*)P>o\':ngjrRnPRpf4`d9\'BRnd/Q4i+O%8AYD1*9+])(J5\\dJKp%JQ\r\n>Zm3f3pNCm^=-l1pYQmFmP39%<PGW3(g=\"3UU+%:Q-?\\=20EiJ,k>Q^q__0kT-PjA.kYKl_gU)$D57-a\r\nd$IVQ/6sO.`Vu>\"GRrTEBgWgZ,<I[\'9SPe\\Hs!YT>kWSE<QtH:/89\\/EB$C8fVL01(KIEViUEMQ-hkU2\r\nQW<g*5+0U`:+2kAiQkO&4ripoYr\\>jX1B`u_p!>[J8:RNE3;!^6FKcVZ#\"5G0&Lt\\Y\'V,`j%Q7#\"I\'d\"\r\n)7Y9U\"ib$3;]\"!b9rJ@R2d=l^rn.W*DmBf#72;hG/1qP%<a=u3+_oL]1!1eF.smAPqS[5;>9Fbpr35+:\r\n/BG`&PI:HJ)OX,j>YLJI<\"fbKn]k>?\'j4ll>T,q8FF@_1ai3D/]lEmLs/i\"hW4ph]DaS6TPoKRT55r*R\r\nj6N@;cR8SgMlXsq/Nr6`OgW<\'N\'q6c\\\"PWI=j]d!5r:B5:\\Jh8>3\\Yd7O;C.553s+oUC(@hH-U]ZVpde\r\n)-e\'(>W*j\\H>5;f[=dZ2n%QC3k<7aqs2(DC]<UrIn!D?+nJ_9B]<t3Xjj1oRJ)k59[bC$^4sF2j[7Q)F\r\n2JJF:M[\"rqQT8!=@=+Jcd`fsjZ/Up;>ilI>ZqWSaDj*pJFei39&tdf>[V77\"*>_@YIo-4;-P,J+]/1q-\r\n)HDf.rW(CCQ\'2bX54l]-a0Zd1;0&!Z6Z0js\\u/0ZSt,XJLC87[reN^PK5nP-e:5KZ0?#YK#LY?6@<nt>\r\nfR[dB/!E^\\A`t`<+X4gomml[ZhFKJG6l+iX+$j2nli>dkD>rUXpua-U5[dbU1n?cY[qY$HQmR`\"8p$in\r\n_D\\bXB+lA6P*36;k\"M[;Vm=!sVjkD<6I^uc3=_J\\?[B8UQ\',3\'r1Rh0B;l-C:kTj;MH][p[HH%3^jBM^\r\nr8+*@n)LA^URbr&Ygs!G-IQ$$VpD$k0fG7[7Ep.rTj2L/6T&j:DC1b!bcc=IVTf5<%4Vu3:ZZ>b*Uk?B\r\n<Ii?Y^`D6[ce4fur&c$1=&+CE3go\'9@4%n;C/4LEAY^nX6fb.83@/h+qg6Q<O`&sX2QOZO?YbkNcEtuS\r\naE2L;A9Hg6BPK!<C,@\\[%9c2E*Qc(VR^4<BQ.`N&FJX-<2TK?kel\\dE\\J$Kq@:^3)9eI9t5Goj1YPYIG\r\ndFass>Wqt_\\PrKI<\".Kg$pc(qA5b;Y6mXVCkQGbHVn\"BO\';n0_:,!+mQWnIemHeC`rLl.cbfK\"M`!aa.\r\n[X%Rc-Ugc=B1Ms2bTGNj7Zq0AY0Y,KD$($87eY^B:$/>8O=`#l5jN!gek,H0XhMC8Pk_JQ)g0gCl#q+W\r\n0J0,H<ks\'a%\\F$o/;RX1F/u\"8ZHW$-q:o!(lEn@/*B*eW2C:*6S5(<^VSsOG))k`@2^d]sB)3RfGhB./\r\nfWEK=rjs=/S+8T]\'u&47k[UM;=,_gq\'FN1@A>;j##lgJ8K-OV!Cr#mLaY7F3[_1#(<8qls`aT7TiRsgd\r\na[,_OC:1OXNO,.Ef,\'trCtgM(VJ#FsOj)Ni8F[A:j*6rtYBo3AQ.oF*3R-TC5LD5]YOPpLF8*j;9G7B.\r\nG[n)-9k3l8agSD*M01S<?F!2*F#GE7*/QL)pMDih,$r,cj*>KZjISkRUNo\'L7O4sgX3Pm*UQ;<mYMX?p\r\n56K\'qPS/g;J!O#&.(&Eoq9Q#HWJsM:n>t$H2M&aDSoTi>rht#^8@.W_q67,h%u+7Fq7ep>DaLM9JW^E]\r\nDAS$%$eE>oiZ\'Z8Oo,Zlm(\'?^9n`bQMVJ`V>,0SZJl9jH`m<SOB0tSWCuQ.fM46$YJZI>(M9oNk(KlRp\r\nl:Tb#_!Id&,[;J&SsRIUmE[#@d9H0lK1_]HQI\\kgH#O5dPm<`7_=MEDOp6Fn+\\amoS\'Wl0P5?oZA7QP7\r\nHhfmgEcJ-Mq<;/DWGn\\?g$I$cML;>E9<X(+/(alZ/OQk44ap*+c_<=qJJni8Zc\",,C;k0iH8dFljK9`:\r\nBP(Z`*<ddE1(lNV&EmY9]V8nL>K+\"/[\\Xk3kUCE0GR%gm,3>+7A$JAe@@cFT&rO<L-j-\\?X7N=XB3\\]M\r\nH.5I9IjO!jAPQtd:bFJu/u7UM*5.jFZI?tiSXHk0@\\*:\\GS3*WT41,`T3LG:5B>fOejE-Bjg9L!!]L#5\r\n2#+9*Lm;6V),9]O#?o,JE#[ft43fWC1M`da>4+YDlXmAkN1<Ff*>i>=F<GR0$CcU-O;1:VG:8HDP;/u-\r\nW.+R0mB8\\B+4C~>\r\nendstream\r\nendobj\r\n4 0 obj\r\n[]\r\nendobj\r\nxref\r\n0 7\r\n0000000000 65535 f \r\n0000000009 00000 n \r\n0000000058 00000 n \r\n0000000115 00000 n \r\n0000005962 00000 n \r\n0000000312 00000 n \r\n0000000349 00000 n \r\ntrailer\r\n<<\r\n/Root 1 0 R\r\n/Size 7\r\n>>\r\nstartxref\r\n5980\r\n%%EOF\r\n\r\n',19,22),(18,'Prueba','PRUEBA DE INCERCION','1','prueba',12,123,'MX','prueba','p','P','2018-01-01','Asimilación de tecnología','%PDF-1.2\r\n1 0 obj\r\n<<\r\n/Type /Catalog\r\n/Pages 2 0 R\r\n>>\r\nendobj\r\n2 0 obj\r\n<<\r\n/Type /Pages\r\n/Count 1\r\n/Kids [3 0 R]\r\n>>\r\nendobj\r\n3 0 obj\r\n<<\r\n/Type /Page\r\n/Parent 2 0 R\r\n/MediaBox [0 0 345 345]\r\n/Annots 4 0 R\r\n/Resources 5 0 R\r\n/Contents 6 0 R\r\n/PieceInfo <<\r\n/Illustrator7.0 <<\r\n/LastModified (D:20060224142058+00\'00\')\r\n>>\r\n>>\r\n>>\r\nendobj\r\n5 0 obj\r\n<<\r\n/ProcSet [/PDF]\r\n>>\r\nendobj\r\n6 0 obj\r\n<<\r\n/Length 5524\r\n/Filter [/ASCII85Decode /FlateDecode]\r\n>>\r\nstream\r\nGhT9hh5Y$FElXe[^VdcZ!a2Y/dK^UrGfH-Z`t31qL6.>=ELSfA`ub-jPLl0LSps<X<GAR`RUHJ6L@1\\1\r\n;H9\\g.b36rGDC\\GrJ-l+5CI\\OinN5\"Isq?H++CqRp=\\ih^OQ1Sn_sHXs74X\"hu32.[s.lBnX#=:%Ii]0\r\n^O<W*qmW1^r9qZ:^WYNKr9iUKn*RmfpuAP\"^:Smprp^BqqT\"Z#YP;?%GFsA6s5K)h\\:+2G+.b%VVr.LE\r\nrg1B<WUVoMBrl*9nm^TCqqM8PT5(sP]KX^Cia+qMr-88%s,5-k-EI5`o#&`(:_/m[]DFqjBKjH5lUFN-\r\n6Df/)25Pr2%q$t1--$(Qe!Qos\"g]`$*$*_&QTqH;_rf[?D.q/!U6-:_BP,heN7V)^Fei39\'!HJnh#?L1\r\nrU&F5IfAT@5Ms66\\BmIO\'r4r_%]I6#I6(9*e30\\YjWikPpBT/p@*Q0[Vh;WTK;PERqLlGKltVTZ3]pOA\r\nJ&8spE\"M@rWMe5q6Li-n46no7MNC&CMWma(Ds=(S<JRDW`pO&\'cg$e5-!uBNeN4@AYVS^]-n]\\3j$D2Z\r\nVT=qi\"uY[OF\\qbrOY_.7_r1sNPL[k<+LoD;a%!3*<5KT]*?g)XU)q/)C:nak7K@db\"B`jKbtt$k6bU\")\r\n\\`UA`bgOkf*E\\7YL:\'t@,NlL4UM#.+iM+#Z7XLu5IEd2BE-TuXm7Tk<DAMp<dh+4dV^&c%0kRLs):m(^\r\nUcEd\"X!\\pmIYtS/L\'tusY,/iJ*R8r`rK)%<g/B-;?A@h^A02-4\'8]/CL@5^hX\\@Kka_[#dQk[!Q>nVXc\r\n7,Ggu\'qUCuTM55RYc0W.%aT-:e[ZL$aP&!\'KKc!IrCRBdf*M%k8r8-UXD[[8d;8uOKK#h=.U?nf\"B`iO\r\npk,ulHV13/Wc4@\"qab=58sGQ:AlHQCUM#:Vn0r+Z=/m\\M(;3MU:\'$M1$!lSRr$h<TaA%MS\'$>#_(i&`^\r\nI98^&9hHhaPc1+L0lFf3m7Wgn^VUTt=2CIjCjT?::=Js>[<P:Mcl?9D;SqdtVF3eu[S&[PTik,8ldC0W\r\n\"@lO_nZc!/`10DUCYVQTI(@i5\\;_)Y+X&#0`u\\2-\'u?US2c<CkV`AG`$&TZ.B;ODS(%Ia1RGuqo&BnmM\r\nV`JK[!(Tk0W)XA;4I*Y\":o$hEKF<pOUf/71E]S.hp<Bq$W.[+.;=CN;?Fb1Q<k(nWp\\e&%eXZq\"oW_9Z\r\n4dGL@X[`dKSLO-\\F]6+CMd6GG(daf3Z6a(7?H.ts;V9#)Xrp,;$+-CP:kIhNl@;o(%%sX]9!.)FZ.5e/\r\njb,kadr=8^[`E#eP2@hoX)SJ7b+\';(.OCOi-T,Yu&jpfmhPTsZiBm>KDHX,3MJ6mG9NCLG7s!-@PPZu0\r\nf!^]WH\'n^QKfg3MHT)O<p2kX3190EG42Y\\\\%(DPW(?e[Qh`q!\'ROU\\[n/02@O=a\"7Y,WWso^Ocboo;Jp\r\niVl%&!(r<.,OCWs8iOL<$#`WR8qsJg@+Oli+F%FmYo>Tc12-7U8?fZ.N[um.Uk,4?c%>!1Kt\"$]?KoT7\r\n5,uqcM;u@YErtCq(tY4:_^4?kPUC0QQq7BINL%*6I(39hW(@)fRKek2a5A##:brM!D*Sk#!J93!_X]`6\r\n8fiL[S2%Q0!>KJ3YiUJi99n.JK6%NC[CcQ_N_E+;Pn\"d\'@7J;[#8>r@+0InJ/m/+FK0OFjs*fm9M.=8L\r\nIIjRBKou/dc>U>M1Ss((_cn`2qRCr07ORBbBsaS(P1d0&\\DN<uQe*Qo)d?0$5b5qo\\W>M>2cN_cgcSqb\r\n-o6ug<3]bK!Tsj*8<nAcGVj0=\\rGPp17bA!I;Y#TO%mPN\'PbuKjG?u>Y,fsfpT0k\",lrc/b.gd,-G^0t\r\nH9Dko*H</1PHXI\'ftG87a&\\i_c?m#l.9AX2nW?cH.9F&Q\'MrYD*[[rJZP`Fp+DK&&\'F)\'-B1b#)FF4M9\r\no4P59,Z=54ZaKL9=Bi2_O_TkJHt#$YS%^U/:Mao7c/4=If5ZS\\SnTk,3lBFSLg4$)@&VhS@4u,6%e2Zc\r\np_M0WQ1^tbZI3\"Q`G#J70Ikk[Z7?<Ha\\t\\k;Jf9^-`b3BfA,O$FnBMj.[#ZsIGLjHrP#Ti\\p^r^G-mH`\r\njo-;je5j_k,H@!3`R_)DP]<4+::(5)U%uAH.SS]2@u_GKmdGW\\&s\\lFW1gK=MFJeaIV<=TU;C5S<_FI4\r\neu6Nfh1&p)\'\\=;t]\"d(2%Dg\"J7rF-]Wd9:(1c7H33CB;-_K*s.B&5Dg3.=!P,YHf^O\'$,pQ,g#9`g;cu\r\nYW`2XXYetqb\'bPMoXf>:S/IA\"?5r/T_g\"*:a\\gb^ZG5SD<(#8Bm:P7dZ*p?WCVt.QYW$rZ9kKG#$=Z#Q\r\n6=E0mJP*HebJY@0VY6,n-ei<.@@^GR2jD,t<+WL9ltd0k%60/^.P@PHM*=[X8(dG<`OLtfr16H3`H:eX\r\nQY?3S%>g\'IoX9:SO&X)po5Y?=;\"BpXq[f8P\'MH7D?BY69@AdLOd`r,&4/s)ilf!0dZUA&<D%BE+b)0a`\r\n]:M>2:UOiQ^b^JSOL9DP7BF?H;%2hI\\DiIt;!@$2!ZuH&eoE9gA(]Al`%%TlD1YCPUU@e;/aR\'#e$%?t\r\n\'CFCp`<>ArmaTHO2Cq=^DI-d&iWpIW\'fflZHKjUfCkJLO8;LRlH\'Q\"-9O)QJCM:(tqN<9#(9Q)im)\\;9\r\nLmi^Ek^\"f0[@>%EfD+R&[ZAXoj!AI:a+KAJES0p:8mu0K]7[00NS*=_Y6r2H#kKppg,R1>cmW:?`TPT2\r\n`$YAKaGE&W,\'Fu7)fs50DB$QI3b5LCY(PcOVs03)/JF,6Vpe24YNY#WSBZ\\KpXS>nG_9b9,9Pp?3ch]^\r\n+T<d<Ar@Y.7O*!L_B(2)Oba+!C0]J<B=L4>**.e`paCsUC?QI<jp%k\"k4@B7ib(_p`$G,sM)QnA@5ta\\\r\nb]$\\G)-N0O3b9eMP\\1+8-[)DYakDI&BdA^43Fa1/]V_--m4o`k:GV$kAgJPs\\;/f539sc=j%72H$A))<\r\n/,0IR1r^h*$+O+/f\\)K@ldlNm\\srsO%XJ^W>^L;r)hs\\mT<$=YPP3kPGqUG-,jY=+_4tHia&c^me4g$B\r\n*eELb1FarOTa:CG3oVXZKXbgEg:SU5ieDP`fKTj4&187O\\X^!;@X`4%&&]pA*?%Dt/`c)p:5k7_\"t7cW\r\nHOSPI)09e<HLZgWLuW4u6N+7;!+Gr\"Yg![C=2>F^H8$hRQ7pmN3&Z;n@.&k%6Nn0\'^\'^WujrOpgGjg7N\r\n!M%MZjTgq7!V$DVJP\\2iaFo.Rc*)P>o\':ngjrRnPRpf4`d9\'BRnd/Q4i+O%8AYD1*9+])(J5\\dJKp%JQ\r\n>Zm3f3pNCm^=-l1pYQmFmP39%<PGW3(g=\"3UU+%:Q-?\\=20EiJ,k>Q^q__0kT-PjA.kYKl_gU)$D57-a\r\nd$IVQ/6sO.`Vu>\"GRrTEBgWgZ,<I[\'9SPe\\Hs!YT>kWSE<QtH:/89\\/EB$C8fVL01(KIEViUEMQ-hkU2\r\nQW<g*5+0U`:+2kAiQkO&4ripoYr\\>jX1B`u_p!>[J8:RNE3;!^6FKcVZ#\"5G0&Lt\\Y\'V,`j%Q7#\"I\'d\"\r\n)7Y9U\"ib$3;]\"!b9rJ@R2d=l^rn.W*DmBf#72;hG/1qP%<a=u3+_oL]1!1eF.smAPqS[5;>9Fbpr35+:\r\n/BG`&PI:HJ)OX,j>YLJI<\"fbKn]k>?\'j4ll>T,q8FF@_1ai3D/]lEmLs/i\"hW4ph]DaS6TPoKRT55r*R\r\nj6N@;cR8SgMlXsq/Nr6`OgW<\'N\'q6c\\\"PWI=j]d!5r:B5:\\Jh8>3\\Yd7O;C.553s+oUC(@hH-U]ZVpde\r\n)-e\'(>W*j\\H>5;f[=dZ2n%QC3k<7aqs2(DC]<UrIn!D?+nJ_9B]<t3Xjj1oRJ)k59[bC$^4sF2j[7Q)F\r\n2JJF:M[\"rqQT8!=@=+Jcd`fsjZ/Up;>ilI>ZqWSaDj*pJFei39&tdf>[V77\"*>_@YIo-4;-P,J+]/1q-\r\n)HDf.rW(CCQ\'2bX54l]-a0Zd1;0&!Z6Z0js\\u/0ZSt,XJLC87[reN^PK5nP-e:5KZ0?#YK#LY?6@<nt>\r\nfR[dB/!E^\\A`t`<+X4gomml[ZhFKJG6l+iX+$j2nli>dkD>rUXpua-U5[dbU1n?cY[qY$HQmR`\"8p$in\r\n_D\\bXB+lA6P*36;k\"M[;Vm=!sVjkD<6I^uc3=_J\\?[B8UQ\',3\'r1Rh0B;l-C:kTj;MH][p[HH%3^jBM^\r\nr8+*@n)LA^URbr&Ygs!G-IQ$$VpD$k0fG7[7Ep.rTj2L/6T&j:DC1b!bcc=IVTf5<%4Vu3:ZZ>b*Uk?B\r\n<Ii?Y^`D6[ce4fur&c$1=&+CE3go\'9@4%n;C/4LEAY^nX6fb.83@/h+qg6Q<O`&sX2QOZO?YbkNcEtuS\r\naE2L;A9Hg6BPK!<C,@\\[%9c2E*Qc(VR^4<BQ.`N&FJX-<2TK?kel\\dE\\J$Kq@:^3)9eI9t5Goj1YPYIG\r\ndFass>Wqt_\\PrKI<\".Kg$pc(qA5b;Y6mXVCkQGbHVn\"BO\';n0_:,!+mQWnIemHeC`rLl.cbfK\"M`!aa.\r\n[X%Rc-Ugc=B1Ms2bTGNj7Zq0AY0Y,KD$($87eY^B:$/>8O=`#l5jN!gek,H0XhMC8Pk_JQ)g0gCl#q+W\r\n0J0,H<ks\'a%\\F$o/;RX1F/u\"8ZHW$-q:o!(lEn@/*B*eW2C:*6S5(<^VSsOG))k`@2^d]sB)3RfGhB./\r\nfWEK=rjs=/S+8T]\'u&47k[UM;=,_gq\'FN1@A>;j##lgJ8K-OV!Cr#mLaY7F3[_1#(<8qls`aT7TiRsgd\r\na[,_OC:1OXNO,.Ef,\'trCtgM(VJ#FsOj)Ni8F[A:j*6rtYBo3AQ.oF*3R-TC5LD5]YOPpLF8*j;9G7B.\r\nG[n)-9k3l8agSD*M01S<?F!2*F#GE7*/QL)pMDih,$r,cj*>KZjISkRUNo\'L7O4sgX3Pm*UQ;<mYMX?p\r\n56K\'qPS/g;J!O#&.(&Eoq9Q#HWJsM:n>t$H2M&aDSoTi>rht#^8@.W_q67,h%u+7Fq7ep>DaLM9JW^E]\r\nDAS$%$eE>oiZ\'Z8Oo,Zlm(\'?^9n`bQMVJ`V>,0SZJl9jH`m<SOB0tSWCuQ.fM46$YJZI>(M9oNk(KlRp\r\nl:Tb#_!Id&,[;J&SsRIUmE[#@d9H0lK1_]HQI\\kgH#O5dPm<`7_=MEDOp6Fn+\\amoS\'Wl0P5?oZA7QP7\r\nHhfmgEcJ-Mq<;/DWGn\\?g$I$cML;>E9<X(+/(alZ/OQk44ap*+c_<=qJJni8Zc\",,C;k0iH8dFljK9`:\r\nBP(Z`*<ddE1(lNV&EmY9]V8nL>K+\"/[\\Xk3kUCE0GR%gm,3>+7A$JAe@@cFT&rO<L-j-\\?X7N=XB3\\]M\r\nH.5I9IjO!jAPQtd:bFJu/u7UM*5.jFZI?tiSXHk0@\\*:\\GS3*WT41,`T3LG:5B>fOejE-Bjg9L!!]L#5\r\n2#+9*Lm;6V),9]O#?o,JE#[ft43fWC1M`da>4+YDlXmAkN1<Ff*>i>=F<GR0$CcU-O;1:VG:8HDP;/u-\r\nW.+R0mB8\\B+4C~>\r\nendstream\r\nendobj\r\n4 0 obj\r\n[]\r\nendobj\r\nxref\r\n0 7\r\n0000000000 65535 f \r\n0000000009 00000 n \r\n0000000058 00000 n \r\n0000000115 00000 n \r\n0000005962 00000 n \r\n0000000312 00000 n \r\n0000000349 00000 n \r\ntrailer\r\n<<\r\n/Root 1 0 R\r\n/Size 7\r\n>>\r\nstartxref\r\n5980\r\n%%EOF\r\n\r\n',41,24);
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
	
   set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=new.Titulo and IdActividades=new.IdActividades and TipoDeProduccion='Artículo de difusión y divulgación');
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `mgps`.`produccion_articulodifucion_BEFORE_UPDATE` BEFORE UPDATE ON `produccion_articulodifucion` FOR EACH ROW
BEGIN
set new.ProduccionAlumnos=(select NO_Publicacion from produccionalumnos where Titulo=old.Titulo and IdActividades= old.idActividades and TipoDeProduccion='Artículo de difusión y divulgación');
	
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

-- Dump completed on 2018-03-05 15:05:29
