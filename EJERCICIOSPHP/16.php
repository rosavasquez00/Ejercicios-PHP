<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(16)</title>
</head>
<body background="img/17.jpg">
	<h2 align="center">PHP se atiene a la  regla de que los operadores de multiplicación y división tienen precedencia sobre los de adición y sustracción 
Los términos entre paréntesis son los que primero se evalúan en PHP. </h2><br>
<br>
<br>

<?php 
$numero1 = 2.5; 
$numero2 = 3.7; 
$resultado = 2 * ($numero1 + 5) * ($numero2 - 3) * sqrt(81); 
echo "Resultado: " . $resultado;  
?> 
<br>
<br>
<br>
<br>
<h3>PHP calcula 2*(2.5+5)*(3.7-3)*√81 y emite el resultado 94.5
</h3>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>