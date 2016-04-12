<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="proc.php" method="post" name="calc">
    <input type="number" name="c1"><br>
    <input type="number" name="c2"><br>
    <input type="number" name="c3"><br>
    <label for="">Selecciona la operación
        <select name="lista" id="">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
    </label><br>
    <input type="submit" value="Calcular">
</form>

</body>
</html>