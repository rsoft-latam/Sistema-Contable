<?php
include("Conexion.php");



	$Codigo=$_POST['codigo_persona'];
	



	$consulta=$cn->prepare('INSERT INTO empleado(codigo_persona)VALUES(:Codigo)');
	$consulta->execute(array(':Codigo'=>$Codigo));
	$resultado=$consulta->fetch();

?>