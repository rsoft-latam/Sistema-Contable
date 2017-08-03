<?php
include("Conexion.php");



	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];
	$Pais=$_POST['pais'];
	$Ubicacion=$_POST['ubicacion'];


	$consulta=$cn->prepare('INSERT INTO empresa(nombre,tipo,pais,ubicacion)VALUES(:Nombre,:Tipo,:Pais,:Ubicacion)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo,':Pais'=>$Pais,':Ubicacion'=>$Ubicacion));
	$resultado=$consulta->fetch();


?>