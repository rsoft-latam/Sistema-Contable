<?php
include("Conexion.php");

	$CodigoPago=$_POST['codigo_pago'];
	$CodigoPersona=$_POST['codigo_persona'];
	$NumeroServicio=$_POST['numero_servicio'];



	$consulta=$cn->prepare('INSERT INTO tiene_pago(codigo_pago,codigo_persona,numero_servicio)VALUES(:CodigoPago,:CodigoPersona,:NumeroServicio)');
	$consulta->execute(array(':CodigoPago'=>$CodigoPago,':CodigoPersona'=>$CodigoPersona,':NumeroServicio'=>$NumeroServicio));
	
	
	
?>