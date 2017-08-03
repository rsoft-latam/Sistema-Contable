<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Registro de Datos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

</style>
<link rel="stylesheet" type="text/css" media="all" href="css/RegistrarCuenta.css" />
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables_themeroller.css"/>
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>

		
			
<script>
function realizaProceso(){
        var parametros = {
                "numero_almacen" : $('#NumeroAlmacen').val(),
                "codigo_sucursal" : $('#CodigoSucursal').val(),
				"nombre" : $('#Nombre').val(),
				"tipo" : $('#Tipo').val(),
				"ubicacion" : $('#Ubicacion').val(),
				"capacidad" : $('#Capacidad').val()
				
        };
        $.ajax({
                data:  parametros,
                url:   'CrearAlmacen.php',
                type:  'post',
                success:  function() {   alert('Registrado con Exito');  }
        });
}
</script>
		
		
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "cargando......",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "No existen registros",
		"info": "pagina _PAGE_ de _PAGES_",
	"infoEmpty": "Ningun registro disponible",
	"infoFiltered": "(filtrado de  _MAX_ total registros)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Primero",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Ultimo"
				}				
        }
    } );
} );
</script>

</head>

<body>
<?php 
include('Conexion.php');

$consulta=$cn->prepare('SELECT * FROM sucursal');
$consulta->execute();
?>





<fieldset>
<legend><strong>Informacion Almacen</strong></legend>
<table width="776" height="74" border="0" cellpadding="2" cellspacing="0">
      <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"><label for="label3">Numero Almacen:</label></td>
     <td><select size="1" name="Tipo" id="NumeroAlmacen">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
	    <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
       <option value="13">13</option>
       <option value="14">14</option>
       <option value="15">15</option>
       <option value="16">16</option>
       <option value="17">17</option>
       <option value="18">18</option>
	   <option value="19">19</option>
       <option value="20">20</option>
     </select></td>
	 
	 
     <td>&nbsp;</td>
     <td><label for="label3">Tipo:</label></td>
     <td><select size="1" name="select" id="Tipo">
       <option value="Almacen de Materia Prima">Almacen de Materia Prima</option>
       <option value="Almacen de Productos Intermedios">Almacen de Productos Intermedios</option>
       <option value="Almacen de Productos Terminados">Almacen de Productos Terminados</option>
       <option value="Almacen de Recambios">Almacen de Recambios</option>
       <option value="Almacen de Materiales Auxiliares">Almacen de Materiales Auxiliares</option>
       <option value="Almacen de Archivos">Almacen de Archivos</option>
       <option value="Almacen Convencional">Almacen Convencional</option>
     </select></td>
     <td>&nbsp;</td>
 </tr>     
 <tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"><label for="label2">Codigo Sucursal:</label></td>
   <td>
   
    <select size="1" name="Genero" id="CodigoSucursal">
	
	<?php 
		
	while($result=$consulta->fetch())
	{
	?>
	
             <option value="<?php echo $result['codigo_sucursal']?>"><?php echo $result['codigo_sucursal']?></option>
      
			 
	<?php 
	}
	?>
      </select>   </td>
   <td>&nbsp;</td>
   <td><label for="label">Ubicacion:</label></td>
   <td><input type="text" name="T22"  size="30" maxlength="40" id="Ubicacion" /></td>
   <td>&nbsp;</td>
 </tr>
 <tr>
     <td width="13" scope="row">&nbsp;</td>
     <td width="171" height="26" scope="row"><label for="label">Nombre:</label></td>
     <td width="180"><input type="text" name="T2"  size="30" maxlength="40" id="Nombre" /></td>
     <td width="15">&nbsp;</td>
     <td width="104"><label for="label">Capacidad:</label></td>
     <td width="247"><input type="text" name="T23"  size="30" maxlength="40" id="Capacidad" /></td>
     <td width="18">&nbsp;</td>
 </tr>
          
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"></td>
     <td>&nbsp;</td>
	 
	 
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
 </tr>
</table>
</fieldset>
	
 <fieldset>
 <table width="776" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="button" href="javascript:;" onclick="realizaProceso();return false;" value="Registrar" class="submit"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name="submit12"id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>




<div style="width:790px; margin:10px auto;">

<table width="788"  border="0" id="example">
  <thead>
    <tr >
	  <td width="128" height="25"><span class="Estilo15">Numero Almacen</span></td>
      <td width="106"><span class="Estilo15">Codigo Sucursal</span></td>
      <td width="116"><span class="Estilo15">Nombre</span></td>
      <td width="125"><span class="Estilo15">Tipo</span></td>
	   <td width="125"><span class="Estilo15">Ubicacion</span></td>
	    <td width="125"><span class="Estilo15">Capacidad</span></td>
	  
    </tr>
  </thead>
  <tfoot>
    <tr>
     <td width="128" height="25"><span class="Estilo15">Numero Almacen</span></td>
      <td width="106"><span class="Estilo15">Codigo Sucursal</span></td>
      <td width="116"><span class="Estilo15">Nombre</span></td>
      <td width="125"><span class="Estilo15">Tipo</span></td>
	   <td width="125"><span class="Estilo15">Ubicacion</span></td>
	    <td width="125"><span class="Estilo15">Capacidad</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 


	$sql=$cn->prepare('SELECT * FROM almacen');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><span class="Estilo3"><?php echo $op['numero_almacen'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['codigo_sucursal'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['nombre'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['tipo'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['ubicacion'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['capacidad'];?></span></td>
 
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>



</body>
</html>
