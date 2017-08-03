
<?php

include("Conexion.php");

	
	$CodigoPersona=$_POST['codigo_persona'];
	$Duracion=$_POST['duracion'];
	$Sueldo=$_POST['sueldo'];
	$Tipo=$_POST['tipo'];
		
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
	
	$FechaInicio=$Gestion."-".$MesOrigen."-".$Dia;
			
		
$consulta=$cn->prepare('INSERT INTO contrato(codigo_persona,fecha_inicio,duracion,sueldo,tipo)VALUES(:codigo_persona,:fecha_inicio,:duracion,:sueldo,:tipo)');
$consulta->execute(array(':codigo_persona'=>$CodigoPersona,':fecha_inicio'=>$FechaInicio,':duracion'=>$Duracion,':sueldo'=>$Sueldo,':tipo'=>$Tipo));
$result=$consulta->fetch();
	

?>

