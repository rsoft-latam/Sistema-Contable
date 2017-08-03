<?php
include("Conexion.php");

	$CodigoPago=$_POST['codigo_pago'];
	$CodigoProducto=$_POST['codigo_producto'];



	$consulta=$cn->prepare('INSERT INTO p_tiene(codigo_pago,codigo_producto)VALUES(:CodigoPago,:CodigoProducto)');
	$consulta->execute(array(':CodigoPago'=>$CodigoPago,':CodigoProducto'=>$CodigoProducto));
	
	
	
?>