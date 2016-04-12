<?php

$filename = $_POST['archivo'];
unlink($filename);
echo "el archivo ha sido eliminado con exito";

?>