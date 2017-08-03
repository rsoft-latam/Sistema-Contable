
<?php

include("Conexion.php");

	
	$CodigoCarrito=$_POST['codigo_carrito'];
	$CodigoProducto=$_POST['codigo_producto'];
	$LimiteTiempo=$_POST['limite_tiempo'];
	$Estado=$_POST['estado'];
	$PagoSeleccionado=$_POST['pago_seleccionado'];
	$Cantidad=$_POST['cantidad'];
	$EnvioSeleccionado=$_POST['envio_seleccionado'];
	
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
	
	$FechaAdicionado=$Gestion."-".$MesOrigen."-".$Dia;
			
		
$consulta=$cn->prepare('INSERT INTO esta_en(codigo_carrito,codigo_producto,limite_tiempo,estado,fecha_adicionado,pago_seleccionado,cantidad,envio_seleccionado)VALUES(:codigo_carrito,:codigo_producto,:limite_tiempo,:estado,:fecha_adicionado,:pago_seleccionado,:cantidad,:envio_seleccionado)');
$consulta->execute(array(':codigo_carrito'=>$CodigoCarrito,':codigo_producto'=>$CodigoProducto,':limite_tiempo'=>$LimiteTiempo,':estado'=>$Estado,':fecha_adicionado'=>$FechaAdicionado,':pago_seleccionado'=>$PagoSeleccionado,':cantidad'=>$Cantidad,':envio_seleccionado'=>$EnvioSeleccionado));
$result=$consulta->fetch();
	

?>

