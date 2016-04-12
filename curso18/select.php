<?php

include ("conexion.php");

$con = mysql_connect($hots,$user,$pw)
or die("problemas al conectar al localhost");


mysql_select_db($db,$con)
or die("problema al conectar con la base de datos");

$regisro=mysql_query("SELECT * FROM CodigoF WHERE nombre='$_POST[nombre]'")
or die("problemas en consulta".mysql_error());

while($reg=mysql_fetch_array($regisro)){
    echo $reg['nombre'].'<br>';
    echo $reg['pw'].'<br>';
}

?>