<html lang="en">
<head>  
	<title> Segunda Pagina </title>
</head>
<body>
<?php
	 print_r($_GET);
	 $id=$_GET['id'];
	 $nombre=$_GET['nombre'];
	 echo "<br/> <strong>".$id.",".$nombre."</strong>";
?>
<br/>
<?php
	$string="Pedro   Polanco";
	echo urldecode($string);
	echo "<br/>";
	echo rawurldecode($string);

?>

</body>
<html>