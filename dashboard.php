<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Pantalla de Inicio</title>
    <style>
        ::-webkit-scrollbar {
        display: none;
}   </style>
</head>
<body>

	<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

	<?php else: ?>

	<?php endif	?>
	<center>
	<?php echo "<h5> Bienvenido " .$_SESSION['username'].". Usted se encuentra en la pantalla de inicio. <h5>" ?>
	    <h6><a href="logout.php">Salir<h6>
	    <div class="embed-container">
        <iframe src="index.html"  width="100%" height="1500" frameborder="0" allowfullscreen></iframe>
        </div>
	</center>
</body>
</html>