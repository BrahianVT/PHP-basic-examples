
<HTML>
<HEAD>
<TITLE>Funciones Arreglos </TITLE>
</HEAD>
<BODY>
<?PHP   
	$arreglo=array(4,8,15,16,23,40); ?>
	
Contar: <?php echo count($arreglo); ?> <br/>
Valor Maximo: <?php echo max($arreglo);?><br/>
Valor Minimo: <?php echo  min($arreglo); ?><br/>
<br/>
Ordenar: <?php sort($arreglo); print_r($arreglo); ?><br/>
Revertir Orden: <?php rsort($arreglo); print_r($arreglo) ?> <br/>
<br/>
Implode: <?php echo $string1=implode("*",$arreglo); ?> <br/>
Explode: <?php echo print_r(explode("*",$string1)); ?> <br/>
<br/>
En arreglo: <?php echo in_array(4,$arreglo); ?> <br/>
</BODY>

</HTML>