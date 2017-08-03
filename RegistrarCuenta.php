<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registro de Cuenta</title>
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
    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "CrearCuenta.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	            processData: false,
				success:  function() {   alert('Cuenta Registrado con Exito');  }
            })               
        });
    });
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

$consulta=$cn->prepare('SELECT codigo_persona,(nombre_paterno_materno(codigo_persona))genero FROM persona WHERE codigo_persona NOT IN (SELECT codigo_persona FROM proveedor) AND codigo_persona NOT IN (SELECT codigo_persona FROM persona_pasiva)');
$consulta->execute();
?>
    
    <form enctype="multipart/form-data" id="formuploadajax" method="post">
	
	<fieldset>
   <legend><strong>Informacion Cuenta</strong></legend>
   <table width="776" height="108" border="0" cellpadding="2" cellspacing="0">
   <tr>
       <td width="8" scope="row">&nbsp;</td>
       <td width="136" height="28" scope="row"><label for="label2">Codigo Persona:</label></td>
       <td width="229">
	   <select size="1" name="CodigoPersona" id="CodigoPersona">
       
       
         <?php 
		
	while($result=$consulta->fetch())
	{
	?>
         <option value="<?php echo $result['codigo_persona']?>"><?php echo $result['codigo_persona'];?><?php echo $result['genero'];?></option>
         <?php 
	}
	?>
       </select>       </td>
       <td width="14"></td>
       <td width="91"><label for="label4">Nick:</label></td>
       <td width="253"><input type="text" name="Nick"  size="30" maxlength="32" id="Nick"/></td>
       <td width="17"></td>
   </tr>
          
  <tr>
      <td></td>
      <td><label for="label2">Correo Electronico:</label></td>
      <td><input type="email" name="Correo" id="Correo" size="30" maxlength="32" /></td>
      <td></td>
      <td><label for="label4">Tipo:</label></td>
      <td><select size="1" name="Tipo" id="Tipo">
        <option value="Cliente">Cliente</option>
        <option value="Empleado">Empleado</option>
        <option value="Administrador Amazon">Administrador</option>
        <option value="Administrador Sucursal">Contador</option>
      </select></td>
      <td></td>
 </tr>
		      
 <tr>
     <td></td>
     <td><label for="label2">Contraseña:</label></td>
     <td><input type="text" name="Contrasena"  size="30" maxlength="32" id="Contrasena"/></td>
     <td>&nbsp;</td>
     <td></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
 </tr>
          
 <tr>
   <td></td>
   <td><label for="label4">Foto:</label></td>
   <td colspan="5"><input type="file" name="Foto" id="Foto"/></td>
   </tr>
 </table>
 </fieldset>
	
	 <fieldset>
 <table width="776" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="submit" value="Registrar" class="submit"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name="submit12"id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>

        
    </form>
    
    

	
	
	


<div style="width:790px; margin:10px auto;">

<table width="789"  border="0" id="example">
  <thead>
    <tr >
	  <td width="128" height="25"><span class="Estilo15">Foto</span></td>
	  <td width="128" height="25"><span class="Estilo15">Codigo Cuenta</span></td>
      <td width="106"><span class="Estilo15">Codigo Persona</span></td>
      <td width="116"><span class="Estilo15">Correo Electronico</span></td>
      <td width="125"><span class="Estilo15">Contraseña</span></td>
	  <td width="125"><span class="Estilo15">Nick</span></td>
	  <td width="125"><span class="Estilo15">Tipo</span></td>
	
    </tr>
  </thead>
  <tfoot>
    <tr>
   	 <td width="128" height="25"><span class="Estilo15">Foto</span></td>
	  <td width="128" height="25"><span class="Estilo15">Codigo Cuenta</span></td>
      <td width="106"><span class="Estilo15">Codigo Persona</span></td>
      <td width="116"><span class="Estilo15">Correo Electronico</span></td>
      <td width="125"><span class="Estilo15">Contraseña</span></td>
	  <td width="125"><span class="Estilo15">Nick</span></td>
	  <td width="125"><span class="Estilo15">Tipo</span></td>
	  
    </tr>
  </tfoot>
  <tbody>
    <?php 


	$sql=$cn->prepare('SELECT * FROM cuenta');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><span class="Estilo3"><img src=<?php echo $op['foto'];?> width="60" height="55" style="padding:2px; border:1px #000000 solid;"></span></td>
  <td><span class="Estilo3"><?php echo $op['codigo_cuenta'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['codigo_persona'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['correo_electronico'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['contrasena'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['nick'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['tipo'];?></span></td>

 
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>
	
	
</body>
</html>