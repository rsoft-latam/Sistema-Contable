<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
<!--
 * Creado el 25/08/2011
 *
 * Autor: Daniel Mora
 * Email: danmoracr@gmail.com
 * 
-->
 <head>
   <title>Muro Tipo Facebook</title>
  <link rel="stylesheet" href="css/Muro.css" type="text/css"/>  
  
  	<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">
	
	
	<script language="javascript">
	function autofitIframe(id)
	{
		if(!window.opera && document.all && document.getElementById)
		{
		id.style.height=id.contentWindow.document.body.ScrollHeight;		
		}
		else	
		{
			if(document.getElementById)
			{
			id.style.height=id.contentDocument.body.scrollHeight+"px";
			}
		}		
	}
	
	</script>
  
  
</head>

<body>
<?php
 include('conexion.php');
 $Codigo=$_GET['id']; 
?>


<div style="width:700px; padding:0px; margin:-15px auto;">
 
        <form action="Publicar.php?id=<?php echo "$Codigo";?>" method="post" style="border:1px #B0B0B0 solid; padding-left:30px; padding-right:30px; padding-top:5px; padding-bottom:5px;width:500px; margin:15px auto;">
          <label for="msg">Actualizar estado</label>
          <br />
          <textarea name="T1" id="msg" style="margin:3px;" placeholder=" ¿Que estas pensando?" cols="55" rows="2"></textarea>
		   <br />
          <input type="submit"  name="submit" class="submit" value="Publicar"/>
		
        </form>	  
		
 
 <div id="iframe-container" class="content" data-mcs-theme = "dark-thick" style="width:770px; height:455px;">
 <iframe name="Cuerpo" src="Publicacion.php" scrolling="no"  width="750" height="0" frameborder="0" onload="autofitIframe(this);" ></iframe>
 </div>
</div>
</div>


<!-- Google CDN jQuery with fallback to local -->
<script src="js/jquery-1.11.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js""><\/script>')</script>
	
	<!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$("#iframe-container").mCustomScrollbar({
					axis:"yx",
					autoHideScrollbar:true,
					theme:"light-thick",
					
				});
				
			});
		})(jQuery);
	</script>

 </body>
</html>