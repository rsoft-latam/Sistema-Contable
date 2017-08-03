<?php
include("Conexion.php");

	$CodigoEmpresa=$_POST['codigo_empresa'];
	$CodigoPersona=$_POST['codigo_persona'];



	$consulta=$cn->prepare('INSERT INTO pertenece(codigo_empresa,codigo_persona)VALUES(:CodigoEmpresa,:CodigoPersona)');
	$consulta->execute(array(':CodigoEmpresa'=>$CodigoEmpresa,':CodigoPersona'=>$CodigoPersona));
	
	
	
?>