<html lang="en">
<head>  
	<title> Funciones 2 </title>
</head>
<body>

<?php
	$var="externa";
	function fun(){
		$var="interna";
		return $var;
	}

	//$var=fun();
	echo $var."<br/>";

	function fun2(){
		global $var;
		$var="interna";
		return $var;
		}
		$var=fun2();
		echo $var ."<br/>";
?>
<br/>
<?php
	function pintar($color,$lugar="Oficina")
	{
		echo"el color de la $lugar es $color";
	}
	pintar("rojo","cuarto");
?>

</body>
<html>