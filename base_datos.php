<?php
//crear conexion a base de datos
	$conexion = mysql_connect("localhost","root","");
	if(!$conexion)
		die("Hubo un error de conexion a la base de datos". mysql_error());
//seleccionar base de datos

	$db_seleccionada = mysql_select_db("Ejemplo",$conexion);
	if(!$db_seleccionada)
		die("No se pudo seleccionar base de datos". mysql_error());
?>

<html lang="en">
<head>  
	<title>Base de datos</title>
</head>
<body>
<?php
	// realizar consulta a la base de datos

	$resultado = mysql_query("SELECT *FROM topico", $conexion);
	if(!$resultado)
		die("Hubo error al realizar la consulta". mysql_error());
		
// Usar data returnada

	while ($row = mysql_fetch_array($resultado))
	{
		//echo $row[1]." ". $row[2] . "<br/>";
		echo $row["nombre_menu"]." ". $row["posicion"] . "<br/>";
	}


?>
</body>
</html>

<?php  mysql_close($conexion); ?>