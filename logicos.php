
<HTML>
<HEAD>
<TITLE>Expresiones logicass </TITLE>
</HEAD>
<BODY>
<?PHP
	$a=5;
	$b=4;
	if($a>$b){
	echo "a es mayor que b";
	
	}elseif($a==$b){
	 echo"a es igual a b";
	}
	else
	echo "b es mayor que a";
	
	?>
	<br/>
<?PHP
	$c=20;
	$d=2;
	if($a>$b && $c>$d){
	echo"a es mayor que b Y<br/>";
	echo"c es mayor que d";
	}
	if($a>$b || $c<$d){
	echo"<br/>a es mayor que b O<br/>";
	echo"c es mayor que d";
	}
?>
<br/>
<?PHP
	unset($a);
	if(!isset($a)){
	 $a=100;
	}
 echo$a;
 ?>
 <br/>
 <?PHP
	if(is_int($a)){
	settype($a,"string");
	}
	echo gettype($a);
 ?>
 
</BODY>

</HTML>