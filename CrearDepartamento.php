<?php
include("Conexion.php");



	$Nombre=$_POST['valorCaja1'];
	$Tipo=$_POST['valorCaja2'];


	$consulta=$cn->prepare('INSERT INTO departamento(nombre,tipo)VALUES(:Nombre,:Tipo)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo));
	$resultado=$consulta->fetch();
	if($resultado)
	echo "Registrado";

?>