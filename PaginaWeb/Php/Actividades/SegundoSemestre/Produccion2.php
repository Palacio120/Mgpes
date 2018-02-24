<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




      <?php

        Include_once('../php/conf_tab.php');

        $DB= new ConfigDB();
        $DB->Mysql();

          $codigo= $_SESSION["CODIGO_ES"];
          $Id_Act=$_SESSION["Segundo_informe"];

            for ($i=201; $i <216 ; $i++) { 
              $submit=isset($_POST['Submit'.$i]);  
              if ($submit && $submit==1){
                form2($i);
              }
            }



            
          function form2($num){
                Include_once('../php/conf_tab.php');

                $DB= new ConfigDB();
                $DB->Mysql();

                switch ($num) {
                  case '201':
                        $id=$_GET['id201'];
                        $verdad=isset($id);
                        if ($verdad && $verdad==1) {

                            
                            
                            
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Autor=$_POST['Autores'];
                            $Titulo=$_POST['Titulo'];
                            $Estado=$_POST['Estado'];
                            $Revista=$_POST['REVISTA'];
                            $Pagina_inicio=$_POST['DelaPagina'];
                            $Pagina_final=$_POST['ALAPAGINA'];
                            $Pais=$_POST['Pais'];
                            $Editorial=$_POST['EDITORIAL'];
                            $Volumen=$_POST['VOLUMEN'];
                            $ISBN=$_POST['ISBN'];
                            $Anio=$_POST['ANIO'];
                            $Proposito=$_POST['PROPOSITO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                                                  

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);

                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_articulodifucion` SET `Autores` = '$Autor',`Titulo` = '$Titulo',`Estado` = '$Estado',`NombreRevista` = '$Revista',`dePagina` = '$Pagina_inicio',`aPagina` = '$Pagina_final',`Pais` = '$Pais',`Editorial` = '$Editorial',`Volumen` = '$Volumen',`ISSN` = '$ISBN',`FechaPublicacion` = '$Anio',`Proposito` = '$Proposito',`Probatorio` = '$contenido' WHERE ProduccionAlumnos= '$id';");

                               
                                }
                                
                        }else{

                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST['Autores'];
                        $Titulo=$_POST['Titulo'];
                        $Estado=$_POST['Estado'];
                        $Revista=$_POST['REVISTA'];
                        $Pagina_inicio=$_POST['DelaPagina'];
                        $Pagina_final=$_POST['ALAPAGINA'];
                        $Pais=$_POST['Pais'];
                        $Editorial=$_POST['EDITORIAL'];
                        $Volumen=$_POST['VOLUMEN'];
                        $ISBN=$_POST['ISBN'];
                        $Anio=$_POST['ANIO'];
                        $Proposito=$_POST['PROPOSITO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);

                           $query=$DB->CONSULTA("INSERT INTO `produccion_articulodifucion` VALUES (0,'$Autor', '$Titulo', '$Estado','$Revista','$Pagina_inicio','$Pagina_final','$Pais', '$Editorial', '$Volumen', '$ISBN', '$Anio', '$Proposito', '$contenido', 0, '$Id_Act')");

                            }
                          }
                           
                    break;
                  case  '202':

                          $verdad=isset($_GET['id202']);
                        if ($verdad && $verdad==1) {

                            $id=$_GET['id202'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Autor=$_POST['AUTORES'];
                            $Titulo=$_POST['Titulo'];
                            $Estado=$_POST['Estado'];
                            $Revista=$_POST['REVISTA'];
                            $Pagina_inicio=$_POST['DELAPAGINA'];
                            $Pagina_final=$_POST['ALAPAGINA'];
                            $Pais=$_POST['Pais'];
                            $Editorial=$_POST['EDITORIAL'];
                            $Volumen=$_POST['VOLUMEN'];
                            $ISBN=$_POST['ISBN'];
                            $Anio=$_POST['ANIO'];
                            $Descripcion=$_POST['Descripcion'];
                            $Proposito=$_POST['selPROPOSITO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];



                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);

                                $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_articuloarbitrado` SET `Autores` = '$Autor', `Titulo` = '$Titulo', `Estado` = '$Estado', `NombreRevista` = '$Revista', `dePagina` = '$Pagina_inicio', `aPagina` = '$Pagina_final', `Pais` = '$Pais', `Editorial` = '$Editorial', `Volumen` = '$Volumen', `ISSN` = '$ISBN', `FechaPublicacion` = '$Anio', `Proposito` = '$Proposito', `Descripccion` = '$Descripcion', `Probatorio` = '$contenido' WHERE `ProduccionAlumnos` = '$id'; ");
                               
                       }
                       
                      }else{


                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST['AUTORES'];
                        $Titulo=$_POST['Titulo'];
                        $Estado=$_POST['Estado'];
                        $Revista=$_POST['REVISTA'];
                        $Pagina_inicio=$_POST['DELAPAGINA'];
                        $Pagina_final=$_POST['ALAPAGINA'];
                        $Pais=$_POST['Pais'];
                        $Editorial=$_POST['EDITORIAL'];
                        $Volumen=$_POST['VOLUMEN'];
                        $ISBN=$_POST['ISBN'];
                        $Anio=$_POST['ANIO'];
                        $Descripcion=$_POST['Descripcion'];
                        $Proposito=$_POST['selPROPOSITO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];



                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);

                          $query=$DB->CONSULTA("INSERT INTO `produccion_articuloarbitrado`  VALUES (0,'$Autor', '$Titulo', '$Estado','$Revista','$Pagina_inicio','$Pagina_final','$Pais', '$Editorial', '$Volumen', '$ISBN', '$Anio', '$Proposito', '$Descripcion', '$contenido', 0, '$Id_Act')");
                                                     
                       }
                     }
                    break;
                  case '203':

                          $verdad=isset($_GET['id203']);
                        if ($verdad && $verdad==1) {

                            $id=$_GET['id203'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Autor=$_POST['AUTORES'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['ESTADOACTUAL'];
                            $Revista=$_POST['REVISTA'];
                            $Pagina_inicio=$_POST['DELAPAGINA'];
                            $Pagina_final=$_POST['ALAPAGINA'];
                            $Descripcion=$_POST['COMENTARIOS'];
                            $Pais=$_POST['Pais'];
                            $Editorial=$_POST['EDITORIAL'];
                            $Volumen=$_POST['VOLUMEN'];
                            $ISBN=$_POST['ISBN'];
                            $Indice=$_POST['Indice'];
                            $Anio=$_POST['ANIO'];
                            $Proposito=$_POST['selPROPOSITO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_revistaindexada` SET `Autores` = '$Auto', `Titulo` = '$Titulo', `Estado` = '$Estado', `NombreRevista` = '$Revista', `dePagina` = '$Pagina_inicio', `aPagina` = '$Pagina_final', `Descripccion` = '$Descripcion', `Pais` = '$Pais', `Editorial` = '$Editorial', `Volumen` = '$Volumen', `ISSN` = '$ISBN', `IndiceDeRegistro` = '$Indice', `FechaPublicacion` = '$Anio', `Proposito` = '$Proposito', `Probatorio` = '$contenido',  WHERE `ProduccionAlumnos` = '$id'; ");
                       }
                       
                      }else{


                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST['AUTORES'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['ESTADOACTUAL'];
                        $Revista=$_POST['REVISTA'];
                        $Pagina_inicio=$_POST['DELAPAGINA'];
                        $Pagina_final=$_POST['ALAPAGINA'];
                        $Descripcion=$_POST['COMENTARIOS'];
                        $Pais=$_POST['Pais'];
                        $Editorial=$_POST['EDITORIAL'];
                        $Volumen=$_POST['VOLUMEN'];
                        $ISBN=$_POST['ISBN'];
                        $Indice=$_POST['Indice'];
                        $Anio=$_POST['ANIO'];
                        $Proposito=$_POST['selPROPOSITO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_revistaindexada` VALUES (0,'$Autor','$Titulo','$Estado','$Revista','$Pagina_inicio','$Pagina_final','$Descripcion','$Pais','$Editorial','$Volumen','$ISBN','$Indice','$Anio','$Proposito','$contenido',0,'$Id_Act')");
                       }
                     }
                    break;
                  case '204':
                        $verdad=isset($_GET['id204']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id204'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Autor=$_POST['AUTORES'];
                            $Cap_Autor=$_POST['AUTORESCAP'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Edicion=$_POST['NOEDICIONES'];
                            $Pagina_inicio=$_POST['DELAPAGINA'];
                            $Pagina_final=$_POST['ALAPAGINA'];
                            $Capitulo=$_POST['TITULOCAPITULO'];
                            $Pais=$_POST['Pais'];
                            $Editorial=$_POST['EDITORIAL'];
                            $ISBN=$_POST['ISBN'];
                            $Tiraje=$_POST['TOTALEJEMPLARES'];
                            $Anio=$_POST['ANIO'];
                            $Proposito=$_POST['selPROPOSITO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);

                                 $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_capitulodelibro` SET ,`Autores` = '$Autor' ,`Titulo` = '$Titulo' ,`Estado` = '$Estado' ,`Pais` = '$Pais' ,`Editorial` = '$Editorial' ,`Edicion` = '$Edicion' ,`tiraje` =  '$Tiraje' ,`ISBN` = '$ISBN',`FechaPublicacion` = '$Anio' ,`Proposito` = '$Proposito' ,`TituloDelCapitulo` = '$Capitulo',`AutorDeCapitulo` = '$Cap_Autor' ,`dePagina` = '$Pagina_inicio' ,`aPagina` = '$Pagina_final' ,`Probatorio` = '$contenido' ,WHERE `ProduccionAlumnos` = '$id';");
                            }
                        
                        }else{

                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST['AUTORES'];
                        $Cap_Autor=$_POST['AUTORESCAP'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Edicion=$_POST['NOEDICIONES'];
                        $Pagina_inicio=$_POST['DELAPAGINA'];
                        $Pagina_final=$_POST['ALAPAGINA'];
                        $Capitulo=$_POST['TITULOCAPITULO'];
                        $Pais=$_POST['Pais'];
                        $Editorial=$_POST['EDITORIAL'];
                        $ISBN=$_POST['ISBN'];
                        $Tiraje=$_POST['TOTALEJEMPLARES'];
                        $Anio=$_POST['ANIO'];
                        $Proposito=$_POST['selPROPOSITO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);

                             $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_capitulodelibro` VALUES (0, '$Autor', '$Titulo', '$Estado', '$Pais', '$Editorial','$Edicion','$Tiraje','$ISBN','$Anio','$Proposito','$Capitulo','$Cap_Autor','$Pagina_inicio','$Pagina_final','$contenido',0,'$Id_Act')");
                        }
                      }
                    break;
                  case '205':

                          $verdad=isset($_GET['id205']);
                        if ($verdad && $verdad==1) {

                            $id=$_GET['id205'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Alcance=$_POST['COMENTARIOS'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Usuario=$_POST['USUARIOPAT'];
                            $Autores=$_POST['AUTORES'];
                            $Beneficio=$_POST['USO'];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_consultoria` SET `Estudio` ='$Titulo' ,`Alcance` ='$Alcance' ,`EmpresaBeneficiaria` ='$Usuario' ,`Pais` ='$Pais' ,`EstadoActual` ='$Estado' ,`FechaInicio` ='$Anio' ,`InvestigadoresParticipantes` ='$Autores' ,`BeneficiosEconomicos` ='$Beneficio' ,`Probatorio` ='$contenido' WHERE `ProduccionAlumnos` = '$id';");
                               

                           }
                        
                            
                        }else{

                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Alcance=$_POST['COMENTARIOS'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Usuario=$_POST['USUARIOPAT'];
                        $Autores=$_POST['AUTORES'];
                        $Beneficio=$_POST['USO'];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_consultoria` VALUES (0,'$Titulo','$Alcance', '$Usuario','$Pais','$Estado','$Anio','$Autores','$Beneficio','$contenido',0,'$Id_Act');");
                       }
                     }
                    break;
                  case '206':

                       $verdad=isset($_GET['id206']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id206'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Alcance=$_POST['COMENTARIOS'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Usuario=$_POST['USUARIOPAT'];
                            $Autores=$_POST['AUTORES'];
                            $Beneficio=$_POST['USO'];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                            $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                            $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                            $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_informetecnico` SET `Titulo` = '$Titulo' , `Alcance` = '$Alcance' , `EmpresaBeneficiaria` = '$Usuario' , `EstadoActual` = '$Estado' , `Pais` = '$Pais' , `FechaInicio` = '$Anio' , `InvestigadoresParticipantes` = '$Autores' , `BeneficiosEconomicos` = '$Beneficio' , `Probatorio` = '$contenido'  WHERE `ProduccionAlumnos` = '$id';"); 
                               

                           }
                          
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Alcance=$_POST['COMENTARIOS'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Usuario=$_POST['USUARIOPAT'];
                        $Autores=$_POST['AUTORES'];
                        $Beneficio=$_POST['USO'];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                        $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                        $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                        $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_informetecnico` VALUES (0,'$Titulo','$Alcance','$Usuario','$Estado','$Pais','$Anio','$Autores','$Beneficio','$contenido',0,'$Id_Act');");
                       }
                     }
                    break;
                  case '207':

                        $verdad=isset($_GET['id207']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id207'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Titulo=$_POST['TITULO'];
                            $Participa=$_POST["ESTADO"];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Editorial=$_POST["EDITORIAL"];
                            $Paginas=$_POST["PAGINAS"];
                            $Edicion=$_POST["NOEDICIONES"];
                            $Tiraje=$_POST["TOTALEJEMPLARES"];
                            $isbn=$_POST["ISBN"];
                            
                            $Autores=$_POST['AUTORES'];

                            $Proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                            $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                            $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                            $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_libro` SET `Autor` = '$Autores' ,`Titulo` = '$Titulo' ,`Participacion` = '$Participa' ,`EstadoActual` = '$Estado' ,`Pais` = '$Pais' ,`Editorial` = '$Editorial' ,`Paginas` = '$Paginas' ,`Edicion` = '$Edicion' ,`Tiraje` = '$Tiraje' ,`ISBN` = '$isbn' ,`FechaPublicacion` = '$Anio' ,`Proposito` = '$Proposito' ,`Probatorio` = '$contenido' WHERE `ProduccionAlumnos` = '$id';");
                               
                           }
                        
                        }else{

                          $Id_Act=$_SESSION["Segundo_informe"];
                          $Titulo=$_POST['TITULO'];
                          $Participa=$_POST["ESTADO"];
                          $Estado=$_POST['selESTADOACTUAL'];
                          $Editorial=$_POST["EDITORIAL"];
                          $Paginas=$_POST["PAGINAS"];
                          $Edicion=$_POST["NOEDICIONES"];
                          $Tiraje=$_POST["TOTALEJEMPLARES"];
                          $isbn=$_POST["ISBN"];
                          
                          $Autores=$_POST['AUTORES'];

                          $Proposito=$_POST["selPROPOSITO"];
                          $Pais=$_POST['Pais'];
                          $Anio=$_POST['ANIO'];
                          $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                          $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                          $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                          $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];

                          if ( $Probatorio != "none" ){
                             $fp = fopen($Probatorio, "r+");
                             $contenido = fread($fp, $tamnio_rep);
                             $contenido = addslashes($contenido);
                             fclose($fp);


                             $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_libro` VALUES (0,'$Autores','$Titulo','$Participa','$Estado','$Pais','$Editorial','$Paginas','$Edicion','$Tiraje','$isbn','$Anio','$Proposito','$contenido',0,'$Id_Act');");
                         }
                       }
                    break;
                  case '208':

                        $verdad=isset($_GET['id208']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id208'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Alcance=$_POST['COMENTARIOS'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Usuario=$_POST['USUARIOPAT'];
                            $Autores=$_POST['AUTORES'];
                            $Beneficio=$_POST['USO'];
                            $proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA(" UPDATE `mgps`.`produccion_manualdeoperaciones` SET `Autor` = '$Autores', `Titulo` = '$Titulo', `Descripccion` = '$Alcance', `EmpresaBeneficiaria` = '$Usuario', `Pais` = '$Pais', `FechaPublicacion` = '$Anio', `Proposito` = '$proposito', `Probatorio` = '$contenido' WHERE `ProduccionAlumnos` = '$id'; ");

                              
                           }
                        
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Alcance=$_POST['COMENTARIOS'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Usuario=$_POST['USUARIOPAT'];
                        $Autores=$_POST['AUTORES'];
                        $Beneficio=$_POST['USO'];
                        $proposito=$_POST["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_manualdeoperaciones` VALUES (0,'$Autores','$Titulo','$Alcance','$Usuario','$Pais','$Anio','$proposito','$contenido',0,'$Id_Act');");
                       }
                     }
                    break;
                  case '209':

                        $verdad=isset($_GET['id209']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id209'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Alcance=$_POST['COMENTARIOS'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Usuario=$_POST['USUARIOPAT'];
                            $Autores=$_POST['AUTORES'];
                            $Beneficio=$_POST['USO'];
                            $Proposito=$_POST¨["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_materialdeapoyo` SET `Autor` ='$Autores' ,`Titulo` ='$Titulo' ,`Descripccion` ='$Alcance' ,`EmpresaBeneficiaria` ='$Usuario' ,`Pais` ='$Pais' ,`FechaPublicacion` ='$Anio' ,`Proposito` ='$Proposito' ,`Probatorio` ='$contenido' WHERE `ProduccionAlumnos`='$id';");

                               

                           }
                        
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Alcance=$_POST['COMENTARIOS'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Usuario=$_POST['USUARIOPAT'];
                        $Autores=$_POST['AUTORES'];
                        $Beneficio=$_POST['USO'];
                        $Proposito=$_POST¨["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_materialdeapoyo` VALUES (0,'$Autores','$Titulo','$Alcance','$Usuario','$Pais','$Anio','$Proposito','$contenido',0,'$Id_Act');");
                       }
                     }
                    break;
                  case '210':

                        $verdad=isset($_GET['id210']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id210'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Alcance=$_POST['COMENTARIOS'];
                            $Titulo=$_POST['TITULO'];
                            $Estado=$_POST['selESTADOACTUAL'];
                            $Usuario=$_POST['USUARIOPAT'];
                            $Autores=$_POST['AUTORES'];
                            $Beneficio=$_POST['USO'];
                            $proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Probatorio']["tmp_name"];
                            $tamnio_rep=$_FILES['Probatorio']["size"];
                            $nombre_Rep=$_FILES["Probatorio"]["name"];
                            $Tipo_Rep=$_FILES["Probatorio"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);

                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_materialdidactico` set `Autor` ='$Autores', `Titulo` ='$Titulo', `Descripccion` ='$Alcance', `EmpresaBeneficiaria` = '$Usuario', `Pais` ='$Pais', `FechaPublicacion` ='$Anio', `Proposito` ='$proposito', `Probatorio` ='$contenido') where `ProduccionAlumnos` ='$id';");
                           }
                        
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Alcance=$_POST['COMENTARIOS'];
                        $Titulo=$_POST['TITULO'];
                        $Estado=$_POST['selESTADOACTUAL'];
                        $Usuario=$_POST['USUARIOPAT'];
                        $Autores=$_POST['AUTORES'];
                        $Beneficio=$_POST['USO'];
                        $proposito=$_POST["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_materialdidactico` VALUES (0,'$Autores','$Titulo','$Alcance','$Usuario','$Pais','$Anio','$proposito','$contenido',0,'$IdAct');");
                       }
                     }
                    break;
                  case '211':

                        $verdad=isset($_GET['id211']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id211'];
                            $Id_Act=$_SESSION["Segundo_informe"];                        
                            $Autor=$_POST["AUTORES"];
                            $Titulo=$_POST["TITULO"];
                            $Congreso=$_POST["COMENTARIOS"];
                            $EstadoActual=$_POST["selESTADOACTUAL"];
                            $dePagina=$_POST["DELAPAGINA"];
                            $aPagina=$_POST["ALAPAGINA"];
                            $Estado=$_POST["ESTADO"];
                            $Ciudad=$_POST["CIUDAD"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $proposito=$_POST["selPROPOSITO"];
                            $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                            $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                            $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                            $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];


                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE`mgps`.`produccion_memorias` set `Autor` ='$Autor',`Titulo` ='$Titulo', `Congreso` ='$Congreso', `EstadoActual` ='$EstadoActual', `dePagina` ='$dePagina', `aPagina` ='$aPagina', `Pais` = '$Pais', `Estado` ='$Estado',`Ciudad` ='$Ciudad', `FechaPublicacion` ='$Anio', `Proposito` ='$proposito', `Probatorio` ='$contenido') where  `ProduccionAlumnos` ='$id';");
                           }
                        
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];                        
                        $Autor=$_POST["AUTORES"];
                        $Titulo=$_POST["TITULO"];
                        $Congreso=$_POST["COMENTARIOS"];
                        $EstadoActual=$_POST["selESTADOACTUAL"];
                        $dePagina=$_POST["DELAPAGINA"];
                        $aPagina=$_POST["ALAPAGINA"];
                        $Estado=$_POST["ESTADO"];
                        $Ciudad=$_POST["CIUDAD"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $proposito=$_POST["selPROPOSITO"];
                        $Probatorio=$_FILES['REGISTROPAT']["tmp_name"];
                        $tamnio_rep=$_FILES['REGISTROPAT']["size"];
                        $nombre_Rep=$_FILES["REGISTROPAT"]["name"];
                        $Tipo_Rep=$_FILES["REGISTROPAT"]["type"];


                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_memorias` VALUES (0,'$Autor','$Titulo','$Congreso','$EstadoActual','$dePagina','$aPagina','$Pais','$Estado','$Ciudad','$Anio','$proposito','$contenido',0,'Id_Act');");
                       }
                     }
                    break;
                  case '212':

                        $verdad=isset($_GET['id212']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id212'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                        
                            $Autor=$_POST["AUTORES"];
                            $Tipo=$_POST["PAGINAS"];
                            $Titulo=$_POST["TITULO"];
                            $Descripccion=$_POST["COMENTARIOS"];
                            $Clacificacion=$_POST["VOLUMEN"];
                            $Uso=$_POST["USO"];
                            $EstadoActual=$_POST["selESTADOACTUAL"];
                            $NumeroDeRegistro=$_POST["REGISTROPAT"];
                            $Usuario=$_POST["USUARIOPAT"];
                            $Pais=$_POST["Pais"];
                            $FechaPublicacion=$_POST["ANIO"];
                            $proposito=$_POST["selPROPOSITO"];

                            $Probatorio=$_FILES['Archivo']["tmp_name"];
                            $tamnio_rep=$_FILES['Archivo']["size"];
                            $nombre_Rep=$_FILES["Archivo"]["name"];
                            $Tipo_Rep=$_FILES["Archivo"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_inovadora` SET `Autor` = '$Autor', `Tipo` ='$Tipo', `Titulo` = '$Titulo', `Descripccion` ='$Descripccion', `Clacificacion` ='$Clacificacion', `Uso` ='$Uso', `EstadoActual` ='$EstadoActual', `NumeroDeRegistro` ='$NumeroDeRegistro', `Usuario` ='$Usuario', `Pais` ='$Pais', `FechaPublicacion` ='$FechaPublicacion', `Probatorio` ='$contenido', `Proposito` ='$proposito') where `ProduccionAlumnos`= '$id';");
                               }
                        
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        
                        $Autor=$_POST["AUTORES"];
                        $Tipo=$_POST["PAGINAS"];
                        $Titulo=$_POST["TITULO"];
                        $Descripccion=$_POST["COMENTARIOS"];
                        $Clacificacion=$_POST["VOLUMEN"];
                        $Uso=$_POST["USO"];
                        $EstadoActual=$_POST["selESTADOACTUAL"];
                        $NumeroDeRegistro=$_POST["REGISTROPAT"];
                        $Usuario=$_POST["USUARIOPAT"];
                        $Pais=$_POST["Pais"];
                        $FechaPublicacion=$_POST["ANIO"];
                        $proposito=$_POST["selPROPOSITO"];

                        $Probatorio=$_FILES['Archivo']["tmp_name"];
                        $tamnio_rep=$_FILES['Archivo']["size"];
                        $nombre_Rep=$_FILES["Archivo"]["name"];
                        $Tipo_Rep=$_FILES["Archivo"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_inovadora` VALUES(0,'$Autor','$Tipo','$Titulo','$Descripccion','$Clacificacion','$Uso','$EstadoActual','$NumeroDeRegistro','$Usuario','$Pais','$FechaPublicacion','$contenido','$proposito',0,'$Id_Act');");
                           }
                         }
                    break;
                  case '213':

                        $verdad=isset($_GET['id213']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id213'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Tipo=$_POST["ESTADO"];
                            $Autor=$_POST["AUTORES"];
                            $Titulo=$_POST["TITULO"];
                            $Descripccion=$_POST["COMENTARIOS"];
                            $impacto=$_POST["INVESTIGACION"];
                            $Metodologia=$_POST["METODOLOGIA"];
                            $Diseño=$_POST["DISENO"];
                            $innovacion=$_POST["INNOVACION"];
                            $Lugares=$_POST["TITULOCAPITULO"];
                            $Proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Archivo']["tmp_name"];
                            $tamnio_rep=$_FILES['Archivo']["size"];
                            $nombre_Rep=$_FILES["Archivo"]["name"];
                            $Tipo_Rep=$_FILES["Archivo"]["type"];



                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);


                               $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_artística` set  `Tipo` ='$Tipo', `Autor` ='$Autor', `Titulo` ='$Titulo',`Descripccion` ='$Descripccion', `impacto` ='$impacto', `Metodologia` ='$Metodologia', `Diseño` ='$Diseño', `innovacion` ='$innovacion', `Pais` ='$Pais', `FechaPublicacion` ='$Anio', `Lugares` ='$Lugares',  `Probatorio` ='$contenido', `Proposito` ='$Proposito') where ProduccionAlumnos = '$id';");
                           }
                        

                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
              
                        $Tipo=$_POST["ESTADO"];
                        $Autor=$_POST["AUTORES"];
                        $Titulo=$_POST["TITULO"];
                        $Descripccion=$_POST["COMENTARIOS"];
                        $impacto=$_POST["INVESTIGACION"];
                        $Metodologia=$_POST["METODOLOGIA"];
                        $Diseño=$_POST["DISENO"];
                        $innovacion=$_POST["INNOVACION"];
                        $Lugares=$_POST["TITULOCAPITULO"];
                        $Proposito=$_POST["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Archivo']["tmp_name"];
                        $tamnio_rep=$_FILES['Archivo']["size"];
                        $nombre_Rep=$_FILES["Archivo"]["name"];
                        $Tipo_Rep=$_FILES["Archivo"]["type"];

                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_artística` VALUES(0,'$Tipo','$Autor','$Titulo','$Descripccion','$impacto','$Metodologia','$Diseño','$innovacion','$Pais','$Anio','$Lugares','$contenido','$Proposito',0,'$IdAct');");
                       }
                     }
                    break;
                  case '214':

                        $verdad=isset($_GET['id214']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id214'];
                            $Autor=$_POST["AUTORES"];
                            $Tipo=$_POST["PAGINAS"];
                            $Estado=$_POST["selESTADOACTUAL"];
                            $Titulo=$_POST["TITULO"];
                            $Objetivo=$_POST["COMENTARIOS"];
                            $Caracteristicas=$_POST["USO"];
                            $InstitucionBeneficiaria=$_POST["USUARIOPAT"];
                            $Proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Archivo']["tmp_name"];
                            $tamnio_rep=$_FILES['Archivo']["size"];
                            $nombre_Rep=$_FILES["Archivo"]["name"];
                            $Tipo_Rep=$_FILES["Archivo"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);



                                $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_prototipo` set  `Autor` ='$Autor', `Tipo` = '$Tipo', `Estado` ='$Estado', `Titulo` ='$Titulo', `Objetivo` ='$Objetivo', `Caracteristicas` ='$Caracteristicas', `InstitucionBeneficiaria` ='$InstitucionBeneficiaria', `Pais` ='$Pais', `FechaPublicacion` ='$Anio', `Probatorio` = '$contenido', `Proposito` = '$Proposito' WHERE ProduccionAlumnos='$id';");

                            } 
                               

                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST["AUTORES"];
                        $Tipo=$_POST["PAGINAS"];
                        $Estado=$_POST["selESTADOACTUAL"];
                        $Titulo=$_POST["TITULO"];
                        $Objetivo=$_POST["COMENTARIOS"];
                        $Caracteristicas=$_POST["USO"];
                        $InstitucionBeneficiaria=$_POST["USUARIOPAT"];
                        $Proposito=$_POST["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Archivo']["tmp_name"];
                        $tamnio_rep=$_FILES['Archivo']["size"];
                        $nombre_Rep=$_FILES["Archivo"]["name"];
                        $Tipo_Rep=$_FILES["Archivo"]["type"];



                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_prototipo` VALUES (0,'$Autor','$Tipo','$Estado','$Titulo','$Objetivo','$Caracteristicas','$InstitucionBeneficiaria','$Pais','$Anio','$contenido','$Proposito',0,'$IdAct');");
                       }
                     }
                    break;
                  case '215':

                        $verdad=isset($_GET['id215']);
                        if ($verdad && $verdad==1) {
                            $id=$_GET['id215'];
                            $Id_Act=$_SESSION["Segundo_informe"];
                            $Autor=$_POST["AUTORES"];
                            $Titulo=$_POST["TITULO"];
                            $Descripccion=$_POST["COMENTARIOS"];
                            $Proposito=$_POST["selPROPOSITO"];
                            $Pais=$_POST['Pais'];
                            $Anio=$_POST['ANIO'];
                            $Probatorio=$_FILES['Archivo1']["tmp_name"];
                            $tamnio_rep=$_FILES['Archivo1']["size"];
                            $nombre_Rep=$_FILES["Archivo1"]["name"];
                            $Tipo_Rep=$_FILES["Archivo1"]["type"];

                            if ( $Probatorio != "none" ){
                               $fp = fopen($Probatorio, "r+");
                               $contenido = fread($fp, $tamnio_rep);
                               $contenido = addslashes($contenido);
                               fclose($fp);

                            $query=$DB->CONSULTA("UPDATE `mgps`.`produccion_otro` set `Autor` ='$Autor', `Titulo` ='$Titulo', `Descripccion` = '$Descripccion', `Pais` ='$Pais', `FechaPublicacion` ='$Anio', `Proposito` ='$Proposito', `Probatorio` ='$contenido' WHERE `ProduccionAlumnos`='$id' ;");
                            }
                            
                        }else{

                      $Id_Act=$_SESSION["Segundo_informe"];
                        $Autor=$_POST["AUTORES"];
                        $Titulo=$_POST["TITULO"];
                        $Descripccion=$_POST["COMENTARIOS"];
                        $Proposito=$_POST["selPROPOSITO"];
                        $Pais=$_POST['Pais'];
                        $Anio=$_POST['ANIO'];
                        $Probatorio=$_FILES['Archivo1']["tmp_name"];
                        $tamnio_rep=$_FILES['Archivo1']["size"];
                        $nombre_Rep=$_FILES["Archivo1"]["name"];
                        $Tipo_Rep=$_FILES["Archivo1"]["type"];


                        if ( $Probatorio != "none" ){
                           $fp = fopen($Probatorio, "r+");
                           $contenido = fread($fp, $tamnio_rep);
                           $contenido = addslashes($contenido);
                           fclose($fp);


                           $query=$DB->CONSULTA("INSERT INTO `mgps`.`produccion_otro` VALUES(0,'$Autor','$Titulo','$Descripccion','$Pais','$Anio','$Proposito','$contenido',0,'$Id_Act');");
                       }
                     }
                      break;

                }
          }

          if(isset($_POST["Submit_Extracurriculares2"])){

            $verdad=isset($_GET["id_Extra2"]);
            if ($verdad && $verdad==1) {
              Include_once('../php/conf_tab.php');
              $DB= new ConfigDB();
              $DB->Mysql();

              $id_Extracurriculares1=$_GET["id_Extra2"];
              $Activiadad_Extra=$_POST["Activiadad_Extra"];
              $Profesor_Act=$_POST["Profesor_Act"];
              $Institucion_Organizadora=$_POST["Institucion_Organizadora"];
              $Pais=$_POST["Pais"];
              $Fecha_Inicio=$_POST["Fecha_Inicio"];
              $Fecha_Final=$_POST["Fecha_Final"];
              $Ciudad=$_POST["Ciudad"];
              $Ambito=$_POST["Ambito"];
              $Continente=$_POST["Continente"];
              $Probatorio=$_FILES['Constancia']["tmp_name"];
              $tamnio_rep=$_FILES['Constancia']["size"];
              $nombre_Rep=$_FILES["Constancia"]["name"];
              $Tipo_Rep=$_FILES["Constancia"]["type"];

                if ( $Probatorio != "none" ){
                     $fp = fopen($Probatorio, "r+");
                     $contenido = fread($fp, $tamnio_rep);
                     $contenido = addslashes($contenido);
                     fclose($fp);


                     $query=$DB->CONSULTA(" UPDATE `mgps`.`actividades_extracurriculares` SET `Tipo_Actividad` = '$Activiadad_Extra',`Nombre_DelProfesor` = '$Profesor_Act',`Institucion_Organizadora` = '$Institucion_Organizadora',`Pais` = '$Pais',`Ciudad` = '$Ciudad',`Ambito` = '$Ambito',`Continente` = '$Continente',`Fecha_Inicio` = '$Fecha_Inicio',`Fecha_Termino` = '$Fecha_Final', `Constancia`='$contenido' WHERE `idActividades_Extracurriculares` = '$id_Extracurriculares1';");

                     
                   }
                 }else{

            Include_once('../php/conf_tab.php');
              $DB= new ConfigDB();
              $DB->Mysql();

             $Activiadad_Extra=$_POST["Activiadad_Extra"];
              $Profesor_Act=$_POST["Profesor_Act"];
              $Institucion_Organizadora=$_POST["Institucion_Organizadora"];
              $Pais=$_POST["Pais"];
              $Fecha_Inicio=$_POST["Fecha_Inicio"];
              $Fecha_Final=$_POST["Fecha_Final"];
              $Ciudad=$_POST["Ciudad"];
              $Ambito=$_POST["Ambito"];
              $Continente=$_POST["Continente"];
              $Probatorio=$_FILES['Constancia']["tmp_name"];
              $tamnio_rep=$_FILES['Constancia']["size"];
              $nombre_Rep=$_FILES["Constancia"]["name"];
              $Tipo_Rep=$_FILES["Constancia"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                     $fp = fopen($Probatorio, "r+");
                     $contenido = fread($fp, $tamnio_rep);
                     $contenido = addslashes($contenido);
                     fclose($fp);


                     $query=$DB->CONSULTA("INSERT INTO `mgps`.`actividades_extracurriculares` VALUES(0,'$Activiadad_Extra','$Profesor_Act','$Institucion_Organizadora', '$Pais','$Ciudad','$Ambito','$Continente','$Fecha_Inicio','$Fecha_Final','$Id_Act','$contenido');");

                     
                   }
              }
            }
            
          

          if (isset($_POST["Submit_Apoyo2"])) {

            $verdad=isset($_GET["id_apoyo2"]);
            if ($verdad && $verdad==1) {
              Include_once('../php/conf_tab.php');
              $DB= new ConfigDB();
              $DB->Mysql();
              $id_Apoyo=$_GET["id_apoyo2"];
              $Descripccion=$_POST["Descripccion"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                     $fp = fopen($Probatorio, "r+");
                     $contenido = fread($fp, $tamnio_rep);
                     $contenido = addslashes($contenido);
                     fclose($fp);


                     $query=$DB->CONSULTA("UPDATE `mgps`.`gestionapoyoinv` SET `Descripccion` = '$Descripccion',`Probatorio` = '$contenido' WHERE `idgestionapoyoinv` = '$id_Apoyo';");

                     
                   }

            }else{

            Include_once('../php/conf_tab.php');
              $DB= new ConfigDB();
              $DB->Mysql();

            $Descripccion=$_POST["Descripccion"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                     $fp = fopen($Probatorio, "r+");
                     $contenido = fread($fp, $tamnio_rep);
                     $contenido = addslashes($contenido);
                     fclose($fp);


                     $query=$DB->CONSULTA("INSERT INTO `mgps`.`gestionapoyoinv` VALUES(0,'$Descripccion','$contenido','$Id_Act');");

                     
                   }
                 }
          }

          if (isset($_POST["Submit_Congreso2"])) {
            $verdad=isset($_GET["id_cong2"]);
            if ($verdad && $verdad==1) {
              Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();

                        $Id_congresos1=$_GET["id_cong2"];
                        $Nombre=$_POST["Nombre"];
                        $Titulo=$_POST["Titulo"];
                        $Tipo_Congreso=$_POST["Tipo_Congreso"];
                        $pais=$_POST["Pais"];
                        $Fecha_Inicio_Congreso=$_POST["Fecha_Inicio_Congreso"];
                        $Fecha_Final_Congreso=$_POST["Fecha_Final_Congreso"];
                        $Probatorio=$_FILES['constancia_Congreso']["tmp_name"];
                        $tamnio_rep=$_FILES['constancia_Congreso']["size"];
                        $nombre_Rep=$_FILES["constancia_Congreso"]["name"];
                        $Tipo_Rep=$_FILES["constancia_Congreso"]["type"];
                        $Id_Act =$_SESSION["Segundo_informe"];

                        if ( $Probatorio != "none" ){
                         $fp = fopen($Probatorio, "r+");
                         $contenido = fread($fp, $tamnio_rep);
                         $contenido = addslashes($contenido);
                         fclose($fp);


                         $query=$DB->CONSULTA("UPDATE `mgps`.`congresos_como_ponente` SET `NombreCongreso` = '$Nombre',`Titulo_del_Trabajo` =  '$Titulo',`TipoDeParticipaciion` = '$Tipo_Congreso',`Pais` = '$pais',`Fecha_inicio` = '$Fecha_Inicio_Congreso',`Fecha_Termino` = '$Fecha_Final_Congreso',`Constancia` = '$contenido' WHERE `id_Congresos_Ponente` = '$Id_congresos1';");

                         
                       }
            }else{

            Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();

             $Nombre=$_POST["Nombre"];
              $Titulo=$_POST["Titulo"];
              $Tipo_Congreso=$_POST["Tipo_Congreso"];
              $pais=$_POST["Pais"];
              $Fecha_Inicio_Congreso=$_POST["Fecha_Inicio_Congreso"];
              $Fecha_Final_Congreso=$_POST["Fecha_Final_Congreso"];
              $Probatorio=$_FILES['constancia_Congreso']["tmp_name"];
              $tamnio_rep=$_FILES['constancia_Congreso']["size"];
              $nombre_Rep=$_FILES["constancia_Congreso"]["name"];
              $Tipo_Rep=$_FILES["constancia_Congreso"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

                if ( $Probatorio != "none" ){
                 $fp = fopen($Probatorio, "r+");
                 $contenido = fread($fp, $tamnio_rep);
                 $contenido = addslashes($contenido);
                 fclose($fp);


                 $query=$DB->CONSULTA("INSERT INTO `mgps`.`congresos_como_ponente` VALUES(0,'$Nombre','$Titulo','$Tipo_Congreso','$pais','$Fecha_Inicio_Congreso','$Fecha_Final_Congreso','$contenido','$Id_Act');");
               }
             }

          }

          if (isset($_POST["Submit_Especializada2"])) {
            Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();

            $verdad=isset($_GET["id_Especial2"]);
            if ($verdad && $verdad==1) {              
              
              $id_Especializada1=$_GET["id_Especial2"];
              $Fech_Reporte=$_POST["Fech_Reporte"];
              $Actividades=$_POST["Actividades"];
              $Tareas=$_POST["Tareas"];
              $Observaciones=$_POST["Observaciones"];
              $Fecha_Siguiente=$_POST["Fecha_Siguiente"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                 $fp = fopen($Probatorio, "r+");
                 $contenido = fread($fp, $tamnio_rep);
                 $contenido = addslashes($contenido);
                 fclose($fp);


                 $query=$DB->CONSULTA("UPDATE `mgps`.`asesoria_especializada` SET `Fecha` = '$Fech_Reporte', `Activiadades_realiadas` = '$Actividades', `Tareas` = '$Tareas', `Observaciones` = '$Observaciones', `SiguienteAsesoria` = '$Fecha_Siguiente', `Probatorio` = '$contenido' WHERE `idAsesoria_Especializada` = '$id_Especializada1'; ");
               }
            }else{

            Include_once('../php/conf_tab.php');
            $DB= new ConfigDB();
            $DB->Mysql();

              $Fech_Reporte=$_POST["Fech_Reporte"];
              $CalendarioEsc=date('Y');
              $Nombre_Es=$_SESSION["NombreCompleto"];
              $CODIGO_ES=$_SESSION["CODIGO_ES"];
              $Titulo_de_Tesis=$_SESSION["TemaTesis"];
              
              $Actividades=$_POST["Actividades"];
              $Tareas=$_POST["Tareas"];
              $Observaciones=$_POST["Observaciones"];
              $Fecha_Siguiente=$_POST["Fecha_Siguiente"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                 $fp = fopen($Probatorio, "r+");
                 $contenido = fread($fp, $tamnio_rep);
                 $contenido = addslashes($contenido);
                 fclose($fp);


                 $query=$DB->CONSULTA("INSERT INTO `mgps`.`asesoria_especializada` VALUES (0, '$Fech_Reporte', '$CalendarioEsc', '$Nombre_Es', '$CODIGO_ES', '$Titulo_de_Tesis', '$Actividades', '$Tareas', '$Observaciones', '$Fecha_Siguiente', '$Id_Act', '$contenido'); ");
               }
             }
          }

          if (isset($_POST["Submit_Asesorias2"])) {
            $verdad=isset($_GET["id_Tut2"]);
            if ($verdad && $verdad==1) { 
              Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();
              
              $Id_Reporte_tutoria1=$_GET["id_Tut2"];
              $Fech_Reporte=$_POST["Fech_Reporte"];
              $Actividades=$_POST["Actividades"];
              $Tareas=$_POST["Tareas"];
              $Observaciones=$_POST["Observaciones"];
              $Fecha_Siguiente=$_POST["Fecha_Siguiente"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                 $fp = fopen($Probatorio, "r+");
                 $contenido = fread($fp, $tamnio_rep);
                 $contenido = addslashes($contenido);
                 fclose($fp);


                 $query=$DB->CONSULTA("UPDATE `mgps`.`reporte_asesorias` SET `Fecha` = '$Fech_Reporte', `Activiadades_realiadas` = '$Actividades', `Tareas` = '$Tareas', `Observaciones` = '$Observaciones', `SiguienteAsesoria` = '$Fecha_Siguiente', `Probatorio` = '$contenido' WHERE `idReporte_Asesorias` = '$Id_Reporte_tutoria1'; ");
               }
            }else{


            Include_once('../php/conf_tab.php');
            $DB= new ConfigDB();
            $DB->Mysql();

              $Fech_Reporte=$_POST["Fech_Reporte"];
              $CalendarioEsc=date('Y');
              $Nombre_Es=$_SESSION["NombreCompleto"];
              $CODIGO_ES=$_SESSION["CODIGO_ES"];
              $Titulo_de_Tesis=$_SESSION["TemaTesis"];
              
              $Actividades=$_POST["Actividades"];
              $Tareas=$_POST["Tareas"];
              $Observaciones=$_POST["Observaciones"];
              $Fecha_Siguiente=$_POST["Fecha_Siguiente"];
              $Probatorio=$_FILES['Probatorio']["tmp_name"];
              $tamnio_rep=$_FILES['Probatorio']["size"];
              $nombre_Rep=$_FILES["Probatorio"]["name"];
              $Tipo_Rep=$_FILES["Probatorio"]["type"];
              $Id_Act =$_SESSION["Segundo_informe"];

              if ( $Probatorio != "none" ){
                 $fp = fopen($Probatorio, "r+");
                 $contenido = fread($fp, $tamnio_rep);
                 $contenido = addslashes($contenido);
                 fclose($fp);


                 $query=$DB->CONSULTA("INSERT INTO `mgps`.`reporte_asesorias` VALUES (0,'$Fech_Reporte', '$CalendarioEsc', '$Nombre_Es', '$CODIGO_ES', '$Titulo_de_Tesis', '$Actividades', '$Tareas', '$Observaciones', '$Fecha_Siguiente', '$Id_Act', '$contenido'); ");
               }
             }

          }




            if (isset($_POST["submitVinculacion2"])) {
                Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();

                $verdad=isset($_GET['id_vin2']);
                if ($verdad && $verdad==1) { 

                        $Id_Vinculacion=$_GET['id_vin2'];
                        $Ambito=$_POST["Ambito"];
                        $ProductoObtenido=$_POST["ProductoObtenido"];
                        $Sector=$_POST["Sector"];
                        $Institucion=$_POST["Institucion"];
                        $Objetivo=$_POST["Objetivo"];
                        $Fecha_Inicio=$_POST["Fecha_Inicio"];
                        $Fecha_Final=$_POST["Fecha_Final"];
                        $TipoVinc=$_POST["TipoVinc"];
                        $Pais=$_POST['Pais'];
                        $Mecanismo=$_POST["Mecanismo"];
                        $Beneficio=$_POST["Beneficio"];

                        $Probatorio=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];
                        $Resultado=$_POST["Resultado"];

                         if ( $Probatorio != "none" ){
                             $fp = fopen($Probatorio, "r+");
                             $contenido = fread($fp, $tamnio_rep);
                             $contenido = addslashes($contenido);
                             fclose($fp);


                             $query=$DB->CONSULTA("UPDATE `mgps`.`vinculaciones` SET `Fecha_Inicio` = '$Fecha_Inicio', `Ambito` = '$Ambito', `ProductoObtenido` = '$ProductoObtenido', `Evidencias` = '$Probatorio', `Sector` = '$Sector', `Mecanismo` = '$Mecanismo', `TipoVinculacion` = '$TipoVinc', `Institucion` = '$Institucion', `pais` = '$Pais', `Fecha_Final` = '$Fecha_Final', `Objetivo` = '$Objetivo', `Resultado` = '$Resultado', `Beneficio` = '$Beneficio' WHERE `No_vinculacion` = 'Id_Vinculacion'; ");

                             
                           }
                  }else{

                        Include_once('../php/conf_tab.php');
                        $DB= new ConfigDB();
                        $DB->Mysql();
                        
                        $Id_Act=$_SESSION["Segundo_informe"];
                        $Ambito=$_POST["Ambito"];
                        $ProductoObtenido=$_POST["ProductoObtenido"];
                        $Sector=$_POST["Sector"];
                        $Institucion=$_POST["Institucion"];
                        $Objetivo=$_POST["Objetivo"];
                        $Fecha_Inicio=$_POST["Fecha_Inicio"];
                        $Fecha_Final=$_POST["Fecha_Final"];
                        $TipoVinc=$_POST["TipoVinc"];
                        $Pais=$_POST['Pais'];
                        $Mecanismo=$_POST["Mecanismo"];
                        $Beneficio=$_POST["Beneficio"];
                        
                        switch ($_SESSION["LíneasAplicaciónDelConocimiento"]) {
                          case 'Calidad y mejoramiento en la educación superior':
                            $LGAC='CYMLES';
                            break;
                          case 'Gestión y planeación de la educación superio':
                            $LGAC='GYPLES';
                            break;
                          case 'Nuevos paradigmas de educación superior':
                            $LGAC='NPDES';
                            break;
                          case 'Políticas públicas y cambio institucional en la educación superior':
                            $LGAC='PPCIES';
                            break;
                          
                        }
                        $Probatorio1=$_FILES['Probatorio']["tmp_name"];
                        $tamnio_rep=$_FILES['Probatorio']["size"];
                        $nombre_Rep=$_FILES["Probatorio"]["name"];
                        $Tipo_Rep=$_FILES["Probatorio"]["type"];
                        $Resultado=$_POST["Resultado"];

                        if ( $Probatorio1 != "none" ){
                             $fp = fopen($Probatorio1, "r+");
                             $contenido = fread($fp, $tamnio_rep);
                             $contenido = addslashes($contenido);
                             fclose($fp);


                             $query=$DB->CONSULTA("INSERT INTO `mgps`.`vinculaciones` VALUES(0,'$Fecha_Inicio','$Ambito','$ProductoObtenido','$contenido','$Sector','$Mecanismo','$TipoVinc','$Institucion','$Pais','$LGAC','$Fecha_Final','$Id_Act','$Objetivo','$Resultado','$Beneficio');");
                         }
                  }
            }
            

            if (isset($_POST["Submit_Movilidad2"])) {
                Include_once('../php/conf_tab.php');
                    $DB= new ConfigDB();
                    $DB->Mysql();
                
                  $verdad=isset($_GET['id_Mov2']);
                  if ($verdad && $verdad==1) { 

                  $id=$_GET["id_Mov2"];
                  $Id_Act=$_SESSION["Segundo_informe"];
                  $Nombre=$_SESSION["NombreCompleto"];
                  $Pais=$_POST["Pais"];
                  $Tipo_Movilidad=$_POST["Tipo_Movilidad"];
                  $Ambito=$_POST["Ambito"];

                  $Institucion=$_POST["Institucion"];
                  $Objetivo=$_POST["Objetivo"];
                  $Producto=$_POST["Producto"];
                  $Fecha_Inicio=$_POST["Fecha_Inicio"];
                  $Fecha_Final=$_POST["Fecha_Final"];
                  $Institucion_apoyo=$_POST["Institucion_apoyo"];
                  $ApoyoEconomico=$_POST["ApoyoEconomico"];
                  $Planes_Trabajo_Movilidad=$_FILES["Planes_Trabajo_Movilidad"];

                  $Planes_Trabajo_Probatorio=$_FILES['Planes_Trabajo_Movilidad']["tmp_name"];
                  $Planes_Trabajo_tamnio_rep=$_FILES['Planes_Trabajo_Movilidad']["size"];
                  $Planes_Trabajo_nombre_Rep=$_FILES["Planes_Trabajo_Movilidad"]["name"];
                  $Planes_Trabajo_Tipo_Rep=$_FILES["Planes_Trabajo_Movilidad"]["type"];
                          
                  $Constancia_Probatorio=$_FILES['Constancia']["tmp_name"];
                  $Constancia_tamnio_rep=$_FILES['Constancia']["size"];
                  $Constancia_nombre_Rep=$_FILES["Constancia"]["name"];
                  $Constancia_Tipo_Rep=$_FILES["Constancia"]["type"];

                            if ( $Planes_Trabajo_Probatorio != "none" && $Constancia_Probatorio!="none" ){
                               $fp1 = fopen($Planes_Trabajo_Probatorio, "r+");
                               $fp2 = fopen($Constancia_Probatorio, "r+");
                               $contenido1 = fread($fp1, $Planes_Trabajo_tamnio_rep);
                               $contenido2 = fread($fp2, $Constancia_tamnio_rep);
                               $contenido1 = addslashes($contenido1);
                               $contenido2 = addslashes($contenido2);
                               fclose($fp1);
                               fclose($fp2);

                              
                              $query=$DB->CONSULTA("UPDATE `mgps`.`movilidadestudiantes` SET `Id_act` = '$Id_Act', `NombreEs` = '$Nombre', `Tipo_Movilidad` = '$Tipo_Movilidad', `Ambito` = '$Ambito', `Pais` = '$Pais', `Institucion` = '$Institucion', `Objetivo` = '$Objetivo', `Fecha_Inicio` = '$Fecha_Inicio', `Facha_Termino` = '$Fecha_Final', `Apoyo_Economico` = '$ApoyoEconomico', `Institucion_Apoyo` = Institucion_apoyo, `Plan_Trabajo` = '$contenido1', `Constancial` = '$contenido2' WHERE `RegistroMovilidadEs` = '$id'; ");

                            }

                }else{
                $Id_Act=$_SESSION["Segundo_informe"];
                $Nombre=$_SESSION["NombreCompleto"];
                $Pais=$_POST["Pais"];
                $Tipo_Movilidad=$_POST["Tipo_Movilidad"];
                $Ambito=$_POST["Ambito"];

                $Institucion=$_POST["Institucion"];
                $Objetivo=$_POST["Objetivo"];
                $Producto=$_POST["Producto"];
                $Fecha_Inicio=$_POST["Fecha_Inicio"];
                $Fecha_Final=$_POST["Fecha_Final"];
                $Institucion_apoyo=$_POST["Institucion_apoyo"];
                $ApoyoEconomico=$_POST["ApoyoEconomico"];
                
                $Planes_Trabajo_Probatorio=$_FILES['Planes_Trabajo_Movilidad']["tmp_name"];
                $Planes_Trabajo_tamnio_rep=$_FILES['Planes_Trabajo_Movilidad']["size"];
                $Planes_Trabajo_nombre_Rep=$_FILES["Planes_Trabajo_Movilidad"]["name"];
                $Planes_Trabajo_Tipo_Rep=$_FILES["Planes_Trabajo_Movilidad"]["type"];
                        
                $Constancia_Probatorio=$_FILES['Constancia']["tmp_name"];
                $Constancia_tamnio_rep=$_FILES['Constancia']["size"];
                $Constancia_nombre_Rep=$_FILES["Constancia"]["name"];
                $Constancia_Tipo_Rep=$_FILES["Constancia"]["type"];

                            if ( $Planes_Trabajo_Probatorio != "none" || $Constancia_Probatorio!="none" ){
                                 $fp1 = fopen($Planes_Trabajo_Probatorio, "r+");
                                 $fp2 = fopen($Constancia_Probatorio, "r+");
                                 $contenido1 = fread($fp1, $Planes_Trabajo_tamnio_rep);
                                 $contenido2 = fread($fp2, $Constancia_tamnio_rep);
                                 $contenido1 = addslashes($contenido1);
                                 $contenido2 = addslashes($contenido2);
                                 fclose($fp1);
                                 fclose($fp2);

                                 $query=$DB->CONSULTA("INSERT INTO `mgps`.`movilidadestudiantes` VALUES(0,'$Id_Act',' $Nombre','$Tipo_Movilidad','$Ambito','$Pais','$Institucion','$Objetivo','$Fecha_Inicio','$Fecha_Final','$ApoyoEconomico','$Institucion_apoyo','$contenido2','$contenido2');");
                            }
                             
                }
            }
 
          

        function ArticuloDifucion2(){?>
               <form name="form201" id="Alter201" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> id='Produccion1' method='post' enctype='multipart/form-data'>
  
                <div class="form-group">
                  			<div class="row">
                  				<div class="col-md-8">
                                    <h3>artículo de Difusión y Divulgación</h3>
                                </div>
                                <div class="col-md-12">
                                    <hr class="red">
                                </div>
                  			</div>
                  			<div class="row" style="margin-bottom: 25px;">
                  				<div class="col-md-4">
                  					<label >Autor(es)</label>
                  					<input class="form-control" type="text" name="Autores" id="AUTORES201" maxlength="255" required>
                  				</div>
                  				<div class="col-md-4">
                  					<label>Título del artículo</label>
                  					<input type="text" name="Titulo" id="Titulo201" class="form-control" maxlength="255" required > 
                  				</div>
                  				<div class="col-md-4">
                  					<label class="control-label">Estado actual</label>
                    				<select name="Estado" id="ESTADOACTUAL201" class="form-control" required>
                    					<option value="0">Selecciona el estado actual</option>
                              <option value="1">Aceptado</option>
                              <option value="2">Publicado</option>
                            </select>
                  				</div>
                  			</div>
                  			<div class="row" style="margin-bottom: 25px;">
                  				<div class="col-md-4">
                  					<label >Nombre de la Revista</label>
                  					<input class="form-control" type="text" id="REVISTA201" name="REVISTA" maxlength="255" required>
                  				</div>
                  				<div class="col-md-4">
                  					<label >De la página</label>
                  					<input class="form-control" type="number" id="DELAPAGINA201" name="DelaPagina" required>
                  				</div>
                  				<div class="col-md-4">
                  					<label >A la página</label>
                  					<input class="form-control" type="number" id="ALAPAGINA201" name="ALAPAGINA"  required>
                  				</div>
                  			</div>
                          <div class="row" style="margin-bottom: 25px;">
                            <?php 
                                echo formPais();
                             ?>

                  				<div class="col-md-4">
                  					<label>Editorial</label>
                  					<input class="form-control" type="text" id="EDITORIAL201" name="EDITORIAL" maxlength="64" required>
                  				</div>
                  				<div class="col-md-4">
                  					<label >Volumen</label>
                  					<input class="form-control" type="text" id="VOLUMEN201" name="VOLUMEN" maxlength="64" >
                  				</div>
                  			</div>
                  			<div class="row" style="margin-bottom: 25px;">
                  				<div class="col-md-4">
                  					<label >ISSN</label>
                  					<input class="form-control" type="text" id="ISBN201" name="ISBN" maxlength="64" required>
                  				</div>
                  				<div class="col-md-4">
                                    <div class="form-group datepicker-group">
          								<label>Fecha Publicación</label>
          								<input class="form-control" id="ANIO2" name="ANIO" type="date" maxlength="10" >
          							</div>
                  				</div>
                  				<div class="col-md-4">
                  					<label class="control-label">Propósito</label>
                  					<select  name="PROPOSITO" class="form-control" required>
                  						<option selected="selected">Seleccione el propósito</option>
                  						<option >Asimilación de tecnología</option>
                  						<option >Creación</option>
                  						<option >Desarrollo tecnológico</option>
                  						<option >Difusión</option>
                  						<option >Generación de conocimiento</option>
                  						<option >Investigación aplicada</option>
                  						<option >Transferencia de tecnología</option>
                  					</select>
                  				</div>
                  			</div>
                            <div class="row" style="margin-bottom: 25px;";">
                                <div class="col-md-4">
                                    <label>Probatorio</label>
                                    <input class="form-control" type="file" name="Probatorio" id="Probatorio2" required>
                                </div>
                            </div>
                        <input type='submit' value='Guardar' class='Botones' name="Submit201" >
                        <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                    </div>
                </form>
        <?php }


        function articuloArbitrado2(){?>
           <form name="form202" id="Alter202" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> id='Movilidad1' method='post' enctype='multipart/form-data'>
           
             <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                              <h3>artículo Arbitrado</h3>
                            </div>
                            <div class="col-md-12">
                                <hr class="red">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <label >Autor(es)</label>
                                <input class="form-control" type="text" name="AUTORES" id="AUTORES202" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <label>Título del artículo</label>
                                <input type="text" class="form-control" name="Titulo" id="Titulo202" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Estado actual</label>
                                <select name="Estado" id="Estado2" class="form-control" required>
                                    <option value="0">Selecciona el estado actual</option>
                                    <option value="1">Aceptado</option>
                                    <option value="2">Publicado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <label >Nombre de la Revista</label>
                                <input class="form-control" type="text" id="REVISTA202" name="REVISTA" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <label >De la página</label>
                                <input class="form-control" type="number" id="DELAPAGINA202" name="DELAPAGINA" required>
                            </div>
                            <div class="col-md-4">
                                <label >A la página</label>
                                <input class="form-control" type="number" id="ALAPAGINA202" name="ALAPAGINA"  required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 25px;">
                            <?php 
                                echo formPais();
                             ?>

                            <div class="col-md-4">
                                <label>Editorial</label>
                                <input class="form-control" type="text" id="EDITORIAL202" name="EDITORIAL" maxlength="64" required>
                            </div>
                            <div class="col-md-4">
                                <label >Volumen</label>
                                <input class="form-control" type="text" id="VOLUMEN202" name="VOLUMEN" maxlength="64" >
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <label >ISSN</label>
                                <input class="form-control" type="text" id="ISBN202" name="ISBN" maxlength="64" required>
                            </div>
                            <div class="col-md-4"><div class="form-group datepicker-group">
                                <label>Fecha Publicación</label>
                                <input class="form-control" id="ANIO202" name="ANIO" type="date" >
                            </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Propósito</label>
                                <select  name="selPROPOSITO" class="form-control" required>
                                    <option selected="selected">Seleccione el propósito</option>
                                    <option >Asimilación de tecnología</option>
                                    <option >Creación</option>
                                    <option >Desarrollo tecnológico</option>
                                    <option >Difusión</option>
                                    <option >Generación de conocimiento</option>
                                    <option >Investigación aplicada</option>
                                    <option >Transferencia de tecnología</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <label>Descripción</label>
                                <textarea name="Descripcion" rows="1" cols="80" class="form-control" id="Descripcion202" ></textarea>
                            </div>
                            <div class="col-md-4">
                                <label>Probatorio</label>
                                <input class="form-control" type="file" name="Probatorio" id="Probatorio202" required>
                            </div>

                        </div>
                        
                            <input type='submit' name="Submit202" value='Guardar' class='Botones' >
                            <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                </div>
            </form>
        
        <?php  }
        function RevistaIndexada2(){?>
            <form name="form203" id="Alter203" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
            
              <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <h3>artículo en revista indexada</h3>
                    </div>
                    <div class="col-md-12">
                        <hr class="red">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                        <label class="control-label">Autor(es)</label>
                        <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES203" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Título del artículo</label>
                        <input class="form-control ns_" type="text" name="TITULO" id="TITULO203" maxlength="255" required>   
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Estado actual</label>
                        <select id="ESTADOACTUAL203" name="ESTADOACTUAL" class="form-control" required>
                            <option value="0">Selecciona el estado actual</option>
                            <option value="1">Aceptado</option>
                            <option value="2">Publicado</option> 
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                        <label class="control-label">Nombre de la Revista</label>
                        <input class="form-control ns_" type="text" name="REVISTA" id="REVISTA203" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">De la página</label>
                        <input class="form-control ns_" type="number" name="DELAPAGINA" id="DELAPAGINA203" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">A la página</label>
                        <input class="form-control ns_" type="number" name="ALAPAGINA" id="ALAPAGINA203" required="">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;";">
                    <div class="col-md-4">
                        <label class="control-label">Descripción</label>
                        <textarea name="COMENTARIOS" id="COMENTARIOS203" cols="30" rows="1" class="form-control" required></textarea>
                    </div>

                    <?php echo formPais(); ?>

                    <div class="col-md-4">
                        <label class="control-label">Editorial</label>
                        <input class="form-control ns_" type="text" name="EDITORIAL" id="EDITORIAL203" maxlength="255" required>    
                    </div>

                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                        <label class="control-label">Volumen</label>
                        <input class="form-control ns_" type="text" name="VOLUMEN" id="VOLUMEN203" maxlength="64" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">ISSN</label>
                        <input class="form-control ns_" type="text" name="ISBN" id="ISBN203" maxlength="64" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Índice de registro de la revista</label>
                        <input class="form-control ns_" type="text" name="Indice" id="Indice" maxlength="64">      
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                        <div class="form-group datepicker-group">
                            <label class="control-label" for="ANIO4">Fecha Publicación</label>
                            <input class="form-control ns_ hasDatepicker" id="ANIO4" name="ANIO" type="date" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Probatorio</label>
                        <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT4" required>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Propósito</label>
                        <select id="selPROPOSITO4" name="selPROPOSITO" class="form-control" required>
                            <option value="0" selected="selected">Seleccione el propósito</option>
                            <option value="5">Asimilación de tecnología</option>
                            <option value="8">Creación</option>
                            <option value="9">Desarrollo tecnológico</option>
                            <option value="1">Difusión</option> 
                            <option value="7">Generación de conocimiento</option>
                            <option value="2">Investigación aplicada</option>
                            <option value="6">Transferencia de tecnología</option>
                        </select>
                    </div>
                  </div>
                <input type='submit' name="Submit203" value='Guardar' class='Botones' >
                <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
            </div>
            </form>

        <?php }
        function CapituloDeLibro2(){?>
            <form name="form204" id="Alter204" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
           
              <div class="form-group">
                  <div class="row">
                      <div class="col-md-8">
                          <h3>datos Generales del Libro</h3>
                      </div>
                      <div class="col-md-12">
                            <hr class="red">
                        </div>
                  </div>

                  <div class="row" style="margin-bottom: 25px;">
                      <div class="col-md-4">
                          <label class="control-label">Autor(es) del Libro</label>
                          <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES4" maxlength="255" required>
                      </div>
                      <div class="col-md-4">
                          <label class="control-label">Título del Libro</label>
                          <input class="form-control ns_" type="text" name="TITULO" id="TITULO4" maxlength="255" required>
                      </div>
                      <div class="col-md-4">
                          <label class="control-label">Estado actual del Libro</label>
                          <select id="selESTADOACTUAL4" name="selESTADOACTUAL" class="form-control" required>
                              <option value="0">Selecciona el estado actual</option>  
                              <option value="1">Aceptado</option>
                              <option value="2">Publicado</option>
                          </select>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 25px;">
                      <?php   echo formPais(); ?>

                      <div class="col-md-4">
                          <label class="control-label">Editorial</label>
                          <input class="form-control ns_" type="text" name="EDITORIAL" id="EDITORIAL4" maxlength="64" required>
                      </div>
                      <div class="col-md-4">
                          <label class="control-label">Edición</label>
                          <input class="form-control ns_" type="text" name="NOEDICIONES" id="NOEDICIONES4" maxlength="4" required>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 25px;">
                      <div class="col-md-4">
                          <label class="control-label">Tiraje</label>
                          <input class="form-control ns_" type="number" name="TOTALEJEMPLARES" id="TOTALEJEMPLARES4" maxlength="10" >
                      </div>
                      <div class="col-md-4">
                          <label class="control-label">ISBN:</label>
                          <input class="form-control" type="text" name="ISBN" id="ISBN4" maxlength="64" required>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group datepicker-group">
                              <label class="control-label" for="ANIO6">Fecha publicación</label>
                              <input class="form-control ns_ hasDatepicker" id="ANIO6" name="ANIO" type="date" required>
                          </div>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 25px;">
                      <div class="col-md-4">
                          <label class="control-label">Propósito</label>
                          <select id="selPROPOSITO4" name="selPROPOSITO" class="form-control" >
                              <option value="0" selected="selected">Seleccione el propósito</option>
                              <option value="5">Asimilación de tecnología</option>
                              <option value="8">Creación</option>
                              <option value="9">Desarrollo tecnológico</option>
                              <option value="1">Difusión</option> 
                              <option value="7">Generación de conocimiento</option>
                              <option value="2">Investigación aplicada</option>
                              <option value="6">Transferencia de tecnología</option>
                          </select>
                      </div>
                  </div>
                </div>

                  <!--********************** Datos del capitulo  *****************************-->
              <div class="form-group">
                      <div class="row" style="margin-top:25px">
                          <div class="col-md-8">
                              <h3>datos del Capítulo de Libro</h3>
                          </div>
                          <div class="col-md-12">
                              <hr class="red">
                          </div>
                      </div>
                      <div class="row" style="margin-bottom: 25px;">
                          <div class="col-md-4">
                              <label class="control-label">Título del capítulo</label>
                              <input class="form-control ns_" type="text" name="TITULOCAPITULO" id="TITULOCAPITULO4" maxlength="255" required>
                          </div>
                          <div class="col-md-4">
                              <label class="control-label">Autor(es) del Capítulo</label>
                              <input class="form-control ns_" type="text" name="AUTORESCAP" id="AUTORESCAP4" maxlength="255" required>
                          </div>
                          <div class="col-md-4">
                              <label class="control-label">De la página:</label>
                              <input class="form-control" type="number" name="DELAPAGINA" id="DELAPAGINA4" required>
                          </div >
                      </div>
                      <div class="row" style="margin-bottom: 25px;">
                          <div class="col-md-4">
                              <label class="control-label">A la página:</label>
                              <input class="form-control" type="number" name="ALAPAGINA" id="ALAPAGINA4" required>
                          </div>
                          <div class="col-md-4">
                            <label class="control-label">Probatorio</label>
                            <input class="form-control" type="file" name="Probatorio" id="REGISTROPAT4" required>
                          </div>
                      </div>

                <input type='submit' name="Submit204" value='Guardar' class='Botones' >
                <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                </div>
            </form>

        <?php }
        function consultoria2(){ ?>
            <form name="forma205" id="Alter205" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_">
              <div class="row">
                <div class="col-md-8">
                    <h3>Consultoría</h3>
                </div>
                <div class="col-md-12">
                    <hr class="red">
                </div>
              </div>
              <div class="form-group">
                    <div class="row" style="margin-bottom: 25px;">
                      <div class="col-md-4">
                          <label class="control-label">Nombre del estudio o proyecto <br>realizado</label>
                          <input class="form-control ns_" type="text" name="TITULO" id="TITULO205" maxlength="255" required>
                          
                      </div>
                      <div class="col-md-4">
                          <br><label class="control-label">Alcance/Objetivo</label>
                          <input class="form-control ns_" type="text" name="COMENTARIOS" id="COMENTARIOS205" maxlength="255" required>
                      </div>
                      <div class="col-md-4">
                          <br><label class="control-label">Empresa o dependencia beneficiaria</label>
                          <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT205" maxlength="255" required>
                          
                      </div>
                    </div>
                      <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                            <label class="control-label">Estado actual</label>
                            <select id="selESTADOACTUAL205" name="selESTADOACTUAL" class="form-control" required>
                                <option value="6">Terminado</option>
                                <option value="205">En proceso</option>
                            </select>
                        </div>
                        <?php echo formPais(); ?>
                        <div class="col-md-4">
                          <div class="form-group datepicker-group">
                                <label class="control-label" for="ANIO205">Fecha de inicio del proyecto</label>
                                <input class="form-control ns_ hasDatepicker" id="ANIO205" name="ANIO" type="date" required>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <label class="control-label">Otros investigadores participantes</label>
                                <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES205" maxlength="255">
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Beneficio económico para la institución</label>
                                <input class="form-control ns_" type="number" name="USO" id="USO205" required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Probatorio</label>
                                <input class="form-control" type="file" name="Probatorio" id="REGISTROPAT205" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <input type='submit' name="Submit205" value='Guardar' class='Botones' >
                               <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                            </div>
                        </div>
                        
                    </div>
            </form>

        <?php }
        function InformeTecnico2(){?>
            <form name="forma206" id="Alter206" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_">
             <div class="row">
                <div class="col-md-8">
                    <h3>Informe técnico</h3>
                </div>
                <div class="col-md-12">
                    <hr class="red">
                </div>
             </div>
                
              <div class="form-group">
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                        <label class="control-label">Nombre del estudio o proyecto <br>realizado</label>
                        <input class="form-control ns_" type="text" name="TITULO" id="TITULO206" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                        <br><label class="control-label">Alcance/Objetivo</label>
                        <input class="form-control ns_" type="text" name="COMENTARIOS" id="COMENTARIOS206" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                        <br><label class="control-label">Empresa o dependencia beneficiaria</label>
                        <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT206" maxlength="255" >
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">Estado actual</label>
                    <select id="selESTADOACTUAL206" name="selESTADOACTUAL" class="form-control" required>
                      <option value="206">Terminado</option>
                      <option value="5">En proceso</option> 
                    </select>
                  </div>
                  <?php echo formPais(); ?>
                  <div class="col-md-4">
                    <div class="form-group datepicker-group">
                      <label class="control-label" for="ANIO206">Fecha de inicio del proyecto</label>
                      <input class="form-control ns_ hasDatepicker" id="ANIO206" name="ANIO" type="date" maxlength="10" required>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">Otros investigadores participantes</label>
                    <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES206" maxlength="255">
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Beneficio económico para la institución</label>
                    <input class="form-control ns_" type="number" name="USO" id="USO206" maxlength="6">
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Probatorio</label>
                    <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT206" required>
                  </div>
                </div>
                    <input type='submit' name="Submit206" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
            </div>
            </form>

        <?php }
        function Libro2(){?>
            <form name="forma207" id="Alter207" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
                <div class="row">
                <div class="col-md-8">
                  <h3>libro</h3>
                </div>
                <div class="col-md-12">
                        <hr class="red">
                    </div>
              </div>
                <div class="form-group">
              <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">Autor(es)</label>
                    <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES207" maxlength="255" required>
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Título del Libro</label>
                    <input class="form-control ns_" type="text" id="TITULO207" name="TITULO" maxlength="255" required>
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Tipo de participación</label>
                    <select name="ESTADO" id="ESTADO207" class="form-control" required>  
                      <option value="Autor">Autor</option>
                      <option value="Compilador">Compilador</option>
                      <option value="Editor">Editor</option>
                      <option value="Coordinador">Coordinador</option>
                      <option value="Traductor">Traductor</option>      
                    </select>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">Estado actual</label>
                    <select name="selESTADOACTUAL" id="selESTADOACTUAL207" class="form-control" required>  
                        <option value="0">Selecciona el estado actual</option>
                        <option value="1">Aceptado</option>
                        <option value="2">Publicado</option>
                    </select>
                  </div>
                  <?php echo formPais(); ?>
                  <div class="col-md-4">
                    <label class="control-label">Editorial</label>
                    <input class="form-control ns_" type="text" id="EDITORIAL207" name="EDITORIAL" maxlength="64" required>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">Páginas</label>
                    <input class="form-control ns_" type="number" id="PAGINAS207" name="PAGINAS" maxlength="10" required>
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Edición</label>
                    <input class="form-control ns_" type="number" id="NOEDICIONES207" name="NOEDICIONES" required>
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Tiraje</label>
                    <input class="form-control ns_" type="number" id="TOTALEJEMPLARES207" name="TOTALEJEMPLARES" maxlength="10" >
                  </div>
              </div>
              <div class="row" style="margin-bottom: 25px;">
                  <div class="col-md-4">
                    <label class="control-label">ISBN</label>
                    <input class="form-control ns_" type="text" id="ISBN207" name="ISBN" maxlength="64" required>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group datepicker-group">
                        <label for="ANIO207">Fecha Publicación</label>
                        <input class="form-control ns_ hasDatepicker" id="ANIO207" name="ANIO" type="date" maxlength="10" required>
                      </div>
                </div>
                <div class="col-md-4">
                  <label class="control-label">Propósito</label>
                  <select id="selPROPOSITO207" name="selPROPOSITO" class="form-control" required>  
                    <option value="0" selected="selected">Seleccione el propósito</option>
                    <option value="5">Asimilación de tecnología</option>
                    <option value="8">Creación</option>
                    <option value="9">Desarrollo tecnológico</option>
                    <option value="1">Difusión</option> 
                    <option value="207">Generación de conocimiento</option>
                    <option value="2">Investigación aplicada</option>
                    <option value="6">Transferencia de tecnología</option>  
                  </select>
                  
                </div>
              </div>
              <div class="row" style="margin-bottom: 25px;";">
                  <div class="col-md-4">
                        <label class="control-label">Probatorio</label>
                        <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT5" required>
                  </div>
                </div>
                    <input type='submit' name="Submit207" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                </div>
            </form>

        <?php }
        function ManualesDeOperacion2(){?>
            <form name="forma208" id="Alter208" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>class="ns_">
            <div class="row">
                <div class="col-md-208">
                    <h3>Manuales de operación</h3>
                </div>
                <div class="col-md-12">
                    <hr class="red">
                </div>
            </div>
            
                <div class="form-group">
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                          <label class="control-label">Autor(es)</label>
                          <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES208" maxlength="255" required>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Nombre del manual</label>
                          <input class="form-control ns_" type="text" name="TITULO" id="TITULO208" maxlength="255" required>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Descripción</label>
                          <textarea name="COMENTARIOS" class="form-control" id="COMENTARIOS208" cols="30" rows="1" required></textarea>
                        </div>
                    </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Institución beneficiaria</label>
                      <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT208" maxlength="255" required>
                    </div>
                      <?php echo formPais(); ?>
                    <div class="col-md-4">

                        <label for="ANIO208">Fecha publicación</label>
                        <input class="form-control ns_" id="ANIO208" name="ANIO" type="date" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Propósito</label>
                      <select name="selPROPOSITO" id="selPROPOSITO208" class="form-control" required>
                        <option value="0" selected="selected">Seleccione el propósito</option>
                        <option value="5">Asimilación de tecnología</option>
                        <option value="208">Creación</option>
                        <option value="9">Desarrollo tecnológico</option>
                        <option value="1">Difusión</option> 
                        <option value="7">Generación de conocimiento</option>
                        <option value="2">Investigación aplicada</option>
                        <option value="6">Transferencia de tecnología</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Probatorio</label>
                        <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT208" required>
                    </div>
                </div>
                    <input type='submit' name="Submit208" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                </div>
            </form>

        <?php }
        function MaterialDeApoyo2(){?>
            <form name="forma209" id="Alter209" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-8">
                        <h3>Material de apoyo</h3>
                    </div>
                    <div class="col-md-12">
                        <hr class="red">
                    </div>
                </div>
                <div class="form-group">
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Autor(es)</label>
                      <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES209" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Título</label>
                      <input class="form-control ns_" type="text" id="TITULO209" name="TITULO" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Descripción</label>
                      <textarea name="COMENTARIOS" id="COMENTARIOS209" cols="30" rows="1" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Institución beneficiaria</label>
                      <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT209" maxlength="255">
                    </div>
                    <?php formPais(); ?>
                    <div class="col-md-4">
                        <div class="form-group datepicker-group">
                            <label class="control-label" for="ANIO209">Fecha Publicación</label>
                            <input class="form-control ns_ hasDatepicker" id="ANIO209" name="ANIO" type="date" required>
                        </div>
                    </div>
                </div>
            
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Propósito</label>
                      <select name="selPROPOSITO" id="selPROPOSITO209" class="form-control" required>
                        <option value="0" selected="selected">Seleccione el propósito</option>
                        <option value="5">Asimilación de tecnología</option>
                        <option value="8">Creación</option>
                        <option value="209">Desarrollo tecnológico</option>
                        <option value="1">Difusión</option> 
                        <option value="7">Generación de conocimiento</option>
                        <option value="2">Investigación aplicada</option>
                        <option value="6">Transferencia de tecnología</option>
                      </select>     
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Probatorio</label>
                        <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT209" required>
                    </div>
                </div>
                    <input type='submit' name="Submit209" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                </div>
            </form>


        <?php }
        function MaterialDidactico2(){?>
            <form name="forma210" id="Alter210" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-8">
                        <h3>material didáctico</h3>
                    </div> 
                    <div class="col-md-12">
                        <hr class="red"></div>
                    </div>
                <div class="form-group">
                
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Autor(es)</label>
                      <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES210" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Título</label>
                      <input class="form-control ns_" type="text" id="TITULO210" name="TITULO" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Descripción</label>
                      <textarea name="COMENTARIOS" id="COMENTARIOS210" cols="30" rows="1" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Institución beneficiaria</label>
                      <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT210" maxlength="255" required>
                    </div>
                    <?php formPais(); ?>
                    <div class="col-md-4">
                        <label class="control-label">Fecha Publicación</label>
                        <input class="form-control ns_" id="ANIO210" name="ANIO" type="date" required">
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Propósito</label>
                      <select name="selPROPOSITO" id="selPROPOSITO210" class="form-control" required>
                        <option value="0" selected="selected">Seleccione el propósito</option>
                        <option value="5">Asimilación de tecnología</option>
                        <option value="8">Creación</option>
                        <option value="9">Desarrollo tecnológico</option>
                        <option value="1">Difusión</option> 
                        <option value="7">Generación de conocimiento</option>
                        <option value="2">Investigación aplicada</option>
                        <option value="6">Transferencia de tecnología</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Probatorio</label>
                        <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT210" required>
                    </div>
                </div>
                <input type='submit' name="Submit210" value='Guardar' class='Botones' >
                <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
            </div>
            </form>


        <?php }
        function Memorias2(){?>
          <form name="forma211" id="Alter211" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-8">
                    <h3>memorias</h3>
                </div>
                <div class="col-md-12">
                    <hr class="red">
                </div>
            </div>
            <div class="form-group">
            
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-md-4">
                  <br><label class="control-label">Autor(es)</label>
                  <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES211" maxlength="255" required>
                </div>
                <div class="col-md-4">
                  <br><label class="control-label">Título de la presentación</label>
                  <input class="form-control ns_" type="text" name="TITULO" id="TITULO211" maxlength="255" required>
                </div>
                <div class="col-md-4">
                  <label class="control-label">Nombre del congreso donde se<br> presentó</label>
                  <input class="form-control ns_" type="text" id="COMENTARIOS211" name="COMENTARIOS" maxlength="255" required>
                </div>
            </div>
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-md-4">
                  <label class="control-label">Estado actual</label>
                  <select id="selESTADOACTUAL211" name="selESTADOACTUAL" class="form-control" required>
                      <option value="0">Selecciona el estado actual</option>
                      <option value="1">Aceptado</option>
                      <option value="2">Publicado</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="control-label">De la página</label>
                  <input class="form-control ns_" type="number" name="DELAPAGINA" id="DELAPAGINA211" required>
                </div>
                <div class="col-md-4">
                  <label class="control-label">A la página</label>
                  <input class="form-control ns_" type="number" id="ALAPAGINA211" name="ALAPAGINA" required >
                </div>
            </div>
            <div class="row" style="margin-bottom: 25px;">
                  <?php echo formPais(); ?>
                <div class="col-md-4">
                  <label class="control-label">Estado</label>
                  <input class="form-control ns_" type="text" name="ESTADO" id="ESTADO211" maxlength="255" required>
                </div>
                <div class="col-md-4">
                  <label class="control-label">Ciudad</label>
                  <input class="form-control ns_" type="text" id="CIUDAD211" name="CIUDAD" maxlength="255" required>
                </div>
            </div>
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-md-4">
                    <label class="control-label">Fecha Publicación</label>
                    <input class="form-control " id="ANIO211" name="ANIO" type="date" required>
                </div>
                <div class="col-md-4">
                  <label class="control-label">Propósito</label>
                  <select name="selPROPOSITO" id="selPROPOSITO211" class="form-control" required>
                    <option value="0" selected="selected">Seleccione el propósito</option>
                    <option value="5">Asimilación de tecnología</option>
                    <option value="8">Creación</option>
                    <option value="9">Desarrollo tecnológico</option>
                    <option value="1">Difusión</option> 
                    <option value="7">Generación de conocimiento</option>
                    <option value="2">Investigación aplicada</option>
                    <option value="6">Transferencia de tecnología</option>
                  </select>         
                </div>
                <div class="col-md-4">
                    <label class="control-label">Probatorio</label>
                    <input class="form-control" type="file" name="REGISTROPAT" id="REGISTROPAT211" required>
                </div>
            </div>
                <input type='submit' name="Submit211" value='Guardar' class='Botones' >
                <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
            </div>
          </form>

        <?php }
        function ProductividadInnovadora2(){?>
            <form name="forma212" id="Alter212" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_">
                <div class="row">
                    <div class="col-md-8">
                        <h3>productividad Innovadora</h3>
                    </div>
                    <div class="col-md-212">
                        <hr class="red">
                    </div>
                </div>
              <div class="form-group">
                
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Autor(es)</label>
                      <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES212" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Tipo de Productividad Innovadora</label>
                      <select id="PAGINAS212" name="PAGINAS" class="form-control">
                        <option value="1" selected="selected">Patente</option>
                        <option value="2">Modelo de utilidad</option>
                        <option value="3">Marca</option>
                        <option value="4">Denominación de origen</option> 
                        <option value="5">Diseño de herramientas</option> 
                      </select>         
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Título</label>
                      <input class="form-control ns_" type="text" id="TITULO212" name="TITULO" maxlength="255" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Descripción</label>
                      <textarea name="COMENTARIOS" id="COMENTARIOS212" cols="30" rows="1" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Clasificación Internacional de Patentes</label>
                      <select id="VOLUMEN212" name="VOLUMEN" class="form-control" required>
                        <option value="0" selected="selected">Seleccione un valor</option>
                        <option value="A. Necesidades corrientes de la vida">A. Necesidades corrientes de la vida</option>
                        <option value="B. Técnicas industriales diversas; Transportes">B. Técnicas industriales diversas; Transportes</option>
                        <option value="C. Química; Metalurgía">C. Química; Metalurgía</option>
                        <option value="D. Textiles; Papel">D. Textiles; Papel</option>
                        <option value="E. Construcciones fijas">E. Construcciones fijas</option>
                        <option value="F. Mecánica; Iluminación; Calefacción; Armamento; Voladura">F. Mecánica; Iluminación; Calefacción; Armamento; Voladura</option>
                        <option value="G. Física</">G. Física</option>
                        <option value="H. Electricidad">H. Electricidad</option>
                      </select>        
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Uso</label>
                      <input class="form-control ns_" type="text" name="USO" id="USO212" maxlength="255" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Estado actual</label>
                      <select id="selESTADOACTUAL212" name="selESTADOACTUAL" class="form-control" required>  
                        <option value="0">Seleciona el estado actual</option>
                        <option value="3">En trámite</option>
                        <option value="4">Registrada</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Número de registro</label>
                      <input class="form-control" type="text" name="REGISTROPAT" id="REGISTROPAT212" maxlength="128" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Usuario</label>
                      <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT212" maxlength="255" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                  <?php echo formPais(); ?>
                    <div class="col-md-4">
                        <label class="control-label" for="ANIO7">Fecha Publicación</label>
                        <input class="form-control ns_ hasDatepicker" id="ANIO212" name="ANIO" type="date" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Probatorio</label>
                      <input class="form-control ns_" type="FILE" id="Archivo212" name="Archivo" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Propósito</label>
                      <select name="selPROPOSITO" id="selPROPOSITO212" class="form-control">
                        <option value="0" selected="selected">Seleccione el propósito</option>
                        <option value="5">Asimilación de tecnología</option>
                        <option value="8">Creación</option>
                        <option value="9">Desarrollo tecnológico</option>
                        <option value="1">Difusión</option> 
                        <option value="7">Generación de conocimiento</option>
                        <option value="2">Investigación aplicada</option>
                        <option value="6">Transferencia de tecnología</option>
                      </select>     
                    </div>
                </div>
                        <input type='submit' name="Submit212" value='Guardar' class='Botones' >
                        <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
              </div>
            </form>


        <?php }
        function ProduccionArtistica2(){?>

                <form name="forma213" id="Alter213" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>producción artística</h3>
                        </div>
                        <div class="col-md-12">
                            <hr class="red">
                        </div>
                    </div>
                  <div class="form-group">
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                          <label class="control-label">Tipo de producción</label>
                          <select name="ESTADO" id="TIPOProduccion" class="form-control">
                            <option value="Caricatura e Historia">Caricatura e Historia</option>
                            <option value="CreaciÃ³n artÃ­stica">Creación artística</option> 
                            <option value="CoreografÃ­a">Coreografía</option> 
                            <option value="ComposiciÃ³n musical">Composición musical</option>
                            <option value="DirecciÃ³n y guiÃ³n cinematogrÃ¡fico">Dirección y guión cinematográfico</option>    
                            <option value="DiseÃ±o de escenografÃ­a, iluminaciÃ³n y vestuario">Diseño de escenografía, iluminación y vestuario</option>
                            <option value="Dramaturgia">Dramaturgia</option>
                            <option value="Escultura, grÃ¡fica y pintura">Escultura, gráfica y pintura</option>
                            <option value="FotografÃ­a">Fotografía</option>
                            <option value="Letras">Letras</option>
                            <option value="Medios alternativos">Medios alternativos</option>
                            <option value="Multimedia">Multimedia</option> 
                            <option value="Programas de radio y televisiÃ³n">Programas de radio y televisión</option>
                            <option value="Puesta en escena">Puesta en escena</option>
                            <option value="Video">Video</option>      
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Autor(es)</label>
                          <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES213" maxlength="255" required>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Nombre de la obra</label>
                          <input class="form-control ns_" type="text" name="TITULO" id="TITULO213" maxlength="255" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                          <br><label class="control-label">Descripción</label>
                          <textarea name="COMENTARIOS" id="COMENTARIOS213" cols="30" rows="1" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Describa el impacto de la producción artística para la investigación</label>
                          <textarea name="INVESTIGACION" id="INVESTIGACION213" cols="30" rows="1" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-4">
                          <br><label class="control-label">Describa el impacto en  metodología</label>
                          <textarea name="METODOLOGIA" id="METODOLOGIA213" cols="30" rows="1" class="form-control" required></textarea> 
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                          <label class="control-label">Describa el impacto en diseño</label>
                          <textarea name="DISENO" id="DISENO213" cols="30" rows="1" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Describa el impacto en innovación</label>
                          <textarea name="INNOVACION" id="INNOVACION213" cols="30" rows="1" class="form-control" required></textarea>
                        </div>
                        <?php echo formPais(); ?>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                            <label class="control-label" for="ANIO10">Fecha Publicación</label>
                            <input class="form-control ns_" id="ANIO213" name="ANIO" type="date" required>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Lugares donde se presentó</label>
                          <input class="form-control ns_" type="text" name="TITULOCAPITULO" id="TITULOCAPITULO213" maxlength="255" required>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Probatorio</label>
                          <input class="form-control ns_" type="FILE" id="Archivo213" name="Archivo" maxlength="50" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-4">
                          <br><label class="control-label">Propósito</label>
                          <select name="selPROPOSITO" id="selPROPOSITO213" class="form-control" required>
                            <option value="0" selected="selected">Seleccione el propósito</option>
                            <option value="5">Asimilación de tecnología</option>
                            <option value="8">Creación</option>
                            <option value="9">Desarrollo tecnológico</option>
                            <option value="1">Difusión</option> 
                            <option value="7">Generación de conocimiento</option>
                            <option value="2">Investigación aplicada</option>
                            <option value="6">Transferencia de tecnología</option>
                          </select>       
                        </div>
                    </div>
                        <input type='submit' name="Submit213" value='Guardar' class='Botones' >
                        <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
                  </div>
                </form>

        <?php }
        function Prototipo2(){?>
            <form name="forma214" id="Alter214" method="post" enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Prototipo</h3>
                    </div>
                    <div class="col-md-12">
                        <hr class="red">
                    </div>
                </div>
              <div class="form-group">
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Autor(es)</label>
                      <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES214" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Tipo de Prototipo</label>
                      <select id="PAGINAS214" name="PAGINAS" class="form-control" required>
                        <option value="0" selected="selected">Seleccione el tipo de prototipo</option>
                        <option value="1">Arquitectónico</option>
                        <option value="2">Programa de cómputo</option>
                        <option value="3">Diseño Industrial</option>
                        <option value="4">Desarrollo Industrial</option>            
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Estado actual</label>
                      <select id="selESTADOACTUAL214" name="selESTADOACTUAL" class="form-control">
                        <option value="6">Terminado</option>
                        <option value="5">En proceso</option>
                      </select>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Nombre del prototipo</label>
                      <input class="form-control ns_" type="text" name="TITULO" id="TITULO214" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Objetivo</label>
                      <input class="form-control ns_" type="text" name="COMENTARIOS" id="COMENTARIOS214" maxlength="255" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Características</label>
                      <input class="form-control ns_" type="text" name="USO" id="USO214" maxlength="255" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Institución para la que fue creado</label>
                      <input class="form-control ns_" type="text" name="USUARIOPAT" id="USUARIOPAT214" maxlength="255" required>
                    </div>
                    <?php echo formPais(); ?>
                    <div class="col-md-4">
                        <label class="control-label">Fecha Publicación</label>
                        <input class="form-control ns_ hasDatepicker" id="ANIO214" name="ANIO" type="date" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-md-4">
                      <label class="control-label">Probatorio</label>
                      <input class="form-control ns_" type="file" id="Archivo214" name="Archivo" required>
                    </div>
                    <div class="col-md-4">
                      <label class="control-label">Propósito</label>
                      <select name="selPROPOSITO" id="selPROPOSITO214" class="form-control" required>
                        <option value="0" selected="selected">Seleccione el propósito</option>
                        <option value="5">Asimilación de tecnología</option>
                        <option value="8">Creación</option>
                        <option value="9">Desarrollo tecnológico</option>
                        <option value="1">Difusión</option> 
                        <option value="7">Generación de conocimiento</option>
                        <option value="2">Investigación aplicada</option>
                        <option value="6">Transferencia de tecnología</option>
                      </select>       
                    </div>
                </div>
                    <input type='submit' name="Submit214" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
              </div>
            </form>


        <?php }
        function Otra2(){?>
            <form name="forma215" id="Alter215" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> class="ns_"  enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-8">
                    <h3>otra</h3>
                </div>
                <div class="col-md-12">
                    <hr class="red">
                </div>
            </div>
              <div class="form-group">
                  <div class="row" style="margin-bottom: 25px;">
                      <div class="col-md-4">
                        <label class="control-label">Autor(es)</label>
                        <input class="form-control ns_" type="text" name="AUTORES" id="AUTORES215" maxlength="255" required>
                      </div>
                      <div class="col-md-4">
                        <label class="control-label">Título</label>
                        <input class="form-control ns_" type="text" name="TITULO" id="TITULO215" maxlength="255" required>
                      </div>
                      <div class="col-md-4">
                        <label class="control-label">Descripción</label>
                        <textarea name="COMENTARIOS" id="COMENTARIOS215" cols="30" rows="1" class="form-control" required></textarea>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 25px;">
                        <?php echo formPais(); ?>
                      <div class="col-md-4">
                          <label class="control-label">Fecha Publicación</label>
                          <input class="form-control ns_ hasDatepicker" id="ANIO215" name="ANIO" type="date" required>
                      </div>
                  
                      <div class="col-md-4">
                        <label class="control-label">Propósito</label>
                        <select id="selPROPOSITO215" name="selPROPOSITO" class="form-control" required>
                          <option value="0" selected="selected">Seleccione el propósito</option>
                          <option value="5">Asimilación de tecnología</option>
                          <option value="8">Creación</option>
                          <option value="9">Desarrollo tecnológico</option>
                          <option value="1">Difusión</option> 
                          <option value="7">Generación de conocimiento</option>
                          <option value="2">Investigación aplicada</option>
                          <option value="6">Transferencia de tecnología</option>
                        </select>       
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <label class="control-label">Probatorio</label>
                          <input class="form-control ns_" type="file" name="Archivo1" id="Archivo215"  required>
                      </div>
                  </div>
                    <input type='submit' name="Submit215" value='Guardar' class='Botones' >
                    <input type='button' value='cancelar' onclick='cancelar_Actvidades()' class='Botones'>
            </div>
            </form>

        <?php } ?>


  </body>
</html>
