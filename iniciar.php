<?php 
include 'conexion.php';
$contra = $_POST["contra"];
$usuario = $_POST["usuario"] ;

$query = mysqli_query($con, "SELECT * FROM registro WHERE Empresa ='".$usuario."' and contraseña = '".$contra."'");

$nr = mysqli_num_rows($query);
if ($nr == 1){
    echo "bienvenido  ".$usuario; 
}else if($nr == 0){
 echo "no ingreso";
}
?>