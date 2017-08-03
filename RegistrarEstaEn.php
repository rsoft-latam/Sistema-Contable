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

		
			
<script>
function realizaProceso(){
        var parametros = {
                "codigo_carrito" : $('#CodigoCarrito').val(),
                "codigo_producto" : $('#CodigoProducto').val(),
				"limite_tiempo" : $('#LimiteTiempo').val(),
				"estado" : $('#Estado').val(),
				"mes" : $('#Mes').val(),
				"dia" : $('#Dia').val(),
				"gestion" : $('#Gestion').val(),
				"pago_seleccionado" : $('#PagoSeleccionado').val(),
				"cantidad" : $('#Cantidad').val(),
				"envio_seleccionado" : $('#EnvioSeleccionado').val()
        };
        $.ajax({
                data:  parametros,
                url:   'CrearEstaEn.php',
                type:  'post',
                success:  function() {   alert('Registrado con Exito');  }
        });
}
</script>
		
		
		    <script type="text/javascript">
            $(document).ready(function(){
                $('#CodigoProducto').change(function(){
                    var id=$('#CodigoProducto').val();
                    $('#seccion1').load('ajax5.php?id='+id);
                });    
            });
        </script>
		
		    <script type="text/javascript">
            $(document).ready(function(){
                $('#CodigoProducto').change(function(){
                    var id=$('#CodigoProducto').val();
                    $('#seccion2').load('ajax6.php?id='+id);
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

$consulta1=$cn->prepare('SELECT * FROM carrito');
$consulta1->execute();

$consulta2=$cn->prepare('SELECT * FROM producto ORDER BY codigo_producto');
$consulta2->execute();

$consulta3=$cn->prepare('SELECT * FROM pago');
$consulta3->execute();


$consulta4=$cn->prepare('SELECT * FROM envio');
$consulta4->execute();
?>





<fieldset>
<legend><strong>Producto esta en Carrito</strong></legend>
<table width="776" height="74" border="0" cellpadding="2" cellspacing="0">
          
 <tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"><label for="label2">Codigo Carrito:</label></td>
   <td><select size="1" name="CodigoCarrito" id="CodigoCarrito">
     <?php 
		
	while($result1=$consulta1->fetch())
	{
	?>
     <option value="<?php echo $result1['codigo_carrito']?>"><?php echo $result1['codigo_carrito'];?></option>
     <?php 
	}
	?>
   </select></td>
   <td>&nbsp;</td>
   <td><label for="label">Fecha Adicionado:</label></td>
   <td><select size="1" name="Mes" id="Mes">
     <option value="Enero">Enero</option>
     <option value="Febrero">Febrero</option>
     <option value="Marzo">Marzo</option>
     <option value="Abril">Abril</option>
     <option value="Mayo">Mayo</option>
     <option value="Junio">Junio</option>
     <option value="Julio">Julio</option>
     <option value="Agosto">Agosto</option>
     <option value="Septiembre">Septiembre</option>
     <option value="Octubre">Octubre</option>
     <option value="Noviembre">Noviembre</option>
     <option value="Diciembre">Diciembre</option>
   </select>
     <select size="1" name="Dia" id="Dia">
       <option value="01">01</option>
       <option value="02">02</option>
       <option value="03">03</option>
       <option value="04">04</option>
       <option value="05">05</option>
       <option value="06">06</option>
       <option value="07">07</option>
       <option value="08">08</option>
       <option value="09">09</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
       <option value="13">13</option>
       <option value="14">14</option>
       <option value="15">15</option>
       <option value="16">16</option>
       <option value="17">17</option>
       <option value="18">18</option>
       <option value="19">19</option>
       <option value="20">20</option>
       <option value="21">21</option>
       <option value="22">22</option>
       <option value="23">23</option>
       <option value="24">24</option>
       <option value="25">25</option>
       <option value="26">26</option>
       <option value="27">27</option>
       <option value="28">28</option>
       <option value="29">29</option>
       <option value="30">30</option>
       <option value="31">31</option>
     </select>
     <select size="1" name="Gestion" id="Gestion">
       <option value="2000">2000</option>
       <option value="1999">1999</option>
       <option value="1998">1998</option>
       <option value="1997">1997</option>
       <option value="1996">1996</option>
       <option value="1995">1995</option>
       <option value="1994">1994</option>
       <option value="1993">1993</option>
       <option value="1992">1992</option>
       <option value="1991">1991</option>
       <option value="1990">1990</option>
       <option value="1989">1989</option>
       <option value="1988">1988</option>
       <option value="1987">1987</option>
       <option value="1986">1986</option>
       <option value="1985">1985</option>
       <option value="1984">1984</option>
       <option value="1983">1983</option>
       <option value="1982">1982</option>
       <option value="1981">1981</option>
       <option value="1980">1980</option>
       <option value="1979">1979</option>
       <option value="1978">1978</option>
       <option value="1977">1977</option>
       <option value="1976">1976</option>
       <option value="1975">1975</option>
       <option value="1974">1974</option>
       <option value="1973">1973</option>
       <option value="1972">1972</option>
       <option value="1971">1971</option>
       <option value="1970">1970</option>
       <option value="1969">1969</option>
       <option value="1968">1968</option>
       <option value="1967">1967</option>
       <option value="1966">1966</option>
       <option value="1965">1965</option>
       <option value="1964">1964</option>
       <option value="1963">1963</option>
       <option value="1962">1962</option>
       <option value="1961">1961</option>
       <option value="1960">1960</option>
       <option value="1959">1959</option>
       <option value="1958">1958</option>
       <option value="1957">1957</option>
       <option value="1956">1956</option>
       <option value="1955">1955</option>
       <option value="1954">1954</option>
       <option value="1953">1953</option>
       <option value="1952">1952</option>
       <option value="1951">1951</option>
       <option value="1950">1950</option>
     </select></td>
   <td>&nbsp;</td>
 </tr>
 <tr>
     <td width="13" scope="row">&nbsp;</td>
     <td width="141" height="26" scope="row"><label for="label">Codigo Producto:</label></td>
     <td width="200"><select size="1" name="CodigoProducto" id="CodigoProducto">
       <?php 
		
	while($result2=$consulta2->fetch())
	{
	?>
       <option value="<?php echo $result2['codigo_producto']?>"><?php echo $result2['codigo_producto'];?></option>
       <?php 
	}
	?>
    </select></td>
     <td width="10">&nbsp;</td>
     <td width="130"><label for="label">Pago Seleccionado:</label></td>
     <td width="236"> <div id="seccion1">
	   <select name="select">
         <option value="">seccion</option>
       </select>
    </div>	</td>
     <td width="12">&nbsp;</td>
 </tr>
  <tr>
     <td width="13" scope="row">&nbsp;</td>
     <td width="141" height="26" scope="row"><label for="label">Limite de Tiempo:</label></td>
     <td width="200"><input type="text" name="LimiteTiempo"  size="30" maxlength="40" id="LimiteTiempo" /></td>
     <td width="10">&nbsp;</td>
     <td width="130"><label for="label">Cantidad:</label></td>
    <td width="236"><input type="text" name="Cantidad"  size="30" maxlength="40" id="Cantidad" /></td>
     <td width="12">&nbsp;</td>
 </tr>
  <tr>
     <td width="13" scope="row">&nbsp;</td>
     <td width="141" height="26" scope="row"><label for="label">Estado:</label></td>
     <td width="200">
	 
	 <select size="1" name="Estado" id="Estado">
	 
	 <option value="Comprado">Comprado</option>
	 <option value="Solicitado">Solicitado</option>
	 <option value="Cancelado">Cancelado</option>
	 <option value="Pendiente">Pendiente</option>
	 <option value="Pedido">Pedido</option>
    </select>	 </td>
     <td width="10">&nbsp;</td>
     <td width="130"><label for="label3">Envio Seleccionado:</label></td>
     <td width="236"><div id="seccion2">
	 <select name="edo">
       <option value="">seccion</option>
     </select>
    </div>	</td>
     <td width="12">&nbsp;</td>
 </tr>
 
  <tr>
     <td width="13" scope="row">&nbsp;</td>
     <td width="141" height="26" scope="row"></td>
     <td width="200">&nbsp;</td>
     <td width="10">&nbsp;</td>
     <td width="130">&nbsp;</td>
     <td width="236">&nbsp;</td>
     <td width="12">&nbsp;</td>
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

<table width="790"  border="0" id="example">
  <thead>
    <tr >
	  <td width="128" height="25"><span class="Estilo15">Codigo Carrito</span></td>
      <td width="106"><span class="Estilo15">Codigo Producto</span></td>
      <td width="116"><span class="Estilo15">Limite Tiempo</span></td>
      <td width="125"><span class="Estilo15">Estado</span></td>
	  
	  <td width="125"><span class="Estilo15">Fecha Adicionado</span></td>
	  <td width="125"><span class="Estilo15">Pago Seleccionado</span></td>
	  <td width="125"><span class="Estilo15">Cantidad</span></td>
	  <td width="125"><span class="Estilo15">Envio Seleccionado</span></td>
	
	  
    </tr>
  </thead>
  <tfoot>
    <tr>
   <td width="128" height="25"><span class="Estilo15">Codigo Carrito</span></td>
      <td width="106"><span class="Estilo15">Codigo Producto</span></td>
      <td width="116"><span class="Estilo15">Limite Tiempo</span></td>
      <td width="125"><span class="Estilo15">Estado</span></td>
	  
	  <td width="125"><span class="Estilo15">Fecha Adicionado</span></td>
	  <td width="125"><span class="Estilo15">Pago Seleccionado</span></td>
	  <td width="125"><span class="Estilo15">Cantidad</span></td>
	  <td width="125"><span class="Estilo15">Envio Seleccionado</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 


	$sql=$cn->prepare('SELECT * FROM esta_en');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><span class="Estilo3"><?php echo $op['codigo_carrito'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['codigo_producto'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['limite_tiempo'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['estado'];?></span></td>
  
  <td><span class="Estilo3"><?php echo $op['fecha_adicionado'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['pago_seleccionado'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['cantidad'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['envio_seleccionado'];?></span></td>
  
 
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>



</body>
</html>
