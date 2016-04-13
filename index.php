<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
		case 'de':
			$str_language = 'de';
			break;
		case 'en':
			$str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
	$arr_available_languages = array();
	$arr_available_languages[] = array('str_name' => 'English', 'str_token' => 'en');
	$arr_available_languages[] = array('str_name' => 'Deutsch', 'str_token' => 'de');
    
	$str_available_languages = (string) '';
	foreach ($arr_available_languages as $arr_language)
	{
		if ($arr_language['str_token'] !== $str_language)
		{
			$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
		}
	}
	$str_available_languages = substr($str_available_languages, 0, -3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CURSO DE PHP</title>

</head>

<body>
    <h1>CURSO DE PHP </h1>
    <a href="curso1">curso1</a><br>
    <a href="curso2">curso2</a><br>
    <a href="curso3">curso3</a><br>
    <a href="curso4">curso4</a><br>
    <a href="curso5">curso5</a><br>
    <a href="curso6">curso6</a><br>
    <a href="curso7">curso7</a><br>
    <a href="curso8">curso8</a><br>
    <a href="curso9">curso9</a><br>
    <a href="curso10">curso10</a><br>
    <a href="curso11">curso11</a><br>
    <a href="curso12">curso12</a><br>
    <a href="curso13">curso13</a><br>
    <a href="curso14">curso14</a><br>
    <a href="curso15">calculadora</a><br>
    <a href="curso16">archivos</a><br>
    <a href="curso17">insertar</a><br>
    <a href="curso18">selecionar</a><br>
    <a href="curso19">eliminar</a><br>
    <a href="curso20">registro</a><br>
    <a href="curso21">login</a><br>
    <a href="curso22">Guardar imagen</a><br>
    <a href="curso23">Enviar correo</a><br>
    <a href="curso24">modificar tabla</a><br>

</body>
</html>