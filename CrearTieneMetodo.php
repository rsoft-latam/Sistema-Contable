<?php
include("Conexion.php");

	$CodigoEnvio=$_POST['codigo_envio'];
	$CodigoProducto=$_POST['codigo_producto'];
	$Region=$_POST['region'];



	$consulta=$cn->prepare('INSERT INTO tiene_metodo(codigo_envio,codigo_producto,region)VALUES(:CodigoEnvio,:CodigoProducto,:Region)');
	$consulta->execute(array(':CodigoEnvio'=>$CodigoEnvio,':CodigoProducto'=>$CodigoProducto,':Region'=>$Region));
	
	
	
?>