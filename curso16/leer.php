<?php

$archivo = fopen("archivo.txt","r") or die("problemas al abrir el archivo");
while(!feof($archivo))
{
    $traer = fgets($archivo);
    $saltodelinea = nl2br($traer);
    echo $saltodelinea;
}
?>