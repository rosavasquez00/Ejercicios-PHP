<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(7)</title>
</head>
<body background="img/11.jpg">
	<h3><strong>Los errores sintácticos también surgen cuando se quieren utilizar caracteres como texto y estos están  asociados con una determinada tarea. Un ejemplo sería la comilla sencilla ('). Los símbolos como este solo  aparecen en PHP en calidad de texto cuando se hace entender al intérprete que el símbolo no estaría  relacionado con su verdadero objetivo. En el caso de las comillas simples, existen dos posibilidades: por un  lado se puede enmarcar un string con comillas simples entre comillas dobles o, por otro, se pueden enmascarar  las comillas por medio de una barra invertida (\)</strong></h3><br>
	
	<?php 
echo '\'Hello World!\' '; 
?>

<br>
<p>También es posible la combinación de comillas sencillas y dobles</p><br>
<?php 
echo " 'Hello World!' "; 
?> 

<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>