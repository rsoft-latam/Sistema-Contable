<?php
	
include("Conexion.php");

	$numero_asiento=$_POST['numero_asiento'];
	$codigo_libro_diario=$_POST['codigo_libro_diario'];
	$codigo_cuenta_contable=$_POST['codigo_cuenta_contable'];	
	$tipo=$_POST['tipo'];		
	$monto=$_POST['monto'];
	
	$consulta=$cn->prepare('INSERT INTO diario_tiene(numero_asiento,codigo_libro_diario,codigo_cuenta_contable,tipo,monto)VALUES(:numero_asiento,:codigo_libro_diario,:codigo_cuenta_contable,:tipo,:monto)');
	$consulta->execute(array(':numero_asiento'=>$numero_asiento,':codigo_libro_diario'=>$codigo_libro_diario,':codigo_cuenta_contable'=>$codigo_cuenta_contable,':tipo'=>$tipo,':monto'=>$monto));
?>