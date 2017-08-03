<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BALANCE DE SUMAS Y SALDOS</title>
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

$consulta=$cn->prepare('SELECT C.codigo_cuenta_contable,C.nombre,M.debe,M.haber,M.saldo,C.tipo
FROM cuenta_contable C,mayor_tiene M
WHERE C.codigo_cuenta_contable=M.codigo_cuenta_contable AND (M.debe!=0 OR M.haber!=0 ) ORDER BY codigo_cuenta_contable');
$consulta->execute();
?>

<div style="width:786px;height:80px;background-color:#FFFF80;margin:10px auto;padding-top:5px;">
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EL GATO BLANCO</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">BALANCE DE COMPROBACION DE SUMAS Y SALDOS</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">AL 31 DE DICIEMBRE DE 2014</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EXPRESADO EN BOLIVIANOS</span></center>
</div>  

<div style="width:790px; margin:10px auto;">
 

<center>
<table width="786" height="240" cellpadding="2" cellspacing="0" style="border:1px #DD6F00 solid;">
  <tr>
    <td width="77" rowspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
      <span style="font-family:Arial, Helvetica, sans-serif;">NUMERO</span>
    </center></td>
    <td width="327" rowspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
      <span style="font-family:Arial, Helvetica, sans-serif;">CUENTAS O DETALLES </span>
    </center></td>
    <td height="18" colspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;border-bottom:1px #E1E1E1 solid;"><center>SUMAS</center></td>
    <td colspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-bottom:1px #E1E1E1 solid;"><center>SALDOS</center></td>
    </tr>
  <tr>
    <td width="86" height="18" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center><span style="font-family:Arial, Helvetica, sans-serif;">DEBE</span></center></td>
    <td width="85" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center><span style="font-family:Arial, Helvetica, sans-serif;">HABER</span></center></td>
    <td width="93" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>DEUDOR</center></td>
    <td width="92" style="background-color:#DD6F00;color:#FFFFFF;"><center><span style="font-family:Arial, Helvetica, sans-serif;">ACREEDOR</span></center></td>
  </tr>
  
    
 
	<?php 
	$totalDebe=0;
	$totalHaber=0;
	$totalDeudor=0;
	$totalAcreedor=0;
	
	while($result=$consulta->fetch())
	{
	?>
  	<tr>
	
	
  	  <td height="35" style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;">
	  <?php echo $result['codigo_cuenta_contable']?></td>
	  
  	  <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;border-right:1px #DD6F00 solid;">
	  <?php echo $result['nombre'].' ('.$result['tipo'].')'?></td>
	  
  	  <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><span style="border-right:1px #E1E1E1 solid;"><?php 
	  $totalDebe=$totalDebe+$result['debe'];
	  echo $result['debe'];
	  
	  ?></span></td>
	  
  	  <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;border-right:1px #DD6F00 solid;"><span>
  	    <?php
		$totalHaber=$totalHaber+$result['haber'];
		echo $result['haber'];
		 
		?>
  	  </span></span></td>
	  
  	   <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><span>
  	     <?php
		if($result['saldo']=='Deudor'){echo $result['debe']-$result['haber'];$totalDeudor=$totalDeudor+$result['debe']-$result['haber'];}
		else{echo '';}
		?>
  	   </span></td>
	  
	 <td style="border-bottom:1px #DD6F00 solid;"><span>
	   <?php
		if($result['saldo']=='Acreedor'){echo $result['haber']-$result['debe'];$totalAcreedor=$totalAcreedor+$result['haber']-$result['debe'];}
		else{echo '';}
		?>
	 </span></td>
    </tr>
	
  <?php 
  }
  ?>
  	<tr>
  	  <td height="32" style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">	   </td>
  	  <td style="border-right:none;border-top:none;border-bottom:none;"><br>
  	    <br />  	    <br></td>
  	  
	  <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">
	  <br />
	  <br></td>
  	  <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"><br></td>
  	  <td style="border-top:none;border-bottom:none;">&nbsp;</td>
  	  <td style="border-top:none;border-bottom:none;">
	  <br />	  <br></td>
    </tr>
  	<tr>
  	  <td rowspan="2" style="border-top:none;border-right:1px #E1E1E1 solid;"><?php
	  if($totalDebe==$totalHaber && $totalDeudor==$totalAcreedor)
	  {
	  ?>
        <center>
          <img src="Imagenes/bien.jpg" width="26" height="26"/>
        </center>
        <?php
	  }
	  else
	  {
	  ?>
        <center>
          <img src="Imagenes/mal.jpg" width="26" height="26"/>
        </center>
        <?php
	  }
	  ?></td>
  	  <td rowspan="2" style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;">&nbsp;</td>
  	  <td style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;"><span style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"><?php echo $totalDebe;?></span></td>
  	  <td height="54" style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;"><span style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"><?php echo $totalHaber;?></span></td>
	  <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><span style="border-top:none;border-bottom:none;"><?php echo $totalDeudor;?></span></td>
	  <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><span style="border-top:none;border-bottom:none;"><?php echo $totalAcreedor;?></span></td>
  	</tr>
  	<tr>
  	  <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
  	  <td height="24" style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
	  <td style="border-top:none;">&nbsp;</td>
	  <td style="border-top:none;">&nbsp;</td>
  	</tr>
 </table>
 </center>
 <br />
 
 





</div>
	
	
</body>
</html>