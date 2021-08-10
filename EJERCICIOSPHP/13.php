<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(13)</title>
</head>
<body background="img/15.jpg">
	<h3 align="center">Realización de cálculos con variables </h3>
	<p>Si las variables almacenan valores numéricos, PHP ofrece la posibilidad de realizar cálculos con ellas.</p><br>
	<br>
<?php 
$numero1 = 237; 
$numero2 = 148; 
$resultado = $numero1 + $numero2; 
echo "Resultado: " . $resultado; 
?> 

<br>
<br>
<p>En primer lugar, a las variables $numero1 y $numero2 se les asigna los números enteros 237 y 148 y, a  continuación, se define una variable del tipo $resultado, la cual alberga la suma de las variables $numero1 y  $numero2. Para ello se emplea el operador aritmético + (más). Por último se emite el resultado de la suma  con ayuda del constructor echo como texto. Hay que tener en cuenta en este sentido que en la asignación de  valores numéricos a las variables no son necesarias las comillas.</p><br>


<br>
<br>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>