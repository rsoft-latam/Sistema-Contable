<?php
include("Conexion.php");



	$CodigoCuenta=$_POST['codigo_cuenta'];
	$Nombre=$_POST['nombre'];



	$consulta=$cn->prepare('INSERT INTO estado(codigo_cuenta,nombre)VALUES(:Codigo,:Nombre)');
	$consulta->execute(array(':Codigo'=>$CodigoCuenta,':Nombre'=>$Nombre));
	$resultado=$consulta->fetch();

?>