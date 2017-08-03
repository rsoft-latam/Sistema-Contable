<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="css/DatosPersona.css" />
<script type="text/javascript" language="javascript" src="DataTables/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>



<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "",
	"zeroRecords": "Nothing found - sorry",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": null,
	"url": "",
	"paginate": {
		"first":    "Erster",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Letzter"
				}			
        }
    } );
} );
</script>

<style type="text/css">
<!--
.Estilo4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo5 {font-size: 12px}
.Estilo11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #7C7C7C; }
-->
tr {
border-bottom:1px #000000 solid;

}
.Estilo12 {font-family: Vrinda}
.Estilo18 {font-size: 16}
.Estilo22 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo26 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
</style>
</head>

<body>
<?php
include('Conexion.php');
$Codigo=$_POST['id'];

$sql=$cn->prepare("SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo"); 
$sql->execute(array(':Codigo'=>$Codigo));
$op=$sql->fetch();
$NumeroDocumento=$op['codigo_persona'];

$sql2=$cn->prepare("SELECT * FROM persona WHERE codigo_persona=:Numero");
$sql2->execute(array(':Numero'=>$NumeroDocumento)); 
$Datos=$sql2->fetch();

?>



<div style="width:800px; margin:0 auto;">
<table width="800" height="343" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px; " id="example" class="display compact">
<thead>
  <tr>
    <th scope="row">&nbsp;</th>
    <td colspan="5"><div align="center" style="height:35px; padding-top:17px;"><span class="Estilo26">Configuracion de Datos Personales </span></div></td>
    <td>&nbsp;</td>
  </tr>
  </thead>
  <tfoot>
  <tr>
    <th scope="row">&nbsp;</th>
    <td colspan="5"><div align="center" style="padding-top:15px;   height:35px;"><span class="Estilo26"><a href="">Descargar</a> una copia de tu Informacion  </span></div></td>
    <td>&nbsp;</td>
  </tr>
  </tfoot>
  <tr>
    <th width="13" height="35" scope="row"><span class="Estilo12"></span></th>
    <td width="141"><span class="Estilo22">Codigo de Persona</span></td>
    <td width="9"><span class="Estilo5"></span></td>
    <td width="131"><span class="Estilo11"><?php echo $Datos['codigo_persona']; ?></span></td>
    <td width="10"><span class="Estilo5"></span></td>
    <td width="72"><span class="Estilo4">
	<a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <th height="36" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Nombres</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['nombre']?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="32" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Apellido Paterno</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['paterno'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="37" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Apellido Materno</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['materno'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="31" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Genero</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['genero'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="38" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Fecha de Nacimiento</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['fecha_nacimiento'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <th height="38" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Nacionalidad</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['nacionalidad'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="38" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Direccion</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['direccion'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="38" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Telefono</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['telefono'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo4"><a href="">Editar<img src="Imagenes/sign-up-icon.png" width="18" height="18" style="margin-bottom:-5px; margin-left:5px;"/></a></span></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>
