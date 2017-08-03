<?php
include("Conexion.php");

	
	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];
	$Costo=$_POST['costo'];



	$consulta=$cn->prepare('INSERT INTO envio(nombre,tipo,costo)
    VALUES(:Nombre,:Tipo,:Costo)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo,':Costo'=>$Costo));
	
	
	
?>