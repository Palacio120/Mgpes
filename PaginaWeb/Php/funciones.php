<?php
FUNCTION CambiarEnter($cadena){
 $largo_cadena=strlen($cadena);
 $cadena2="";

  for ($i=0; $i <$largo_cadena ; $i++) {
    $caracterActual=substr($cadena,$i,1);
    $caracterAscii=ord($caracterActual);
    if ($caracterActual==chr(13)||$caracterActual==chr(10)) {
      $caracterActual='';
    }
    $cadena2=$cadena2.$caracterActual;
  }
 return $cadena2;
}

function Buscar_perfil(){
  $id=$_POST['id'];

}

?>
