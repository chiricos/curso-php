<?php

include('conexion.php');

if(
    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pw']) && !empty($_POST['pw']) &&
    isset($_POST['pw2']) && !empty($_POST['pw']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    $_POST['pw']==$_POST['pw2']
){
    $con = mysql_connect($host,$user,$pw) or die('error server');

    mysql_select_db($db,$con) or die('problemas db');

    mysql_query("INSERT INTO registro (nombre,user,pw,email)
    VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')",$con);
    echo "datos insertados <br>";

    echo "Nombre: ".$_POST['nombre']."<br>";
    echo "User: ".$_POST['user']."<br>";
    echo "Password: ".$_POST['pw']."<br>";
    echo "Correo: ".$_POST['email']."<br>";

}else{
    echo "verifica que llenaste los campos y los password coinciden";
}

?>