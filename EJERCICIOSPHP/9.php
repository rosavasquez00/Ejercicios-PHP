<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(9)</title>
</head>
<body background="img/9.jpg">
	<h3>Al trabajar con variables siempre entran en juego varios elementos que deben estar interconectados entre sí.  Para ello entra en juego el operador de concatenación (.).  
Si se programa un código “limpio”, este debería tener el siguiente aspecto para el ejemplo mencionado  anteriormente:</h3><br>
<br>
<?php 
$author1 = "John Doe"; 
$author2 = "Max Mustermann"; 
echo '<h1>Hello World!</h1>  
<p>This dynamic web page was created by ' . $author1 . ' and ' . $author2 . '.</p>'; ?>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>