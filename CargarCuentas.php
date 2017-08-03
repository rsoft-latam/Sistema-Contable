<?php
include("Conexion.php");
$Codigo=$_GET['id'];



if ($Codigo==1)
{
echo "<select name='CodigoSeccion' id='Nombre'>";

    echo "<option value='Amazon EC2'>" . utf8_encode('Amazon EC2') . "</option>";
	echo "<option value='Amazon EC2 Container registry'>" . utf8_encode('Amazon EC2 Container registry') . "</option>";
	echo "<option value='Amazon EC2 Container Service'>" . utf8_encode('Amazon EC2 Container Service') . "</option>";
    echo "<option value='AWS Elastic Beanstalk'>" . utf8_encode('AWS Elastic Beanstalk') . "</option>";
    echo "<option value='AWS Lambda'>" . utf8_encode('AWS Lambda') . "</option>";
	echo "<option value='Auto Scaling'>" . utf8_encode('Auto Scaling') . "</option>";
	echo "<option value='Elastic Load Balancing'>" . utf8_encode('Elastic Load Balancing') . "</option>";

echo "</select>";
}



?>