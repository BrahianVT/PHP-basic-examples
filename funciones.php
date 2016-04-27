<html lang="en">
<head>  
	<title> Funciones </title>
</head>
<body>

<?php
function Saludar()
{
	echo"Hola mundo<br/>";
}

Saludar();
function Saludar2($mensaje)
{
	echo"Hola $mensaje <br/>";
}
Saludar2("Mundo ._.");
$nombre="Brahian";
Saludar2($nombre);
function Saludar3($saludo, $objetivo,$puntuacion)
{
	echo"$saludo"," $objetivo $puntuacion <br/>";
}
Saludar3("Saludos",$nombre,"!!");
?>
<br/>
<?php
function suma($num1,$num2)
{
	$sumados=$num1+$num2;
	return $sumados;
}
echo suma(4,6);
if(suma(5,9)==14){
echo"<br/>Son iguales";
}
function suma_resta($num1,$num2)
{
$suma=$num1+$num2;
$resta=$num1-num2;
$resultado= array($suma,$resta);
return $resultado;
}
$arreglo_final=suma_resta(4,3);
echo"Suma:" .$arreglo_final[0]."<br/>";
echo"Resta:  $arreglo_final[1]<br/>";
?>
</body>
<html>