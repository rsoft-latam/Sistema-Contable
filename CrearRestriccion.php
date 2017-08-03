<?php
include("Conexion.php");

	
	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];



	$consulta=$cn->prepare('INSERT INTO restriccion(nombre,tipo)
    VALUES(:Nombre,:Tipo)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo));
	
	
	
?>