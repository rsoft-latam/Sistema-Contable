<?php
include("Conexion.php");

  	$NumeroAlmacen=$_POST['numero_almacen'];
	$CodigoSucursal=$_POST['codigo_sucursal'];
	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];
	$Ubicacion=$_POST['ubicacion'];
	$Capacidad=$_POST['capacidad'];
	
	$consulta=$cn->prepare('INSERT INTO almacen(numero_almacen,codigo_sucursal,nombre,tipo,ubicacion,capacidad)VALUES(:NumeroAlmacen,:CodigoSucursal,:Nombre,:Tipo,:Ubicacion,:Capacidad)');
	$consulta->execute(array(':NumeroAlmacen'=>$NumeroAlmacen,':CodigoSucursal'=>$CodigoSucursal,':Nombre'=>$Nombre,':Tipo'=>$Tipo,':Ubicacion'=>$Ubicacion,':Capacidad'=>$Capacidad));
	$resultado=$consulta->fetch();

?>