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
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style></head>
<body>

<?php 
 
include('Conexion.php');
$restaTotal1=0;
$restaTotal2=0;

$consulta=$cn->prepare('SELECT C.codigo_cuenta_contable,C.nombre,M.debe,M.haber,M.saldo,C.tipo
FROM cuenta_contable C,mayor_tiene M
WHERE C.codigo_cuenta_contable=M.codigo_cuenta_contable AND (M.debe!=0 OR M.haber!=0) ORDER BY codigo_cuenta_contable');
$consulta->execute();
?>

<div style="width:758px;height:80px;background-color:#FFFF80;margin:10px auto;padding-top:5px;">
<center>
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EL GATO BLANCO</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">HOJA DE TRABAJO DE 6 COLUMNAS</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">AL 31 DE DICIEMBRE DE 2014</span><br />
<span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">EXPRESADO EN BOLIVIANOS</span></center>
</div>  

<div style="width:790px; margin:10px auto;">
 

<center>
  <table width="804" height="261" cellpadding="2" cellspacing="0" style="border:1px #DD6F00 solid;">
    <tr>
      <td width="66" rowspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
          <span style="font-family:Arial, Helvetica, sans-serif;">NUMERO</span>
      </center></td>
      <td width="169" rowspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
          <span style="font-family:Arial, Helvetica, sans-serif;">CUENTAS O DETALLES </span>
      </center></td>
      <td height="31" colspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;border-bottom:1px #E1E1E1 solid;"><center>
        SALDOS
      </center></td>
      <td colspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-bottom:1px #E1E1E1 solid;border-right:1px #E1E1E1 solid;"><center>
        ESTADO DE RESULTADOS
      </center></td>
      <td colspan="2" style="background-color:#DD6F00;color:#FFFFFF;border-bottom:1px #E1E1E1 solid;">BALANCE GENERAL</td>
    </tr>
    <tr>
      <td width="82" height="18" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
          <span style="font-family:Arial, Helvetica, sans-serif;">DEUDOR</span>
      </center></td>
      <td width="83" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
          <span class="style1">ACREEDOR</span>
      </center></td>
      <td width="93" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><center>
        GASTOS
      </center></td>
      <td width="85" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;"><span class="style1">
        <center>
          INGRESOS
        </center>
      </span></td>
      <td width="84" style="background-color:#DD6F00;color:#FFFFFF;border-right:1px #E1E1E1 solid;">ACTIVOS</td>
      <td width="92" style="background-color:#DD6F00;color:#FFFFFF;"><center>
        PASIVO Y PATRIMONIO
      </center></td>
    </tr>
    <?php 
	$totalDeudor=0;
	$totalAcreedor=0;
	$totalGastos=0;
	$totalIngresos=0;
	$totalActivos=0;
	$totalPasivos=0;
	
	while($result=$consulta->fetch())
	{
	?>
    <tr>
      <td height="35" style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><?php echo $result['codigo_cuenta_contable']?></td>
      <td style="border-bottom:1px #DD6F00 solid;border-right:1px #DD6F00 solid;"><?php echo $result['nombre']?></td>
      <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><span>
        <?php
		
		
		if($result['saldo']=='Deudor')
		{echo $result['debe']-$result['haber'];
		$totalDeudor=$totalDeudor+$result['debe']-$result['haber'];}
		else{echo '';}
		?>
      </span></td>
      <td style="border-bottom:1px #DD6F00 solid;border-right:1px #DD6F00 solid;"><span>
        <?php
		if($result['saldo']=='Acreedor'){echo $result['haber']-$result['debe'];$totalAcreedor=$totalAcreedor+$result['haber']-$result['debe'];}
		else{echo '';}
		?>
      </span></td>
      <td style="border-bottom:1px #DD6F00 solid;border-right:1px #E1E1E1 solid;"><?php
		if($result['saldo']=='Deudor' && $result['tipo']=='Egresos'){echo $result['debe']-$result['haber'];$totalGastos=$totalGastos+$result['debe']-$result['haber'];}
		else{echo '';}
		?>      </td>
      <td style="border-bottom:1px #DD6F00 solid;border-right:1px #DD6F00 solid;"><?php
		if($result['saldo']=='Acreedor' && $result['tipo']=='Ingresos'){echo $result['haber']-$result['debe'];$totalIngresos=$totalIngresos+$result['haber']-$result['debe'];}
		else{echo '';}
		?>      </td>
      <td style="border-bottom:1px #DD6F00 solid;"><span>
        <?php
		if($result['saldo']=='Deudor' && ($result['tipo']=='Activo' || $result['tipo']=='Activo Corriente' || 
		$result['tipo']=='Activo No Corriente') ){echo $result['debe']-$result['haber'];$totalActivos=$totalActivos+$result['debe']-$result['haber'];}
		else{echo '';}
		?>
      </span></td>
      <td style="border-bottom:1px #DD6F00 solid;"><?php
		if($result['saldo']=='Acreedor' && ($result['tipo']=='Pasivo Corriente' || $result['tipo']=='Patrimonio') ){echo $result['haber']-$result['debe'];$totalPasivos=$totalPasivos+$result['haber']-$result['debe'];}
		else{echo '';}
		?></td>
    </tr>
    <?php 
  }
  ?>
    <tr>
      <td height="32" style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"></td>
      <td style="border-right:none;border-top:none;border-bottom:none;"><br />
          <br />
          <br /></td>
      <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"><br />
          <br /></td>
      <td style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;"><br /></td>
      <td style="border-top:none;border-bottom:none;">&nbsp;</td>
      <td style="border-top:none;border-bottom:none;">&nbsp;</td>
      <td style="border-top:none;border-bottom:none;">&nbsp;</td>
      <td style="border-top:none;border-bottom:none;"><br />
          <br /></td>
    </tr>
    <tr>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;"><span>Totales</span></td>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;"><span><?php echo $totalDeudor;?></span></td>
      <td height="40" style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;"><span><?php echo $totalAcreedor;?></span></td>
      <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><?php echo $totalGastos;?></td>
      <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><?php echo $totalIngresos;?></td>
      <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><?php echo $totalActivos;?></td>
      <td style="border-top:none; background-color:#EFEFEF;border-top:2px #C60000 solid;"><?php echo $totalPasivos;?></td>
    </tr>
    <tr>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;"><span>Utilidad del Periodo</span></td>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td height="42" style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td style="border-top:none;"><?php
	  if($totalIngresos>$totalGastos)
	  {
	  $resta1=$totalIngresos-$totalGastos;
	  $restaTotal1=$resta1;
	  echo $resta1;
	  }
	  else
	  {$resta1=0;} 
	  ?></td>
      <td style="border-top:none;"><?php
	  if($totalGastos>$totalIngresos)
	  {
	  $resta2=$totalGastos-$totalIngresos;
	  $restaTotal1=$resta2;
	  echo $resta2;
	  }
	  else
	  {$resta2=0;}
	  ?></td>
      <td style="border-top:none;"><?php
	  if($totalPasivos>$totalActivos)
	  {
	  $resta3=$totalPasivos-$totalActivos;
	  $restaTotal2=$resta3;
	  echo $resta3;
	  }
	  else
	  {$resta3=0;} 
	  ?></td>
      <td style="border-top:none;"><?php
	  if($totalActivos>$totalPasivos)
	  {
	  $resta4=$totalActivos-$totalPasivos;
	  $restaTotal2=$resta4;
	  echo $resta4;
	  }
	  else
	  {$resta4=0;} 
	  ?></td>
    </tr>
    <tr>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;"><?php
	  if($restaTotal1==$restaTotal2)
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
      <td style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;">&nbsp;</td>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td height="47" style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td style="border-top:2px #C60000 solid;">
	  <?php
	  echo $totalGastos+$resta1;
	  ?>	  </td>
      <td style="border-top:2px #C60000 solid;">
	  <?php
	  echo $totalIngresos+$resta2;
	  ?>	  </td>
      <td style="border-top:2px #C60000 solid;">
	  <?php
	  echo $totalActivos+$resta3;
	  ?>	  </td>
      <td style="border-top:2px #C60000 solid;">
	  
	  <?php
	  echo $totalPasivos+$resta4;
	  ?>	  </td>
    </tr>
  </table>
</center>
 <br />
 
 





</div>
	
	
</body>
</html>