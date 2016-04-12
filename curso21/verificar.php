<?php
session_start();
include('conexion.php');

if(
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pw']) && !empty($_POST['pw'])
){
    $con = mysql_connect($host,$user,$pw) or die('problemas servidor');
    mysql_select_db($db,$con) or die('problemas db');

    $sel = mysql_query("SELECT user,pw FROM registro WHERE user='$_POST[user]'",$con);

    $session = mysql_fetch_array($sel);

    if($_POST['pw'] == $session['pw']){
        $_SESSION['username']= $_POST['user'];
        echo "bienvenido ".$_SESSION['username'];
    }else{
        echo "contraseña no esta bien";
    }

}else{
    echo "debes llenar ambos campos";
}

?>