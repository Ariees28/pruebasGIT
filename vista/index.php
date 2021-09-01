<?php 
include "../conexion/conexion.php";
$con = conectar();
?>

<!<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pruebas</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div id="contenedor">
		<div id="header" class="contenedores">
			<h1>Pagina de pruebas</h1>
			<br>
			<h2>Esta es la pagina index en la que se mostraran todas las pruebas que se realizan con los lenguajes de HTML, PHP, mysqli, JavaScript y css</h2>
			<br>
			<p>En teoria, esta pagina se va a ir actualizando para que se vea mas bonita, a medida que voy aprendiendo de html, css y js</p>
		</div>
		<div id="segundoContenedor" class="contenedores">
			<h2>Pruebas de conexion a base de datos</h2>
			<div id="tabla">
				<br>
				<h4>PRUEBA TABLA</h4><br>
				<p>Esta prueba fue para mostrar una tabla traida de una base de datos mediante php.</p><br>
				<button id="btnTabla">MOSTRAR TABLA</button>
			</div>
			<div id="crud">
				<br>
				<h4>PRUEBA CRUD</h4><br>
				<p>Esta prueba fue para crear un crud que pueda llenar campos de una base de datos, mediante php</p><br>
				<button id="btnCrud">MOSTRAR CRUD</button>
			</div>
		</div>
		<div id="otras" class="contenedores">
			<h2>OTRAS PRUEBAS</h2>
		</div>
	</div>
</body>
</html>