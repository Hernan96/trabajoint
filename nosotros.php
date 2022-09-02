<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nosotros</title>


<head>

<link rel="stylesheet" href="estilos.css">

</head>

<body>

<header>

<nav class="menu">

 <ul>
	<li> <a href="index.php">Inicio </a></li>
	<li> <a href="nosotros.php">Nosotros </a></li>
	<li> <a href="contacto.php">Contacto </a></li>
 </ul>

</nav>

</header>

<div class="box"></div>

<?php

	$ano = "2009";
	$fundador = "<b>Gustavo Yankovich</b>";
	$numero = 1 + 1;
	$multiplicador = $numero * 2;
	$premio = "2015, 2016, 2017 y 2018";
	$artistas = array ("<b>Catupecu Machu</b>", "<b>Maná</b>", "<b>Bob Dylan</b>");

	define ('nombresitio', "<b>Music Newz</b>");

?>

// texto

<p>Fundado en <?php echo $ano ?> por <?php echo $fundador ?>, <?php echo nombresitio ?> es un portal de noticias enfocado en el ámbito musical de todo el mundo. 
Acá podrás encontrar desde entrevistas, análisis discograficos, actualizaciones, fechas de conciertos y mucho más.
<br>
<br>
Fuimos reconocidos como mejor portal de noticias en <?php echo $multiplicador ?> años consecutivos (<?php echo $premio ?>) por los MTV Awards y aprobado por artistas
de alto rango como: <?php echo $artistas[0] ?>, <?php echo $artistas[1] ?> y <?php echo $artistas[2] ?>.
Enterate de lo que está pasando en el mundo de la música ahora mismo.
</p>

</html>