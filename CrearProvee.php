<?php
include("Conexion.php");

	$CodigoPersona=$_POST['codigo_persona'];
	$CodigoProducto=$_POST['codigo_producto'];
	$Cantidad=$_POST['cantidad'];
	

	$Dia=$_POST['dia'];
	$Mes=$_POST['mes'];
	$Gestion=$_POST['gestion'];
	
	$MesOrigen="";
	if($Mes == 'Enero')
	{$MesOrigen='01';}
	if($Mes == 'Febrero')
	{$MesOrigen='02';}
	if($Mes == 'Marzo')
	{$MesOrigen='03';}
	if($Mes == 'Abril')
	{$MesOrigen='04';}
	if($Mes == 'Mayo')
	{$MesOrigen='05';}
	if($Mes == 'Junio')
	{$MesOrigen='06';}
	if($Mes == 'Julio')
	{$MesOrigen='07';}
	if($Mes == 'Agosto')
	{$MesOrigen='08';}
	if($Mes == 'Septiembre')
	{$MesOrigen='09';}
	if($Mes == 'Octubre')
	{$MesOrigen='10';}
	if($Mes == 'Noviembre')
	{$MesOrigen='11';}
	if($Mes == 'Diciembre')
	{$MesOrigen='12';}
	
	$Fecha=$Gestion."-".$MesOrigen."-".$Dia;



	$consulta=$cn->prepare('INSERT INTO provee(codigo_persona,codigo_producto,fecha,cantidad)VALUES(:codigo_persona,:codigo_producto,:fecha,:cantidad)');
	$consulta->execute(array(':codigo_persona'=>$CodigoPersona,':codigo_producto'=>$CodigoProducto,':fecha'=>$Fecha,':cantidad'=>$Cantidad));
	
	
	
?>
