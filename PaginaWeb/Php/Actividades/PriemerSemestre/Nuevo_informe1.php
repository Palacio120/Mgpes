<?php
  session_start();
 ?>

      <?php
        include('../../conf_tab.php');

        $DB= new ConfigDB();
        $DB->Mysql();


           $CODIGO_ES= $_SESSION["CODIGO_ES"];

           $rs=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Primer Semestre'");

           if($DB->total_Filas($rs)>=1){
              echo "<script>window.location='../../Estudiante/actividades.php'</script>";
           }else{
            $DB->CONSULTA("INSERT INTO `actividades` VALUES ('0','$CODIGO_ES', 'Primer Semestre',NULL,NULL,NULL)");

            $rs1=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Primer Semestre'");
            while ($i=$DB->Obtener_filas($rs1)) {
              $_SESSION["Primer_informe"]=$i["idActividades"];
            }
             if(isset($rs)){
              echo "<script>window.location='../../../Estudiante/actividades.php'</script>";
             }
           }

       ?>
