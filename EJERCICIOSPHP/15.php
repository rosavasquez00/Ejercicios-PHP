<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercio PHP(15)</title>
</head>
<body background="img/13.jpg">
	<h2 align="center">Para los cálculos más complejos se pueden combinar las diferentes operaciones aritméticas en un mismo script.</h2><br>
	<br>

	<?php 
$numero1 = 10; 
$numero2 = 5; 
$resultado = 2 * $numero1 + 5 * $numero2 - 3 * sqrt(81); 
echo "Resultado: " . $resultado;  
?>
<br>
<br>
<br>
<br>
<h3><strong>El intérprete PHP determina los valores de las variables y calcula:  
2 * 10 + 5 * 5 - 3 * √81 = 20 + 25 – 27 = 18 </strong></h3>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>