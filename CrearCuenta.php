<?php
	
include("Conexion.php");


	$NombreFoto=$_FILES['Foto']['name'];
	$Ruta=$_FILES['Foto']['tmp_name'];	
    $Destino="Fotos/".$NombreFoto;
	copy($Ruta,$Destino);	
	
	$CodigoPersona=$_POST['CodigoPersona'];
	$Correo=$_POST['Correo'];
	$Contrasena=$_POST['Contrasena'];	
	
	$Nick=$_POST['Nick'];
	$Tipo=$_POST['Tipo'];
	$Categoria=$_POST['Categoria'];
		
$consulta2=$cn->prepare('INSERT INTO cuenta(codigo_persona,correo_electronico,contrasena,foto,nick,tipo)VALUES(:codigo_persona,:correo_electronico,:contrasena,:foto,:nick,:tipo)');
$consulta2->execute(array(':codigo_persona'=>$CodigoPersona,':correo_electronico'=>$Correo,':contrasena'=>$Contrasena,':foto'=>$Destino,':nick'=>$Nick,':tipo'=>$Tipo));
$result2=$consulta2->fetch();




?>