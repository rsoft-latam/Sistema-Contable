<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contactos</title>
</head>

<body>


 <table width="206" height="40" border="0" cellspacing="0" cellpadding="0" style="margin-top:-3px; ">
<?php 
include("Conexion.php");
$cod=$_POST['id'];  
//header('refresh:2; url=Contactos.php');

$consulta=$cn->prepare("SELECT cuenta.correo_electronico,cuenta.foto,persona.nombre,persona.paterno,persona.materno FROM cuenta,persona WHERE cuenta.codigo_cuenta IN (SELECT codigo_cuenta FROM estado WHERE nombre='Activo') AND cuenta.codigo_persona=persona.codigo_persona AND cuenta.codigo_cuenta!=:Codigo");
$consulta->execute(array(':Codigo'=>$cod));
while($res=$consulta->fetch())
{	
?>
  <tr >
	 <td width="43" height="40" ><img src=<?php echo $res['foto'];?> width="36" height="33" style="border:1px #9E9E9E solid;"/></td>
     
	 <td width="163" ><a href="" style="text-decoration:none;">
	 <p style="color:#0D0D0D; font-family:Arial, Helvetica, sans-serif;   font-size:12px;margin:0px; padding:px; width:120px; border:none;">
	 <?php echo $res['nombre']." ".$res['paterno']." ".$res['materno'];?>	 </p></a>	 </td>
  </tr>
<?php
}
?>
</table>



</body>
</html>
