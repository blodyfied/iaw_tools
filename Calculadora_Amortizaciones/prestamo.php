<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amortización</title>
	<link rel="stylesheet" href="prestamo.css">
</head>
<body>
<?php
	$pr = $_REQUEST['periodicidad'];
	$c = $_REQUEST['capital'];
	$i = $_REQUEST['interes']/(100*$pr);
	$n = $_REQUEST['plazo']*$pr;
	$cuota = ($c*$i)/(1-pow(1+$i,-$n));

	$p = $c;	// pendiente igual a capital inicial
	$tc = $n+1;	// total cuotas igual al numero de cuotas + 1 (para el bucle)
	$ic = 0;	// interes cuota
	$ac = 0;	// amortizacion cuota
	echo 'Cuota: '.number_format($cuota, 2, '.', '')."<br><br>\n";
	
	echo "<h1>Tabla de Amortización</h1><br>\n";
	echo "<table border='1'>";  // Agregué 'border' para mayor visibilidad
	echo "<tr><th>Cuota</th><th>Interés</th><th>Amortización</th><th>Pendiente</th></tr>";

	for($x=1; $x<$tc; $x++) {
		$ic = $i * $p;
		$ac = $cuota - $ic;
		$p = $p - $ac;
		echo "<tr>";
		echo "<td>$x</td><td>".number_format($ic, 2, '.', '')."</td><td>".number_format($ac, 2, '.', '')."</td><td>".number_format($p, 2, '.', '')."</td>";
		echo "</tr>\n";
	}

	echo "</table>";
?>
</body>
</html>
