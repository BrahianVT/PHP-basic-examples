<?php
	session_start();
?>

<html lang="en">
<head>  
	<title>Sessions</title>
</head>
<body>
	<?php
	$_SESSION['nombre']="Brahian" ;
	$_SESSION['apellido']= "Velazquez";
	?>
	<?php
	$nombre = $_SESSION['nombre']." ".$_SESSION['apellido'];
	echo $nombre;
	?>
</body>
</html>