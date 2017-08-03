<?php
include("Conexion.php");

	$CodigoLista=$_POST['codigo_lista'];
	$CodigoProducto=$_POST['codigo_producto'];



	$consulta=$cn->prepare('INSERT INTO tiene_producto(codigo_lista,codigo_producto)
    VALUES(:CodigoLista,:CodigoProducto)');
	$consulta->execute(array(':CodigoLista'=>$CodigoLista,':CodigoProducto'=>$CodigoProducto));
	
	
	
?>