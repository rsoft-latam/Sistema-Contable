<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Muro</title>

<link rel="stylesheet" href="css/MuroAdministrador.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  
		var codigo=<?php echo $_POST['id'];?>;
		$("#Medio").load('Secciones.php');	
		}
	});
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){
	  
	  
	  
	  var codigo=<?php echo $_POST['id'];?>;
      $("#Medio").load(href,{id:codigo});		 
		 
      });
   });
});
</script>

</head>

<body>
<?php   
include('Conexion.php');
  $cod=$_POST['id'];  
 
  $sql=$cn->prepare('SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo');
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['foto'];?> width="130" height="106" class="foto1" /></span>
  <p class="letra1"><strong>Administracion Contable</strong></p>
		 
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCuentaContable.php" class="letra2">Registrar Cuenta Contable</a>
	</p>
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAsiento.php" class="letra2">Registrar Asiento</a>
	</p>
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarLibroDiario.php" class="letra2">Libro Diario</a>
	</p>
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTiene.php" class="letra2">Agregar Cuentas Asiento</a>
	</p>
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarLibroDiario.php" class="letra2">Crear Libro Diario</a>
	</p>
	  <p class="letra1"><strong>Vistas</strong></p>
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="LibroDiario.php" class="letra2">Libro Diario</a>
	</p>

		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="LibroMayor.php" class="letra2">Libro Mayor</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="BalanceSumasSaldos.php" class="letra2">Balance Sumas y Saldos</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="HojaTrabajo6.php" class="letra2">Hoja de Trabajo</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="CuentasCobrar.php" class="letra2">Cuentas por Cobrar</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="CuentasPagar.php" class="letra2">Cuentas por Pagar</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="Relacion.php" class="letra2">Relacion entre CP y CC</a>
	</p>
	
	
	  <p class="letra1"><strong>Administracion Personalizada</strong></p>
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAdministrador.php" class="letra2">Registrar Administrador</a>
	</p>
	
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAlmacen.php" class="letra2">Registrar Almacen</a>
	</p>
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAlmacenadoEn.php" class="letra2">Registrar Almacenado En</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarATrabaja.php" class="letra2">Registrar A Trabaja</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCarrito.php" class="letra2">Registrar Carrito</a>
	</p
	
	><p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCliente.php" class="letra2">Registrar Cliente</a>
	</p>
	
	
	
	
		
	
</div>	 
   
<div id="Medio" style="width:838px; margin:10px; padding:0px; float:left; margin-left:8px;border:1px #E5E5E5 solid;
overflow-y:hidden;overflow-x:auto">					 
</div>

</body>
</html>
