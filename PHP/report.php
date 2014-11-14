<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did= $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];
    $msg = $name . $last_name . 'was abducted' . $when_it_happened . 'and was gone for' . $how_long . '.' . 'Number of aliens:' . $how_many . 'Alien description: ' . $alien_description . 'What they did: ' . $what_they_did . 'Fang spotted:' . $fang_spotted . 'Other comments' . $other;
    ?>
    <style>
    p { font-family:arial;
		color:black;}
	h1 { font-size:50px;
			color:blue;
			font-family:arial;
		}
	
    </style>
    <h1>Thanks for submitting the form.</h1>
    <p>First name: <?php echo $name;?></p>
    <p>Last name: <?php echo $last_name;?></p>
	<p>You were abducted <?php echo $when_it_happened;?> and where gone for <?php echo $how_long;?>  </p>
	<p>U see <?php echo $how_many;?></p>
	<p>Describe them: <?php echo $alien_description;?></p>
	<p>Was Fang there? <?php echo $fang_spotted;?> </p>
	<p>Your email address ir <?php echo $email;?></p>
	<p>what they did: <?php echo $what_they_did;?> </p>
	<p>Other else: <?php echo $other;?></p>
	<p> el mensaje será: <?php echo $msg;?></p>
	
	
</body>

</html>
