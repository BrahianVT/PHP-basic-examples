
<HTML>
<HEAD>
<TITLE>Arreglos </TITLE>
</HEAD>
<BODY>
<?PHP   
	$arreglo=array(4,8,15,16,23,40);
	echo $arreglo[0];
	$arreglo2=array(6,"perro","gato",array("x","y","z"));
	echo"<br/>";
	echo $arreglo2[3][1];
?>
<br/>
<?php
	$arreglo2[3]="lobo";
	echo $arreglo2[3];
?>
<br/>
<?php
	$arreglo3=array("primer_nombre"=> "Willis","primer_apellido"=>"Polanco");
	echo $arreglo3["primer_nombre"] . " " . $arreglo3["primer_apellido"] ."<br/>";
	$arreglo3["primer_nombre"]="Pedro";
	echo $arreglo3["primer_nombre"] . " " . $arreglo3["primer_apellido"] ."<br/>";
	?>
<br/>
<pre><?php  print_r($arreglo2); ?><pre/>
</BODY>

</HTML>