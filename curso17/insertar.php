<?php

include('conexion.php');

if(
    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['pw']) && !empty($_POST['pw'])
){
    $con = mysql_connect($hots,$user,$pw) or die("problemas al conectar al localhost");
    mysql_select_db($db,$con) or die("problema al conectar con la base de datos");

    mysql_query("INSERT INTO CodigoF (nombre,pw) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
    echo "datos insertados";
}else{
    echo "problemas al insertar datos";
}

?>