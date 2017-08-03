<?php
include("Conexion.php");

	$CodigoPersona=$_POST['codigo_persona'];
	$CodigoSucursal=$_POST['codigo_sucursal'];
	$NumeroAlmacen=$_POST['numero_almacen'];


	$consulta=$cn->prepare('INSERT INTO e_trabaja(codigo_persona,codigo_sucursal,numero_almacen)
    VALUES(:CodigoPersona,:CodigoSucursal,:NumeroAlmacen)');
	$consulta->execute(array(':CodigoPersona'=>$CodigoPersona,':CodigoSucursal'=>$CodigoSucursal,':NumeroAlmacen'=>$NumeroAlmacen));
?>