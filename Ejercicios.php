
<HTML>
<HEAD>
<TITLE>Ejercicios </TITLE>
</HEAD>
<BODY>
<?PHP
	echo"Primer ejercicio <br/>";
	$numeroaleer=20;
	$total=0;
	for($i=1; $i<=$numeroaleer; $i++)
	{
      $total+=$i;	
	}
	echo "El total entre el numero $numeroaleer y uno es: $total";
?>
 <br/><br/>
<?PHP
	echo"Segundo ejercicio <br/>";
	$numerodosdigitos=14;
	$primerdigito;
	$segundodigito;
	$total2=0;
	$primerdigito=$numerodosdigitos%10;
	$aux=$numerodosdigitos/10;
	$segundodigito=$aux%10;
	for($i=$segundodigito; $i<=$primerdigito; $i++)
	{
      $total2+=$i;	
	}
	
	echo"El total de la suma entre $segundodigito y $primerdigito es :$total2";

?>
<br/><br/>
<?PHP
	echo"Tercer ejercicio <br/>";
	$numero=38;
	echo"Numeros multiplos de 5 hasta $numero <br/>";
	$total3=0;
	for($i=1; $i<=$numero; $i++)
	{	if($i%5==0)
		{echo"$i".",";		
		}
	}
?>
<br/><br/>

<?PHP
	echo"Cuarto ejercicio <br/>";
	for($i=1; $i<=3*20; $i++)
	{	if($i%3==0)
		{echo"$i".",";		
		}
	}
?>
<br/><br/>
<?PHP
	echo"Quinto ejercicio <br/>";
	$numeroleido=20;
	$nmultiplos=4;
	$total4=0;
	$aux=0;
	for($i=1; $i<=$numeroleido; $i++)
	{	if($i%3==0)
		{$total4+=$i;
	     $aux++;
		 }
		if($aux==$nmultiplos)
		break;
	}
	$promerio=$total4/$nmultiplos;
	echo"El promedio de los $nmultiplos primeros multiplos del 3 son: $promerio  <br/>";
	 settype($promerio,"integer");
	echo"El promedio entero es:$promerio<br/>";
?>
<br/><br/>
<?PHP
	echo"Sexto ejercicio <br/>";
	$prom=0;
	$prom2=0;
	$aux=0;
	$aux2=0;
	$multiplo2=0;
	$multiplo5=0;
	$xtotales=4;
	$ytotales=3;
	for($i=1; $i<=20; $i++)
	{	if($i%2==0)
		{$multiplo2+=$i;
	     $aux++;
		 }
		if($aux==$xtotales)
		break;
	}
	for($i=1; $i<=20; $i++)
	{	if($i%5==0)
		{$multiplo5+=$i;
	     $aux2++;
		 }
		if($aux2==$ytotales)
		break;
	}
	$prom=$multiplo2/$xtotales;
	$prom2=$multiplo5/$ytotales;
	echo"Promedio de 2:$prom<br/>Promedio de 5:$prom2<br/>";
	if($prom>$prom2)
	{
	echo"El promedio de los multiplos de 2 hasta el numero 20 es mayor que los multiplos de 5 <br/>";
	}
	else
	echo"El promedio de los multiplos de 2 hasta el numero 20 no es mayor que los multiplos de 5 <br/>";
?>
<?PHP
echo"Septimo ejercicio<br/>";
$num1=28;
$num2=100;
$a=0; $b=0;

if($num1>$num2)
  {$a=$num1;  $b=$num2;}
  else
  {$a=$num2; $b=$num1;}
  
  echo"El numero mayor es $a y el menor es $b <br/>";
  echo"los numeros multiplos de 5 entre estos dos numeros son<br/>";
  for($i=$b; $i<=$a; $i++)
  {
  if($i%5==0)
	echo"$i"." ,";
  }
?><br/><br/>
<?PHP
	echo"octavo ejercicio<br/>";
	$primo=2; $a=0;
	for($i=1; $i<=$primo; $i++)
	{
   if($primo%$i==0)
    {$a++;}
	}

    if($a!=2)
    echo"$primo numero primo<br/>";
    else
    echo"$primo No es numero primo<br/>";
?><br/><br/>
<?PHP
		echo"noveno ejercicio<br/>";
	$nu=50;
	$sumar=0;
	for($i=1; $i<=$nu; $i++)
	{
   if($i%2==0)
    {$sumar+=$i;}
	}
	echo"La sumatoria de los numeros pares hasta $nu es: $sumar<br/>";
?><br/><br/>
<?PHP
	echo"decimo ejercicio<br/>";
	$tabla=1;
	for($i=1; $i<=10; $i++)
	{
	$tabla=5*$i;
	echo"5 * $i = $tabla<br/>";
	}
?>
</BODY>

</HTML>