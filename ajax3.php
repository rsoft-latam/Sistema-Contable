<?php
include("Conexion.php");

$Codigo=$_GET['id'];
$con1=$cn->prepare('SELECT * FROM lista_deseos WHERE codigo_persona=:Codigo');
$con1->execute(array(':Codigo'=>$Codigo));


echo "<select name='CodigoLista' id='CodigoLista'>";
while ($re=$con1->fetch())
{
    echo "<option value='".$re['codigo_lista']."'>" . utf8_encode($re['nombre']) . "</option>";
}
echo "</select>";
?>