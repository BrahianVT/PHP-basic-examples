
<HTML>
<HEAD>
<TITLE>Punteros </TITLE>
</HEAD>
<BODY>
<?PHP
$numeros=array(4,7,8,11,23,36);

?>

<?PHP
echo "1: ". current($numeros)."<br/>";
next($numeros);
echo "2: ".current($numeros)."<br/>";
reset($numeros);
echo "3: ".current($numeros)."<br/>";

?>
 <br/>
 <?PHP
while($cont= current($numeros))
{
	echo$cont .", ";
	next($numeros);

} 

 ?>
 
</BODY>

</HTML>