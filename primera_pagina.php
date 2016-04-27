<html lang="en">
<head>  
	<title> Primera Pagina </title>
</head>
<body>
	<?php
	$enlace="<Clik> & ver opciones";
	?>
	<a href="segunda_pagina.php?nombre=
	<?php echo urlencode("Pedro Polanco")?>&id=10">
	 <?php echo htmlspecialchars($enlace); ?>
	 </a>


</body>
</html>