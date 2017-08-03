<?php
include("Conexion.php");

	$CodigoPersona=$_POST['codigo_persona'];
	$CodigoSucursal=$_POST['codigo_sucursal'];


	$consulta=$cn->prepare('INSERT INTO a_trabaja(codigo_persona,codigo_sucursal)
    VALUES(:CodigoPersona,:CodigoSucursal)');
	$consulta->execute(array(':CodigoPersona'=>$CodigoPersona,':CodigoSucursal'=>$CodigoSucursal));
?>