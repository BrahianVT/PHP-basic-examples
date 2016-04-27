
<HTML>
<HEAD>
<TITLE>Funciones Strings</TITLE>
</HEAD>
<BODY>
<?PHP   
	$primeracadena ="El veloz zorrillo marron";
	$segundacadena ="salto sobre el perro"

?>
<?php
//concatenacion strings 
$terceracadena = $primeracadena;
$terceracadena .= $segundacadena;
echo $terceracadena;
?>
<br/>
minuscula:
<?php echo strtolower($terceracadena); ?><br/>
mayuscula:
<?php echo strtoupper($terceracadena); ?><br/>
primera letra:
<?php echo ucfirst($terceracadena); ?><br/>
palabras en mayuscula:
<?php echo ucwords($terceracadena); ?><br/>
longitud:
<?php echo strlen($terceracadena); ?><br/>
eliminar espacion:
<?php echo $cuartacadena = $primeracadena .trim($segundacadena); ?><br/>
buscar:
<?php echo strstr($terceracadena,"perro"); ?><br/>
remplazar:
<?php echo str_replace("veloz","super veloz",$terceracadena); ?><br/>
</BODY>

</HTML>