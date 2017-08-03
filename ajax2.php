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


if ($Codigo==2)
{
echo "<select name='CodigoSeccion' id='Nombre'>";

    echo "<option value='Amazon S3'>" . utf8_encode('Amazon S3') . "</option>";
	echo "<option value='Amazon CloudFront'>" . utf8_encode('Amazon CloudFront') . "</option>";
	echo "<option value='Amazon EBS'>" . utf8_encode('Amazon EBS') . "</option>";
    echo "<option value='Amazon Elastic File System'>" . utf8_encode('Amazon Elastic File System') . "</option>";
    echo "<option value='Amazon Glacier'>" . utf8_encode('Amazon Glacier') . "</option>";
	echo "<option value='AWS Import/Export'>" . utf8_encode('AWS Import/Export') . "</option>";
	echo "<option value='AWS Storage Gateway'>" . utf8_encode('AWS Storage Gateway') . "</option>";

echo "</select>";
}




if ($Codigo==3)
{
echo "<select name='CodigoSeccion' id='Nombre'>";

    echo "<option value='Amazon RDS'>" . utf8_encode('Amazon RDS') . "</option>";
	echo "<option value='AWS Database Migration Service'>" . utf8_encode('AWS Database Migration Service') . "</option>";
	echo "<option value='Amazon DynamoDB'>" . utf8_encode('Amazon DynamoDB') . "</option>";
    echo "<option value='Amazon ElastiCache'>" . utf8_encode('Amazon ElastiCache') . "</option>";
    echo "<option value='Amazon Redshift'>" . utf8_encode('Amazon Redshift') . "</option>";


echo "</select>";
}


if ($Codigo==4)
{
echo "<select name='CodigoSeccion' id='Nombre'>";

    echo "<option value='Amazon VPC'>" . utf8_encode('Amazon VPC') . "</option>";
	echo "<option value='AWS Direct Connect'>" . utf8_encode('AWS Direct Connect') . "</option>";
	echo "<option value='Elastic Load Balancing'>" . utf8_encode('Elastic Load Balancing') . "</option>";
    echo "<option value='Amazon Route 53'>" . utf8_encode('Amazon Route 53') . "</option>";
  


echo "</select>";
}

?>