<?php
?>
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
		$subject= $_POST["asunto"];
		$body= $_POST["cuerpo"];
		$contador= 0;
		
		
	$dbc = mysqli_connect('172.16.1.189', 'iperezm', 'iperezm', 'elvis_store')
	or die('Error al conectar al servidor Mysql');
	$query = "SELECT name, lastname, Mail from email_list";
	$result = mysqli_query($dbc, $query);
	If (!empty($subject) && !empty($body)){
	?>

	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
		<th>&nbsp;</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Asunto</th>
		<th>Mensaje</th>
		</tr>
	
	<?php 
					
				
	while ($row = mysqli_fetch_array($result)){
		?>
		<tr>
		<td> <?php $contador = $contador + 1; echo $contador ?></td>
		<td><?= $row["name"]?></td>
		<td><?= $row["lastname"]?></td>
		<td><?= $row["Mail"]?></td>
		<td><?= $subject?></td>
		<td><?= $body?></td>
		</tr>
		
	<?php
    
	}
	 
    
	?>
	</table>
	<?php
	}else {
		echo "<h1>Algun campo esta en blanco!</h1>";
    }
	mysqli_close($dbc); 
	?>
	
	
</body>

</html>
