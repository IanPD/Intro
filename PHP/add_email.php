<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Nice Job</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	
	<?php 
	$firstname = $_POST['name'];
	$lastname = $_POST['lastname'];
	$mail = $_POST['mail'];
	?>
	
	<h1>We will send this to the database:</h1>
	First name <?php echo $firstname ?></br>
	Last name <?php echo $lastname ?></br>
	Mail address <?php echo $mail ?></br>
	
	<?php $dbc = mysqli_connect('172.16.1.189', 'iperezm', 'iperezm', 'elvis_store')
	or die('Error al conectar al servidor Mysql');
	$query = "INSERT INTO email_list (name,lastname,Mail)
	VALUES ('$firstname','$lastname','$mail')";
	$result = mysqli_query($dbc, $query)
	or die('Error al insertar informacion en la base de datos');
	mysqli_close($dbc); 
	
	
	
	
	?>
	
</body>

</html>
