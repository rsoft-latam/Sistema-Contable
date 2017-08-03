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


  <script type="text/javascript">
            $(document).ready(function(){
                $('#CodigoSucursal').change(function(){
                    var id=$('#CodigoSucursal').val();
                    $('#seccion').load('ajax4.php?id='+id);
                });    
            });
        </script>
		
			
<script>
function realizaProceso(){
        var parametros = {
                "codigo_persona" : $('#CodigoPersona').val(),
                "codigo_sucursal" : $('#CodigoSucursal').val(),
			    "numero_almacen" : $('#NumeroAlmacen').val()
        };
        $.ajax({
                data:  parametros,
                url:   'CrearETrabaja.php',
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

$consulta=$cn->prepare('SELECT * FROM empleado WHERE codigo_persona NOT IN (SELECT codigo_persona FROM e_supervisa)');
$consulta->execute();

$consulta1=$cn->prepare('SELECT * FROM sucursal');
$consulta1->execute();

$consulta2=$cn->prepare('SELECT * FROM almacen');
$consulta2->execute();
?>





<fieldset>
<legend><strong>Informacion Empleado Trabaja</strong></legend>
<table width="776" height="74" border="0" cellpadding="2" cellspacing="0">
          
 <tr>
   <td width="26" scope="row">&nbsp;</td>
   <td width="205" height="26" scope="row"><label for="label2">Codigo Empleado:</label></td>
   <td width="213">
   
    <select size="1" name="Genero" id="CodigoPersona">
	
	<?php 
		
	while($result=$consulta->fetch())
	{
	?>
	
             <option value="<?php echo $result['codigo_persona']?>"><?php echo $result['codigo_persona'];?></option>
      
			 
	<?php 
	}
	?>
      </select>   </td>
   <td width="27">&nbsp;</td>
 </tr>
  <tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"><label for="label2">Codigo Sucursal:</label></td>
   <td><select size="1" name="select" id="CodigoSucursal">
     <?php 
		
	while($result1=$consulta1->fetch())
	{
	?>
     <option value="<?php echo $result1['codigo_sucursal']?>"><?php echo $result1['nombre'];?></option>
     <?php 
	}
	?>
   </select></td>
   <td>&nbsp;</td>
 </tr>
       
<tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"><label for="label2">Numero Almacen:</label></td>
   <td>
   
    <div id="seccion">
	 <select name="edo">
       <option value="">Seleccione Almacen</option>
     </select>
	 </div>	 </td>
   <td>&nbsp;</td>
 </tr>	 
	      
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"></td>
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

<table width="789"  border="0" id="example">
  <thead>
    <tr >
	  <td width="128" height="25"><span class="Estilo15">Codigo Persona</span></td>
      <td width="106"><span class="Estilo15">Codigo Sucursal</span></td>
	  <td width="106"><span class="Estilo15">Codigo Almacen</span></td>
    </tr>
  </thead>
  <tfoot>
    <tr>
 <td width="128" height="25"><span class="Estilo15">Codigo Persona</span></td>
      <td width="106"><span class="Estilo15">Codigo Sucursal</span></td>
	  <td width="106"><span class="Estilo15">Codigo Almacen</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 


	$sql=$cn->prepare('SELECT * FROM e_trabaja');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><span class="Estilo3"><?php echo $op['codigo_persona'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['codigo_sucursal'];?></span></td>
<td><span class="Estilo3"><?php echo $op['numero_almacen'];?></span></td>
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>



</body>
</html>