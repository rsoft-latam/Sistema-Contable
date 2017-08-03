<?php
include("Conexion.php");

	$CodigoDepartamento=$_POST['codigo_departamento'];
	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];

echo ($CodigoDepartamento.$Nombre.$Tipo);


	$consulta=$cn->prepare('INSERT INTO seccion(codigo_departamento,nombre,tipo)
    VALUES(:CodigoDepartamento,:Nombre,:Tipo)');
	$consulta->execute(array(':CodigoDepartamento'=>$CodigoDepartamento,':Nombre'=>$Nombre,':Tipo'=>$Tipo));
	
	
	
?>