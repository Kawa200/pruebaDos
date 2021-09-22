<?php
include("databaseconnect.php");


$placa=$_POST['numPlaca'];
$marca=$_POST['Marca'];
$color=$_POST['Color'];
$tipovehiculo=$_POST['TipoDeVehiculo'];
$conductor=$_POST['Conductor'];
$propietario=$_POST['Propietario'];

$consulta="INSERT INTO vehiculos
                (placa,marca,color,tipo_de_vehiculo,conductor,propietario) 
                VALUES('$placa','$marca','$color','$tipovehiculo','$conductor','$propietario')";
echo $consulta;
    if(mysqli_query($conn,$consulta)){
echo " Datos insertados";
    }else{
        echo "Datos NO insertados";

    }
?>