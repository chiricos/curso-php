<?php

$fi = fopen("archivo.txt","a")
or die("problemas al crear el archivo");

fwrite($fi,'Datos:');
fwrite($fi,' \n ');
fwrite($fi,$_POST['nombre']);
fwrite($fi,' \n ');
fwrite($fi,$_POST['comentario']);
fwrite($fi,'--------------------------- \n\n ');
fclose($fi);

echo "datos guardados";

?>