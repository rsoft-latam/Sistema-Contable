<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

    <?php 
    include("Conexion.php");
    $cod=$_POST['id'];
	$sql=$cn->prepare("SELECT * FROM producto WHERE (nombre LIKE :Codigo) OR (tipo LIKE :Codigo) OR (liquidacion LIKE :Codigo) OR (descripcion LIKE :Codigo) ");
	$sql->execute(array(':Codigo'=>'%'.$cod.'%'));		
 
      
         while($op=$sql->fetch())
	
	 	
    {?>
            
         
<div style="width:300px; height:350px; float:left; border:1px #DFDFDF solid; margin:8px; padding:3px;">
<label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px;  color:#000000;"><img src=<?php echo $op['imagen'];?> width="287" height="233" style="margin-top:25px;"/><?php echo $op['nombre']; ?></label>
<label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px;  color:#000000;"><?php echo $op['precio']; ?> </label>
<input name="button" type="button" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; background:#666666; color:#FFFFFF; height:27px; width:80px; border:1px #000000 solid; margin-top:15px;" value="Comprar"/>
	  <label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px;  color:#000000; ">Stock <span style="border:1px #000000 solid; padding:3px;"><?php echo $op['stock']; ?></span> </label>
	  
	  </br><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px;  color:#000000; ">
	  <?php echo $op['descripcion']; ?>
	   </label>
</div>


    </div>
	<?php 
	
	}
	?>
</body>
</html>
