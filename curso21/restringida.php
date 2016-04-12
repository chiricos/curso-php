<?php

session_start();

if(isset($_SESSION['username'])){
    echo "puedes ver esta pagina";
    echo "<br> <a href='destruir.php'>cerrar session</a> ";
}else{
    echo "no puedes ver esta pagina, registrate e inicia session";
}
?>