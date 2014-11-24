<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>Envio</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<h1>El registro ha sido enviado</h1>
	
	<?php 	$user = $_POST["usuario"];
			$pwd = $_POST["pwd"];
			$mail= $_POST["mail"];
			$name = $_POST["name"];
			$SecondName = $_POST["2ndname"];
	?>
	
	<?php
	$dbc = mysqli_connect('172.16.1.189', 'iperezm', 'iperezm', 'SIRIUS_DB')
	or die('Error al conectar al servidor Mysql');
	$query = "INSERT INTO USERS (User, Pwd, Mail, Name, 2ndname," .
	"VALUES ('$user ', '$pwd', '$mail', '$name', '$SecondName')";
	$result = mysqli_query($dbc, $query)
	or die('Error al insertar informacion en la base de datos');
	mysqli_close($dbc); 
	?>

</body>

</html>
