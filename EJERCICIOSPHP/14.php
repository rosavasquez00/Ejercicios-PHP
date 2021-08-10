<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercio PHP(14)</title>
</head>
<body background="img/16.jpg">
	<h3 align="center">Operador aritmético Operación Resultado</h3><br>
	<p>$numero1 + $numero2 Adición Suma de $numero1 y $numero2  
       $numero1 - $numero2 Sustracción Diferencia de $numero1 y $numero2  
       $numero1 * $numero2 Multiplicación Producto de $numero1 y $numero2  
       $numero1 / $numero2 División Cociente de $numero1 y $numero2  
       $numero1 ** $numero2 Exponenciación Resultado de elevar $numero2 a la potencia $numero1
</p><br>
<br>
<br>
<br>
<?php 
$numero1 = 10; 
$numero2 = 5; 
$adicion = $numero1 + $numero2;  
$sustraccion = $numero1 - $numero2;  
$multiplicacion = $numero1 * $numero2;  
$division = $numero1 / $numero2;  
$exponenciacion = $numero1 ** $numero2;  
?>

<?php  
echo "Resultado de la adición: " . $adicion ."<br />";  
echo "Resultado de la sustracción: " . $sustraccion . "<br />";  
echo "Resultado de la multiplicación: " . $multiplicacion . "<br />"; echo "Resultado de la división: " . $division . "<br />"; 
echo "10 elevado a la quinta potencia (10^5): " . $exponenciacion . "<br />"; echo "Raíz de 81: " . sqrt(81) . "<br />"; 
?>


<br>
<br>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>