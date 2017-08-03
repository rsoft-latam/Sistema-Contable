<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM servicio WHERE codigo_persona=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));


echo "<select name='NumeroServicio' id='NumeroServicio'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['numero_servicio']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>