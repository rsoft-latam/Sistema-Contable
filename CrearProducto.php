<?php
include("Conexion.php");
	$codigo_seccion=$_POST['codigo_seccion'];

	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];	
	$stock=$_POST['stock'];
	
	$NombreFoto=$_FILES['imagen']['name'];
	$Ruta=$_FILES['imagen']['tmp_name'];	
    $Destino="Productos/".$NombreFoto;
	copy($Ruta,$Destino);	
		
	$tipo=$_POST['tipo'];
	$descuento=$_POST['descuento'];
	$valoracion=$_POST['valoracion'];
	$liquidacion=$_POST['liquidacion'];
	$descripcion=$_POST['descripcion'];
	
	
				
$consulta=$cn->prepare('INSERT INTO producto(codigo_seccion,nombre,precio,stock,imagen,tipo,descuento,valoracion,liquidacion,descripcion)VALUES(:codigo_seccion,:nombre,:precio,:stock,:imagen,:tipo,:descuento,:valoracion,:liquidacion,:descripcion)');
$consulta->execute(array(':codigo_seccion'=>$codigo_seccion,':nombre'=>$nombre,':precio'=>$precio,':stock'=>$stock,':imagen'=>$Destino,':tipo'=>$tipo,':descuento'=>$descuento,':valoracion'=>$valoracion,':liquidacion'=>$liquidacion,':descripcion'=>$descripcion));

	



//header("Location: RegistrarCuenta.php");
?>

