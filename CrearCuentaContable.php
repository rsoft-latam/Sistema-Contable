<?php
	
include("Conexion.php");


	$codigo_cuenta_contable=$_POST['codigo_cuenta_contable'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];		
	$tipo=$_POST['tipo'];
	
	//$codigo_libro_mayor=$_POST['codigo_libro_mayor'];		
	$codigo_libro_mayor=1;
	$saldo='safasfas';
	
$consulta2=$cn->prepare('INSERT INTO cuenta_contable(codigo_cuenta_contable,nombre,descripcion,tipo)VALUES(:codigo_cuenta_contable,:nombre,:descripcion,:tipo)');
$consulta2->execute(array(':codigo_cuenta_contable'=>$codigo_cuenta_contable,':nombre'=>$nombre,':descripcion'=>$descripcion,':tipo'=>$tipo));
$result2=$consulta2->fetch();

$consulta3=$cn->prepare('INSERT INTO mayor_tiene(codigo_libro_mayor,codigo_cuenta_contable,debe,haber,saldo)VALUES(:codigo_libro_mayor,:codigo_cuenta_contable,0,0,:saldo)');
$consulta3->execute(array(':codigo_cuenta_contable'=>$codigo_cuenta_contable,':codigo_libro_mayor'=>$codigo_libro_mayor,
':saldo'=>$saldo));
$result3=$consulta3->fetch();


?>