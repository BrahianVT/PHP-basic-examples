<html lang="en">
<head>  
	<title>Leyendo Cookies</title>
</head>
<body>
	<?php
	$cookie=0;
	if(isset($_COOKIE['prueba']))
	{
	$cookie=$_COOKIE['prueba'];
	}
	echo$cookie;
	setcookie('prueba',0,time()-(60*60*24*7));
	
	?>
</body>
</html>