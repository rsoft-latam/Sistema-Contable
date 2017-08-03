<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM asiento WHERE codigo_libro_diario=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));


echo "<select name='numero_asiento' id='numero_asiento'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['numero_asiento']."'>" . utf8_encode($re['numero_asiento']) .' ( '.utf8_encode($re['fecha']).' )'. "</option>";
}
echo "</select>";
?>