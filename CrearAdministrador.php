<?php
include("Conexion.php");



	$Codigo=$_POST['codigo_persona'];
	



	$consulta=$cn->prepare('INSERT INTO administrador(codigo_persona)VALUES(:Codigo)');
	$consulta->execute(array(':Codigo'=>$Codigo));
	$resultado=$consulta->fetch();

?>