<?php

include('conexion.php');

$con = mysql_connect($host,$user,$pw) or die('problemas servidor');
mysql_select_db($db,$con) or die('problemas db');

mysql_query("UPDATE codigof set NOMBRE='$_POST[nuevo]' WHERE NOMBRE='$_POST[viejo]'",$con)
or die(mysql_error());

echo "actualizacion correcta";

?>