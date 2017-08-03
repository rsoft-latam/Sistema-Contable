<?php
include("Conexion.php");

	$a1=$_POST['T1'];
	$a2=$_POST['T2'];
		
	$sql=$cn->prepare('SELECT * FROM cuenta WHERE correo_electronico=:Correo AND contrasena=:Contrasena');	
	$sql->execute(array(':Correo' => $a1,':Contrasena' => $a2 ));		
	$resultado = $sql->fetch();
	
	$tam=count($resultado);	
	$cod=$resultado['codigo_cuenta'];    
	$Tipo=$resultado['tipo'];	
	
					$es="Activo";	
					
					$sql3=$cn->prepare('UPDATE estado SET nombre=:Nombre WHERE codigo_cuenta=:Codigo');	
					$sql3->execute(array(':Nombre' => $es,':Codigo' => $cod));		
					$resultado3 = $sql3->fetch();


	if($tam>1)		
	{
			if($Tipo == "Administrador")
			{	
	   		header('Location: AdministradorAmazon.php?id='.$cod);			
			}	
			if($Tipo == "Administrador Sucursal")
			{						
	    	header('Location: AdministradorAmazon.php?id='.$cod);				
			}	
			
			if($Tipo == "Cliente")
			{						
	    	header('Location: Cliente.php?id='.$cod);				
			}	
			
			if($Tipo == "Empleado")
			{						
	    	header('Location: Empleado.php?id='.$cod);				
			}	
	}
	else
	{
	header('Location: index.php');
	}	
?>
