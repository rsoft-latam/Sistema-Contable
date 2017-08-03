<?php
include("Conexion.php");



	$codigo_libro_diario=$_POST['codigo_libro_diario'];
	$nombre=$_POST['nombre'];



	$consulta=$cn->prepare('INSERT INTO libro_diario(codigo_libro_diario,nombre)VALUES(:codigo_libro_diario,:nombre)');
	$consulta->execute(array(':codigo_libro_diario'=>$codigo_libro_diario,':nombre'=>$nombre));
	$resultado=$consulta->fetch();

?>