<?php
include("Conexion.php");



	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];
	$Ubicacion=$_POST['ubicacion'];
	$Pais=$_POST['pais'];


	$consulta=$cn->prepare('INSERT INTO sucursal(nombre,tipo,ubicacion,pais)VALUES(:Nombre,:Tipo,:Ubicacion,:Pais)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo,':Ubicacion'=>$Ubicacion,':Pais'=>$Pais));
	$resultado=$consulta->fetch();


?>