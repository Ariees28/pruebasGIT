<?php


function conectar(){

	$usuario = "root";
	$password = "";
	$server = "localhost";
	$db = "pruebas";
	$con = mysqli_connect($server,$usuario,$password, $db) or die("error al conectarse: ".mysqli_error());
	return $con;
}

?>