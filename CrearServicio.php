<?php

include("Conexion.php");
	
	
	$codigo_cliente=$_POST['codigo_cliente'];
	$nombre=$_POST['nombre'];
	$categoria=$_POST['categoria'];
	$restriccion=$_POST['restriccion_servicio'];
	

	if($nombre=='Amazon EC2')
	{$numero_servicio=1;}
	if($nombre=='Amazon EC2 Container registry')
	{$numero_servicio=2;}
	if($nombre=='Amazon EC2 Container Service')
	{$numero_servicio=3;}
	if($nombre=='AWS Elastic Beanstalk')
	{$numero_servicio=4;}
	if($nombre=='Elastic Load Balancing')
	{$numero_servicio=5;}
	if($nombre=='Amazon S3')
	{$numero_servicio=6;}
	if($nombre=='Amazon CloudFront')
	{$numero_servicio=7;}
	if($nombre=='Amazon EBS')
	{$numero_servicio=8;}
	if($nombre=='Amazon Elastic File System')
	{$numero_servicio=9;}
	if($nombre=='Amazon Glacier')
	{$numero_servicio=10;}
	if($nombre=='AWS Import/Export')
	{$numero_servicio=11;}
	if($nombre=='AWS Storage Gateway')
	{$numero_servicio=12;}
	if($nombre=='Amazon RDS')
	{$numero_servicio=13;}
	if($nombre=='AWS Database Migration Service')
	{$numero_servicio=14;}
	if($nombre=='Amazon DynamoDB')
	{$numero_servicio=15;}
	if($nombre=='Amazon ElastiCache')
	{$numero_servicio=16;}
	if($nombre=='Amazon Redshift')
	{$numero_servicio=17;}
	if($nombre=='Amazon VPC')
	{$numero_servicio=18;}
	if($nombre=='AWS Direct Connect')
	{$numero_servicio=19;}
	if($nombre=='Elastic Load Balancing')
	{$numero_servicio=20;}
	if($nombre=='Amazon Route 53')
	{$numero_servicio=21;}

	
	
		
	$tipoA=$_POST['tipo'];
	
	if($tipoA==1)
	{$tipo='Computacion';}
	if($tipoA==2)
	{$tipo='Almacenamiento y Entrega de Contenido';}
	if($tipoA==3)
	{$tipo='Base de Datos';}
	if($tipoA==4)
	{$tipo='Redes';}
	
	 
	$costo=$_POST['costo'];
	$dia=$_POST['dia'];
	$Mes=$_POST['mes'];
	$anho=$_POST['anho'];
		
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
	
	$fecha_solicitud=$anho."-".$MesOrigen."-".$dia;

			
$consulta=$cn->prepare('INSERT INTO servicio(numero_servicio,codigo_cliente,nombre,tipo,costo,fecha_solicitud,categoria,restriccion_uso)VALUES(:numero_servicio,:codigo_cliente,:nombre,:tipo,:costo,:fecha_solicitud,:categoria,:restriccion)');
$consulta->execute(array(':numero_servicio'=>$numero_servicio,':codigo_cliente'=>$codigo_cliente,':nombre'=>$nombre,':tipo'=>$tipo,':costo'=>$costo,':fecha_solicitud'=>$fecha_solicitud,':categoria'=>$categoria,':restriccion'=>$restriccion));
$result=$consulta->fetch();
	

//header("Location: RegistrarCuenta.php");
?>

