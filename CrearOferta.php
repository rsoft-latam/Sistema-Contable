<?php
include("Conexion.php");

	$CodigoProducto=$_POST['codigo_producto'];
	$Detalle=$_POST['detalle'];



	$consulta=$cn->prepare('INSERT INTO oferta(codigo_producto,detalle)
    VALUES(:CodigoProducto,:Detalle)');
	$consulta->execute(array(':CodigoProducto'=>$CodigoProducto,':Detalle'=>$Detalle));
	
	
	
?>