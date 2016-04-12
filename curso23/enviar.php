<?php

if(
    isset($_POST['asunto']) && !empty($_POST['asunto']) &&
    isset($_POST['mensaje']) && !empty($_POST['mensaje'])
){
    $destino = "edwarddiaz92@gmail.com";
    $desde = "From:". "curso php";
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    mail($destino,$asunto,$mensaje,$desde);
    echo "correo enviado...";
}else{
    echo "llene los datos";
}

?>