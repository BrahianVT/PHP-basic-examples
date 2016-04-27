
<HTML>
<HEAD>
<TITLE>Conversion de datos </TITLE>
</HEAD>
<BODY>
<?PHP
	$var1="2 buenos chicos van al campo";
	$var2=$var1+3;
	echo $var2;
?>
<br/>
<?php 
	  echo gettype($var1); echo "<br/>";
	  echo gettype($var2); echo "<br/>";

	  settype($var2,"string");
	  echo gettype($var2); echo "<br/>";
	  
	 $var3=(int)$var1;
	 echo gettype($var3); echo "<br/>"   
?>
es un arreglo: <?php echo is_array($var1);?> <br/>
es booleano: <?php echo is_bool($var1);?> <br/>
es un float: <?php echo is_float($var1);?> <br/>
es un entero: <?php echo is_integer($var1);?> <br/>
es un null: <?php echo is_null($var1);?> <br/>
es un numerico: <?php echo is_numeric($var1);?> <br/>
es un string: <?php echo is_string($var1);?> <br/>
</BODY>

</HTML>