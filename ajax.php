<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM seccion WHERE codigo_departamento=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));


echo "<select name='codigo_seccion' id='codigo_seccion'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['codigo_seccion']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>