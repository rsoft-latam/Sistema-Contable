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
                url: "CrearLibroDiario.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	            processData: false,
				success:  function() {   alert('Libro Diario Creado con Exito');  }
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

?>
    
    <form enctype="multipart/form-data" id="formuploadajax" method="post">
	
	<fieldset>
   <legend><strong>Informacion Libro Diario</strong></legend>
   <table width="776" height="108" border="0" cellpadding="2" cellspacing="0">
   <tr>
       <td width="58" scope="row">&nbsp;</td>
      <td width="268" height="28" scope="row"><label for="label2">Codigo Libro Diario:</label></td>
      <td width="377"><input type="text" name="codigo_libro_diario" id="codigo_libro_diario"/></td>
      <td width="5"></td>
       <td width="5"></td>
       <td width="13">&nbsp;</td>
       <td width="22"></td>
   </tr>
          
  <tr>
      <td></td>
      <td><label for="label2">Nombre:</label></td>
      <td><input type="text" name="nombre" id="nombre"/></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
 </tr>
		      
 <tr>
     <td></td>
     <td></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
 </tr>
          
 <tr>
   <td></td>
   <td></td>
   <td>&nbsp;</td>
   <td></td>
   <td></td>
   <td></td>
   <td> </tr>
 <tr>
   <td></td>
   <td></td>
   <td>
   
   <td></td>
     
   <td></td>  
   <td></td>
   
   </td>
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

	  <td width="128" height="25"><span class="Estilo15">Codigo Libro Diario</span></td>
      <td width="106"><span class="Estilo15">Nombre</span></td>
    
    </tr>
  </thead>
  <tfoot>
    <tr>
   <td width="128" height="25"><span class="Estilo15">Codigo Libro Diario</span></td>
      <td width="106"><span class="Estilo15">Nombre</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 


	$sql=$cn->prepare('SELECT * FROM libro_diario');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><?php echo $op['codigo_libro_diario'];?></td>
  <td><span class="Estilo3"><?php echo $op['nombre'];?></span></td>


</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>
	
	
</body>
</html>