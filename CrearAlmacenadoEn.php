<?php
include("Conexion.php");

	$CodigoProducto=$_POST['codigo_producto'];
	$CodigoSucursal=$_POST['codigo_sucursal'];
	$NumeroAlmacen=$_POST['numero_almacen'];


	$consulta=$cn->prepare('INSERT INTO almacenado_en(codigo_producto,codigo_sucursal,numero_almacen)
    VALUES(:CodigoProducto,:CodigoSucursal,:NumeroAlmacen)');
	$consulta->execute(array(':CodigoProducto'=>$CodigoProducto,':CodigoSucursal'=>$CodigoSucursal,':NumeroAlmacen'=>$NumeroAlmacen));
?>