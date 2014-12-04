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
		$mail=$_POST["mail"];
		
		$dbc = mysqli_connect('172.16.1.189', 'iperezm', 'iperezm', 'elvis_store')
	or die('Error al conectar al servidor Mysql');
	$query = "SELECT Mail FROM email_list where Mail='$mail'";
	$result = mysqli_query($dbc, $query)
	or die('Error al insertar informacion en la base de datos');
	$row = mysqli_fetch_array($result);
	if ($mail == $row['Mail']) {
	$erase = "DELETE FROM email_list WHERE Mail='$mail'";
	$result = mysqli_query($dbc, $erase)
	or die('Error al insertar informacion en la base de datos');
	echo "Pos na to borrao";
	}else {
		echo "Eres un pringao";
	}
	mysqli_close($dbc); 
		?>
	
</body>

</html>
