<?php
include("Conexion.php");

	$CodigoPersona=$_POST['codigo_persona'];
	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];



	$consulta=$cn->prepare('INSERT INTO tarjeta(codigo_persona,nombre,tipo)
    VALUES(:CodigoPersona,:Nombre,:Tipo)');
	$consulta->execute(array(':CodigoPersona'=>$CodigoPersona,':Nombre'=>$Nombre,':Tipo'=>$Tipo));
	
	
	
?>