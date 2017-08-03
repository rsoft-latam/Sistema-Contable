<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro3</title>

<link rel="stylesheet" href="css/Muro3.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() 
	{							
		setInterval(CargarMuro,1000);
		function CargarMuro()
		{  
		var codigo=<?php echo $_POST['id'];?>;
		$("#Muro").load('Publicacion.php',{id:codigo});	
		}		
	});
</script>			

</head>

<body>
<?php 
include('Conexion.php');
$cod=$_POST['id'];
?>

<div style="width:490px; height:122px;margin-bottom:15px; border:1px #C1C1C1 solid; padding:5px;  margin-top:14px;">

<form action="Publicar.php?id=<?php echo "$cod";?>" method="post" style="margin:0px; padding:0px;" enctype="multipart/form-data">
<div style="border-bottom:1px #EBEBEB solid; width:460px; margin:0px; padding:0px;">
<label for="msg" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Actualizar Estado</label>
<label for="msg" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">Agregar Foto</label>	
</div>	   
						  
<div style="width:460px; margin:0px; padding:0px; height:50px;">
  <input type="text"  name="T1" style=" height:25px; border:none; width:420px; margin-left:15px; margin-top:8px;" placeholder="  Que estas pensando?"/>
</div>						  
						  
<div style="border-top:1px #EBEBEB solid;   width:460px; margin:0px; padding:0px; height:30px;">
  <input type="submit"  name="bot" class="submit" value="Publicar" style="margin-left:15px;"/>
  <span style="width:460px; margin:0px; padding:0px; height:50px;">  </span>
  <input type="file"  name="T2" style=" height:25px; border:none; width:300px; margin-left:15px; margin-top:8px; float:right; background:"/>
</div>
</form> 

</div>
	
<div id="Muro" style=" padding:0px; width:490px; margin:0px;"></div>	  
	
</body>
</html>
