<html lang="en">
<head>  
	<title> Encodig </title>
</head>
<body>
	<?php
	$url_site='php/archvos/paginas/url.php';
	$parametro1='esto es un strng';
	$parametro2='"error"/<> caracter$';
	$enlace="<Clik> & ver opciones";
	?>
	<?php
	$url="http://localhost/";
	$url.=rawurldecode($url_site);
	$url.="?parametro1=".urldecode($parametro1);
	$url.="?parametro2=".urldecode($parametro2);
	
	
	?>
	<a href="<?php echo htmlspecialchars($url)?>">
	 <?php echo htmlspecialchars($enlace); ?>
	 </a>


</body>
</html>