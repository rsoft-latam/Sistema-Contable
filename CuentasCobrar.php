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

$consulta=$cn->prepare('SELECT * FROM cuenta_contable where nombre like "%Cuentas a Cobrar%"  ORDER BY codigo_cuenta_contable');
$consulta->execute();
?>

<div style="width:706px;height:30px;background-color:#FFFF80;margin:10px auto;padding-top:5px;">
<center><span style="color:#666666;font-size:16px;font-family:Arial, Helvetica, sans-serif;">CUENTAS POR COBRAR</span></center>
</div>  	


<div style="width:790px; margin:10px auto;">
 	<?php 
	while($result=$consulta->fetch())
	{
	?>

<center>
  <table width="706" height="173" cellpadding="2" cellspacing="0" style="border:1px #DD6F00 solid;">
    <tr>
      <td width="102" height="18" style="background-color:#DD6F00;color:#FFFFFF;"><center>
        <span></span>
      </center></td>
      <td colspan="2" style="background-color:#DD6F00;color:#FFFFFF;"><center>
        <span style="text-transform:uppercase;font-family:Arial, Helvetica, sans-serif;"><?php echo $result['codigo_cuenta_contable']." ".$result['nombre'];?></span>
      </center></td>
      <td width="103" style="background-color:#DD6F00;color:#FFFFFF;"><center>
        <span></span>
      </center></td>
    </tr>
    <tr>
      <td height="53" style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">
	  <?php	 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene WHERE codigo_cuenta_contable=:codigo_cuenta_contable AND tipo="Debe"');
	  $consulta3->execute(array(':codigo_cuenta_contable'=>$result['codigo_cuenta_contable']));
	 
	  while($result3=$consulta3->fetch())
	  {
	 
	  ?>
          <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo 'ASIENTO Nº '.$result3['numero_asiento']?></span><br />
          <?php   
	  }
	  ?>      </td>
      <td width="236" style="border-top:none;border-bottom:none;border-right:1px #DD6F00 solid;">
	  <?php	 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene WHERE codigo_cuenta_contable=:codigo_cuenta_contable AND tipo="Debe"');
	  $consulta3->execute(array(':codigo_cuenta_contable'=>$result['codigo_cuenta_contable']));
	$sumadebe=0;
	  while($result3=$consulta3->fetch())
	  {
	 
	  ?>
          <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['monto'].' Bs';?></span><br />
          <?php 
	 		$sumadebe=$sumadebe+$result3['monto'];
	  }
	  ?>       </td>
      <td width="247" style="border-right:1px #E1E1E1 solid;border-top:none;border-bottom:none;">
	  <?php	 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene WHERE codigo_cuenta_contable=:codigo_cuenta_contable AND tipo="Haber"');
	  $consulta3->execute(array(':codigo_cuenta_contable'=>$result['codigo_cuenta_contable']));
	 $sumahaber=0;
	  while($result3=$consulta3->fetch())
	  {
	 
	  ?>
          <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $result3['monto'].' Bs';?></span><br />
          <?php 
	  $sumahaber=$sumahaber+$result3['monto'];
	  }
	  ?>        </td>
      <td width="103" style="border-top:none;border-bottom:none;border-right:1px #E1E1E1 solid;">
	         <?php	 
	  $consulta3=$cn->prepare('SELECT * FROM diario_tiene WHERE codigo_cuenta_contable=:codigo_cuenta_contable AND tipo="Haber"');
	  $consulta3->execute(array(':codigo_cuenta_contable'=>$result['codigo_cuenta_contable']));
	
	  while($result3=$consulta3->fetch())
	  {
	 
	  ?>
        <span style="font-family:Arial, Helvetica, sans-serif;"><?php echo 'ASIENTO Nº '.$result3['numero_asiento']?></span><br />
        <?php 
	 
	  }
	  ?>       </td>
      </tr>
    <tr>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
      <td height="32" style="border-top:none;border-right:1px #DD6F00 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;">
	  <?php echo 'Total: '.$sumadebe.' Bs';?></td>
		
      <td style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#EFEFEF;border-top:2px #C60000 solid;">
	 <?php echo 'Total: '.$sumahaber.' Bs';?>		</td>
      <td style="border-top:none;"><br />
          <br /></td>
    </tr>
	

	
	<tr>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;">&nbsp;</td>
	<?php
	$diferencia=0;
	if($sumadebe>$sumahaber)
	{$diferencia=$sumadebe-$sumahaber;}
	if($sumahaber>$sumadebe)
	{$diferencia=$sumahaber-$sumadebe;}
	?>
	
      <td style="border-top:none;border-right:1px #DD6F00 solid;background-color:#FFFF62;">
	  <span style="font-family:Arial, Helvetica, sans-serif;"><?php 
	  $sumadebe2=$sumadebe; 
	  if($sumadebe<$sumahaber)
	  {
	  echo $diferencia.' Bs';
	  $sumadebe2=$diferencia+$sumadebe; 
	  }
	  ?></span>	 </td>
      <td height="22" style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#FFFF62;">
	  <span style="font-family:Arial, Helvetica, sans-serif;"><?php 
	  $sumahaber2=$sumahaber; 
	  if($sumahaber<$sumadebe)
	  {
	  echo $diferencia.' Bs';
	  $sumahaber2=$diferencia+$sumahaber;
	  }
	  ?>
	  </span>	  </td>
      <td style="border-top:none;">&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2" style="border-top:none;border-right:1px #E1E1E1 solid;">
	  
	  <?php
	  if($sumadebe2==$sumahaber2)
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
	  ?>	  </td>
      <td height="22" style="border-top:none;border-right:1px #DD6F00 solid;"><?php
	  
	  echo $sumadebe2.' Bs';
	  ?></td>
      <td style="border-top:none;border-right:1px #E1E1E1 solid;"><?php echo $sumahaber2.' Bs';?></td>
      <td style="border-top:none;">&nbsp;</td>
    </tr>
    <tr>
      <td height="22" colspan="2" style="border-top:none;border-right:1px #E1E1E1 solid;background-color:#5EFF86;">
	  <center><?php	
	  $saldo="";
	  if($sumadebe>$sumahaber)
	  {
	  echo 'SALDO DEUDOR';
	  $saldo="Deudor";
	  }
	  if($sumahaber>$sumadebe)
	  {
	  echo 'SALDO ACREEDOR';
	  $saldo="Acreedor";
	  }
	  if($sumahaber==$sumadebe)
	  {
	  echo 'SALDO NULO';
	  $saldo="Nulo";
	  } 
	  
	  ?></center>	  </td>
	  
	 <?php
$consulta10=$cn->prepare('UPDATE  mayor_tiene SET debe=:sumadebe,haber=:sumahaber,saldo=:saldo WHERE codigo_libro_mayor=1 AND codigo_cuenta_contable=:codigo_cuenta_contable'); 
$consulta10->execute(array(
':codigo_cuenta_contable'=>$result['codigo_cuenta_contable'],
':sumadebe'=>$sumadebe,':sumahaber'=>$sumahaber,
':saldo'=>$saldo
));
	?>
	  
	  
	  
      <td style="border-top:none;">&nbsp;</td>
    </tr>
  </table>
</center>
 <br />
 
  <?php 
  }
  ?>





</div>
	
	
</body>
</html>