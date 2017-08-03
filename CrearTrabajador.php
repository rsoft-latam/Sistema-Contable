<?php
include("Conexion.php");



	$Codigo=$_POST['codigo_persona'];
	$Puesto=$_POST['puesto_trabajo'];



	$consulta=$cn->prepare('INSERT INTO trabajador(codigo_persona,puesto_trabajo)VALUES(:Codigo,:Puesto)');
	$consulta->execute(array(':Codigo'=>$Codigo,':Puesto'=>$Puesto));
	$resultado=$consulta->fetch();

?>