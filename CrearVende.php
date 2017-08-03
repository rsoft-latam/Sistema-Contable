<?php
include("Conexion.php");

	$CodigoPersona=$_POST['codigo_persona'];
	$CodigoProducto=$_POST['codigo_producto'];



	$consulta=$cn->prepare('INSERT INTO vende(codigo_persona,codigo_producto)VALUES(:CodigoPersona,:CodigoProducto)');
	$consulta->execute(array(':CodigoPersona'=>$CodigoPersona,':CodigoProducto'=>$CodigoProducto));
	
	
	
?>