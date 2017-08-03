<?php
include("Conexion.php");


	$codigo_empresa=$_POST['codigo_empresa'];
	$nombre=$_POST['nombre'];	
	$tipo=$_POST['tipo'];
	$costo=$_POST['costo'];
	
	$NombreFoto=$_FILES['imagen']['name'];
	$Ruta=$_FILES['imagen']['tmp_name'];	
    $Destino="Publicidad/".$NombreFoto;
	copy($Ruta,$Destino);	
		
			
$consulta=$cn->prepare('INSERT INTO publicidad(codigo_empresa,nombre,tipo,costo,imagen)VALUES(:codigo_empresa,:nombre,:tipo,:costo,:imagen)');
$consulta->execute(array(':codigo_empresa'=>$codigo_empresa,':nombre'=>$nombre,':tipo'=>$tipo,':costo'=>$costo,':imagen'=>$Destino));

	



//header("Location: RegistrarCuenta.php");
?>


