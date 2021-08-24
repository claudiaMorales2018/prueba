<?php
include("connexion.php");
$con=conectar();

$id=$_POST['Id'];
$Nombre_Completo=$_POST['Nombre_Completo'];
$dni=$_POST['DPI'];
$nombres=$_POST['Direccion'];



$sql="INSERT INTO registro VALUES('$Nombre_Completo','$DPI','$Direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>