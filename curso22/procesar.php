<?php
$carpeta ="files/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
echo "archivo subido exitosamente<br>";

$nombre = $_FILES['foto']['name'];

echo "<img src=\"files/$nombre\"><br>";
echo $_FILES['foto']['name'].'<br>';
echo $_FILES['foto']['size'].'<br>';
echo $_FILES['foto']['type'].'<br>';

?>