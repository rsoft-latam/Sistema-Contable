<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
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
.Estilo22 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo24 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
</style>
</head>

<body>

<?php
include('Conexion.php');
$Codigo=$_POST['id'];

$sql=$cn->prepare("SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo"); 
$sql->execute(array(':Codigo'=>$Codigo));
$DatosCuenta=$sql->fetch();



?>



<div style="width:800px; margin:0 auto;">
  <table width="802" height="437" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px;" id="example" class="display compact">
    <thead>
      <tr>
        <th height="57" scope="row">&nbsp;</th>
        <td colspan="5"><div align="center"><span class="Estilo24">Configuracion de Datos Cuenta </span></div></td>
        <td>&nbsp;</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="row">&nbsp;</th>
        <td colspan="5"><div align="center"><span class="Estilo24"><a href="">Descargar</a> una copia de tu Informacion  </span></div></td>
        <td>&nbsp;</td>
      </tr>
    </tfoot>
    <tr>
      <th width="14" height="35" scope="row"><span class="Estilo12"></span></th>
      <td width="154"><span class="Estilo22">Codigo de Cuenta</span></td>
      <td width="12"><span class="Estilo5"></span></td>
      <td width="128"><span class="Estilo11"><?php echo $DatosCuenta['codigo_cuenta']?></span></td>
      <td width="8"><span class="Estilo5"></span></td>
      <td width="63"><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr>
      <th height="32" scope="row"><span class="Estilo12"></span></th>
      <td><span class="Estilo22">Correo Electronico</span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo11"><?php echo $DatosCuenta['correo_electronico']?></span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="36" scope="row"><span class="Estilo12"></span></th>
      <td><span class="Estilo22">Contraseña</span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo11"><?php echo $DatosCuenta['contrasena']?></span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="32" scope="row"><span class="Estilo12"></span></th>
      <td><span class="Estilo22">Tipo de Cuenta</span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo11"><?php echo $DatosCuenta['tipo']?></span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="30" scope="row"><span class="Estilo12"></span></th>
      <td><span class="Estilo22">Nick</span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo11"><?php echo $DatosCuenta['nick']?></span></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th height="141" scope="row"><span class="Estilo12"></span></th>
      <td><span class="Estilo22">Foto</span></td>
      <td><span class="Estilo5"></span></td>
      <td><dl class="Estilo4">
          <img src="<?php echo $DatosCuenta['foto']?>"  width="130" height="116" style="  border:1px #999999 solid; padding:2px; "/>
                              </dl></td>
      <td><span class="Estilo5"></span></td>
      <td><span class="Estilo4"><a href=""><img src="Imagenes/registro.png" width="18" height="18" /></a><a href=""><img src="Imagenes/basura-icono-3648-48.png" width="21" height="23" /></a></span></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>