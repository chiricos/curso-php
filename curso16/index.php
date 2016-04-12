<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form action="guardar.php" method="post" name="frm">
    <input type="text" name="nombre"><br>
    <textarea name="comentario" ></textarea><br>
    <input type="submit" value="guardar">
</form>

------------------------
<form action="borrar.php" method="post" name="form">
    <input type="file" name="archivo">
    <input type="submit" value="borrar">
</form>
</body>
</html>