<?php
include("Conexion.php");

	
	$CodigoPersona=$_POST['codigo_persona'];
	$NumeroServicio=$_POST['numero_servicio'];
	$CodigoRestriccion=$_POST['codigo_restriccion'];



	$consulta=$cn->prepare('INSERT INTO tiene_restriccion(codigo_persona,numero_servicio,codigo_restriccion)VALUES(:CodigoPersona,:NumeroServicio,:CodigoRestriccion)');
	$consulta->execute(array(':CodigoPersona'=>$CodigoPersona,':NumeroServicio'=>$NumeroServicio,':CodigoRestriccion'=>$CodigoRestriccion));
	
	
	
?>