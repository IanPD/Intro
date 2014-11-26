<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sense títol</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
		$User = $_POST['user'];
		$pwd = $_POST['pwd'];
		?>
	
	<?php 
	$dbc = mysqli_connect('172.16.1.189', 'iperezm', 'iperezm', 'SIRIUS_DB')
	or die('Error al conectar al servidor Mysql');
	$query = "SELECT User,Pwd FROM USERS WHERE User='$User'";
	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);
	if($row){
		//AIXÒ VOL DIR QUE L'USUARI EXISTEI I PODEM COMPROVAR SI EL PASSWORD ÉS CORRECTE
		if ($pwd==$row['Pwd']){
				echo "login correcto </br>";
					echo "Bienvenido $User ";
					echo "Ahora que has puesto tu contraseña bien puedes ver videos de gatitos sin fin";
			}else 
			{
		echo "login incorrecte </br>";
			}
		}else{
		//AIXÒ VOL DIR QUE L'USUARI NO EXISTEIX I PODRÌEM DONAR L'OPCIÓ DE QUE ES DONÀS D'ALTA O TORNÀS FER LOGIN
		echo "Usuario desconocido <br/>";
			}?>
	
</body>

</html>
