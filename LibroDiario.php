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

$consulta=$cn->prepare('SELECT * FROM asiento WHERE codigo_libro_diario=1 ORDER BY numero_asiento');
$consulta->execute();
$totalDebe=0;
$totalHaber=0;
?>

<div style="width:774px;height:100px;background-color:#FFFF80;margin:10px auto;padding-top:5px;">
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EL GATO BLANCO</span></center>
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">LIBRO DIARIO</span></center>
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">LA PAZ  -  BOLIVIA</span></center>
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">AL 31 DE DICIEMBRE DEL 2014</span></center>
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EXPRESADO EN BOLIVIANOS</span></center>

</div>  

<div style="width:790px; margin:10px auto;">
 	<?php 
	while($result=$consulta->fetch())
	{
	?>

<center>
<table width="774" height="177" cellpadding="2" cellspacing="0" style="border:1px #DD6F00 solid;">
  <tr>
    <td width="76" height="18" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">FECHA</span></center></td>
    <td colspan="2" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">CUENTAS O DETALLES </span></center></td>
    <td width="69" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">CODIGO</span></center></td>
    <td width="100" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">DEBE</span></center></td>
    <td width="92" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">HABER</span></center></td>
  </tr>
  
    
 
	
  	<tr>
  	  <td style="border-bottom:none;border-top:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><?php echo $result['fecha']?></td>
  	  <td colspan="2" style="border-bottom:none;border-top:1px #DD6F00 solid;border-right:1px #DD6F00 solid;background-color:#5EFF86;"><center><span style="color:#333333;"><?php echo 'ASIENTO Nº '.$result['numero_asiento'];?></span></center></td>
  	  <td style="border-bottom:none;border-top:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><span></span></td>
  	  <td style="border-bottom:none;border-top:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><span></span></td>
  	  <td style="border-bottom:none;border-top:1px #DD6F00 solid;"><span></span></td>
    </tr>
  	<tr>
  	  <td height="60" style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">	   </td>
  	  <td width="188" style="border-right:none;border-top:none;border-bottom:none;">
	  <?php	 
	  $consulta3=$cn->prepare('SELECT T.numero_asiento,T.tipo,C.nombre,T.monto FROM diario_tiene T,cuenta_contable C WHERE T.codigo_cuenta_contable=C.codigo_cuenta_contable AND T.numero_asiento=:numero_asiento AND T.tipo="Debe"');
	  $consulta3->execute(array(':numero_asiento'=>$result['numero_asiento']));
	  $espacios=''; 
	  while($result3=$consulta3->fetch())
	  {
	 
	  ?>
	<span style="border-bottom:1px #000000 solid;font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['nombre']?></span><br> 
    
	  <?php 
	   $espacios=$espacios.'</br>';
	  }
	  ?>	  </td>
  	  
	  <td width="163" style="border-left:none;border-top:none;border-bottom:none;border-right:1px #DD6F00 solid;">
	
	  <?php 
	  $consulta3=$cn->prepare('SELECT T.numero_asiento,T.tipo,C.nombre,T.monto FROM diario_tiene T,cuenta_contable C WHERE T.codigo_cuenta_contable=C.codigo_cuenta_contable AND T.numero_asiento=:numero_asiento AND T.tipo="Haber"');
	  $consulta3->execute(array(':numero_asiento'=>$result['numero_asiento']));
	   
	  echo $espacios;	 
	  while($result3=$consulta3->fetch())
	  {
	   
	  ?>
	  	
	  <span style="border-bottom:1px #000000 solid;font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['nombre']?></span><br> 
	  
	   
	  <?php 
	  
	  }
	  ?>	  

	  </td>
	  <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">
	   <?php 
	  $consulta2=$cn->prepare('SELECT * FROM diario_tiene WHERE numero_asiento=:numero_asiento');
	  $consulta2->execute(array(':numero_asiento'=>$result['numero_asiento']));
	   
	  while($result2=$consulta2->fetch())
	  {
	  ?>
	  <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $result2['codigo_cuenta_contable']?></span><br> 
	  <?php 
	  }
	  ?>	  </td>
  	  <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">
	  
	  <?php 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene T,cuenta_contable C WHERE T.codigo_cuenta_contable=C.codigo_cuenta_contable AND T.numero_asiento=:numero_asiento AND T.tipo="Debe"');
	  $consulta3->execute(array(':numero_asiento'=>$result['numero_asiento']));
	  $sumadebe=0;
	  
	  while($result3=$consulta3->fetch())
	  {
	  $sumadebe=$sumadebe+$result3['monto'];
	  ?>
	 
	  <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['monto'].' Bs';?></span><br> 
	  <?php 
	  }
	  ?>	  </td>
  	  <td style="border-top:none;border-bottom:none;">
	  
	  <?php 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene T,cuenta_contable C WHERE T.codigo_cuenta_contable=C.codigo_cuenta_contable AND T.numero_asiento=:numero_asiento AND T.tipo="Haber"');
	  $consulta3->execute(array(':numero_asiento'=>$result['numero_asiento']));
	  $sumahaber=0;
	  echo ($espacios);	
	  while($result3=$consulta3->fetch())
	  {
	
	  $sumahaber=$sumahaber+$result3['monto'];  
	  ?>
	  
	  <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['monto'].' Bs';?></span><br> 
	  <?php 
	  }
	  ?>	  </td>
    </tr>
  	<tr>
	
    <td rowspan="3" style="border-top:none;border-right:1px #E1E1E1 solid;">
	 <?php
	  if($sumadebe=$sumahaber)
	  {
	  ?>
	  <center><img src="Imagenes/bien.jpg" width="26" height="26"/></center>	 
	  <?php
	  }
	  else
	  {
	  ?>
	  
	  <center><img src="Imagenes/mal.jpg" width="26" height="26"/></center>	
	  
	  <?php
	  }
	  ?>
	
	</td>
    <td colspan="2" rowspan="3" style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;">
	<span style="color:#590000;">GLOSA:</span><?php echo ' '.$result['glosa'];?>
	</td>
    <td rowspan="3" style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
    <td height="32" style="border-top:none;border-right:1px #E1E1E1 solid;">

	<br><br></td>
    <td style="border-top:none;"><br><br></td>
  	</tr>
  	<tr>
  	  <td height="22" style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;"><span><?php echo $sumadebe.' Bs'; $totalDebe=$totalDebe+$sumadebe; ?></span></td>
	  <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><span><?php echo $sumahaber.' Bs';$totalHaber=$totalHaber+$sumahaber;?></span></td>
  	</tr>
  	<tr>
  	  <td height="18" style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
	  <td style="border-top:none;">&nbsp;</td>
  	</tr>
  	
 </table>
 </center>
 <br />
 
  <?php 
  }
  ?>



<table width="774"  cellpadding="2" cellspacing="0" style="border:1px #DD6F00 solid;">
  <tr>
    <td width="88">&nbsp;</td>
    <td width="389">&nbsp;</td>
    <td width="75">&nbsp;</td>
    <td width="106">&nbsp;</td>
    <td width="102">&nbsp;</td>
  </tr>
  <tr>
    <td>
	<?php
	  if($totalDebe==$totalHaber)
	  {
	  ?>
	  <center><img src="Imagenes/bien.jpg" width="26" height="26"/></center>	 
	  <?php
	  }
	  else
	  {
	  ?>
	  
	  <center><img src="Imagenes/mal.jpg" width="26" height="26"/></center>	
	  
	  <?php
	  }
	  ?>
	
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $totalDebe.' Bs'; ?></td>
    <td><?php echo $totalHaber.' Bs';  ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


</div>
	
	
</body>
</html>