
<HTML>
<HEAD>
<TITLE>Booleanos y uso de Null </TITLE>
</HEAD>
<BODY>
<?PHP
	$bool1=true;
	$bool2=false;
?>
$bool1: <?PHP echo $bool1; ?><br/>
$bool2: <?PHP echo $bool2; ?><br/>

<?PHP
	$var1=3;
	$var2="gato";
	$var3=NULL;
?>
var1 esta declarada:<?PHP echo isset($var1);?> <br/>
var1 esta declarada:<?PHP echo isset($var2);?> <br/>
var1 esta declarada:<?PHP echo isset($var3);?> <br/>
<?php unset($var1); ?>
var1 esta declarada:<?PHP echo isset($var1);?> <br/>
var1 esta declarada:<?PHP echo isset($var2);?> <br/>
var1 esta declarada:<?PHP echo isset($var3);?> <br/>
<br/>
var1 esta declarada:<?PHP echo empty($var1);?> <br/>
var4 esta declarada:<?PHP echo empty($var4);?> <br/>
</BODY>

</HTML>