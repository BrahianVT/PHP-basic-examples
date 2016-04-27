
<HTML>
<HEAD>
<TITLE>Ciclo foreach </TITLE>
</HEAD>
<BODY>
<?PHP
	$edad=array(20,25,30,28,39);
 ?>
 <?PHP
	foreach($edad as $miedad){
	echo $miedad.",";
	
	}
 ?>
 <br/>
 <?PHP
	foreach($edad as $indice => $miedad){
	echo$indice.": ".$miedad."<br/>"; 
	}
 
 ?>
 
 <?PHP
	$precios=array("Nueva Pc"=>2000,"Un curso Php"=>300,"Aprender a cocinar"=>"No se");
	foreach($precios as $clave => $valor){
	if(is_int($valor))
	{echo$clave.": $".$valor."<br/>"; }
	else{
	echo$clave.":".$valor."<br/>"; 
	}

	}
 ?>
</BODY>

</HTML>