
<?php

include("Conexion.php");

	
	$Nombre=$_POST['nombre'];
	$Paterno=$_POST['paterno'];
	$Materno=$_POST['materno'];
	$Genero=$_POST['genero'];
	$Nacionalidad=$_POST['nacionalidad'];
	$Direccion=$_POST['direccion'];
	$Telefono=$_POST['telefono'];
	
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
			
		
$consulta=$cn->prepare('INSERT INTO persona(nombre,paterno,materno,genero,fecha_nacimiento,nacionalidad,direccion,telefono)VALUES(:nombre,:paterno,:materno,:genero,:fecha_nacimiento,:nacionalidad,:direccion,:telefono)');
$consulta->execute(array(':nombre'=>$Nombre,':paterno'=>$Paterno,':materno'=>$Materno,':genero'=>$Genero,':fecha_nacimiento'=>$FechaNacimiento,':nacionalidad'=>$Nacionalidad,':direccion'=>$Direccion,':telefono'=>$Telefono));
$result=$consulta->fetch();
	

?>

