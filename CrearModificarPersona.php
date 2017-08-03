
<?php

include("Conexion.php");

	
	$Codigo=$_POST['codigo_persona'];

	
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
	
	$FechaNacimiento=$Gestion."-".$MesOrigen."-".$Dia;
			
		
$consulta=$cn->prepare('UPDATE persona SET fecha_nacimiento=:fecha_nacimiento WHERE codigo_persona=:codigo');
$consulta->execute(array(':codigo'=>$Codigo,':fecha_nacimiento'=>$FechaNacimiento));
$result=$consulta->fetch();
	

?>

