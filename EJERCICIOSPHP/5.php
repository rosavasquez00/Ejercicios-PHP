<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(5)</title>
</head>
<body background="img/5.jpg">
	<h3><font color="#A94742">Si una variable se define varias veces en un script, la nueva definición sobreescribe a la anterior. El siguiente  echo siempre ofrece el valor actual de una variable. </font></h3><br>
<br>
<?php 
$author = "John Doe"; 
echo "<h1>Hello World!</h1>  
<p>This dynamic web page was created by $author.</p>"; 
$author = "Max Mustermann"; 
echo " <p>Supported by $author.</p>"; 
?> 
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>

</body>
</html>