Cómo enlazar PHP en HTML 
El intérprete de PHP solo se interesa, en principio, por el código colocado entre una etiqueta de PHP de  apertura y otra de cierre.<br>
Todos los ejercicios anteriores estan enlazados con html. 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio PHP(11)</title>
</head>
<body background="img/12.jpg"><br>
<br>
     <!DOCTYPE html> 
     <html lang="es"> 
     <head> 
     <meta charset="utf-8"> 
     <title>My first PHP page</title> 
     </head> 
     <body> 
     <h1>Hello World</h1> 
     <p>What is the current time and date?</p> 
     <p>Your current time and date is:  
     <?php  
     echo date("d.m.Y H:i:s"); 
     ?>.</p> 
     </body> 
     </html> 

<br>
<br>
<br>
<br>
<br>
<a href="index.php"><h3>Página principal</h3></a>	

</body>
</html>