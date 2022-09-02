<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inicio</title>


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
	$statname = "<h2>Discos más vendidos en 2021:</h2>"
?>

	<p><u><b><h1>Últimas estadísticas:</h1></u></b></p>
	<?php

	echo $statname;

	$MASVEND = array ('4.68M', '2.5M', '1.75M', '1.52M', '1.29M');

	echo '"30" de Adele:';
	echo "<br>";
	echo $MASVEND[0];
	echo "<br>";
	echo "<br>";
	echo '"Voyage" de ABBA:';
	echo "<br>";
	echo $MASVEND[1];
	echo "<br>";
	echo "<br>";
	echo '"Attacca" de Seventeen:';
	echo "<br>";
	echo $MASVEND[2];
	echo "<br>";
	echo "<br>";
	echo '"BTS The Best" de BTS:';
	echo "<br>";
	echo $MASVEND[3];
	echo "<br>";
	echo "<br>";
	echo '"= (Equals)" de Ed Sheeran:';
	echo "<br>";
	echo $MASVEND[4];
?>

<?php

	$badbunnyprecio = 35;
	$rosaliaprecio = 40;
	$harrystylesprecio = 50;
	$combo = $badbunnyprecio + $rosaliaprecio + $harrystylesprecio;
?>

<h1><u><b>Últimos lanzamientos:</b></u></h1>

	<ul>
		<li>Bad Bunny - "Un verano Sin Ti"<br>
	Precio: $<?php echo $badbunnyprecio ?></li>
	<li>Rosalía - "Motomami"<br>
	Precio: $<?php echo $rosaliaprecio ?></li>
	<li>Harry Styles - "Harry's House"<br>
	Precio: $<?php echo $harrystylesprecio ?></li>
</ul>

Combo por los tres CDs: $<?php echo $combo ?>

<?php

	$yearfooter = 2022;

?>

<footer>
<div class="box"></div>
<div class="footerdesign">
	<p>(c) <?php echo $yearfooter ?> Hernán Lombardero</p>
</div>
</footer>
</html>