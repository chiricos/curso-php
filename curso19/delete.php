<?php

include ("conexion.php");

$con = mysql_connect($hots,$user,$pw)
or die("problemas al conectar al localhost");


mysql_select_db($db,$con)
or die("problema al conectar con la base de datos");

$regisro=mysql_query("SELECT id FROM CodigoF WHERE nombre='$_POST[nombre]'",$con)
or die("problemas en consulta".mysql_error());

if($reg=mysql_fetch_array($regisro)){
    mysql_query("DELETE FROM CodigoF WHERE nombre = '$_POST[nombre]'",$con);
    echo "datos eliminados";
}else{
    echo "no se pudo eliminar";
}

?>