<?php
	
include("Conexion.php");


	$numero_asiento=$_POST['numero_asiento'];
	$codigo_libro_diario=$_POST['codigo_libro_diario'];
	
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
	
	$fecha=$Gestion."-".$MesOrigen."-".$Dia;
	
	$glosa=$_POST['glosa'];		
	$tipo=$_POST['tipo'];

$consulta2=$cn->prepare('INSERT INTO asiento(codigo_libro_diario,fecha,glosa,tipo)VALUES(:codigo_libro_diario,:fecha,:glosa,:tipo)');
$consulta2->execute(array(':codigo_libro_diario'=>$codigo_libro_diario,':fecha'=>$fecha,':glosa'=>$glosa,':tipo'=>$tipo));
$result2=$consulta2->fetch();




?>