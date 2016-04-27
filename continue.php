
<HTML>
<HEAD>
<TITLE>Sentencia Continue </TITLE>
</HEAD>
<BODY>
<?PHP

	for($cont=0; $cont<=10; $cont++){
		echo $cont;
		if($cont==10)
		{
		//continue;
		break;
		}
		echo ", ";
	}
?>
 
</BODY>

</HTML>