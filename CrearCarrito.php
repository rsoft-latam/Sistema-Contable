<?php
include("Conexion.php");



	$Codigo=$_POST['codigo_persona'];
	$Tipo=$_POST['tipo'];



	$consulta=$cn->prepare('INSERT INTO carrito(codigo_persona,tipo)VALUES(:Codigo,:Tipo)');
	$consulta->execute(array(':Codigo'=>$Codigo,':Tipo'=>$Tipo));
	$resultado=$consulta->fetch();

?>