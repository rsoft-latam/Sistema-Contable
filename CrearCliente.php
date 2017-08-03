<?php
include("Conexion.php");



	$Codigo=$_POST['codigo_persona'];
	$Gusto=$_POST['gusto'];
	$Preferencia=$_POST['preferencia'];



	$consulta=$cn->prepare('INSERT INTO cliente(codigo_persona,gusto,preferencia)VALUES(:Codigo,:Gusto,:Preferencia)');
	$consulta->execute(array(':Codigo'=>$Codigo,':Gusto'=>$Gusto,':Preferencia'=>$Preferencia));
	$resultado=$consulta->fetch();

?>