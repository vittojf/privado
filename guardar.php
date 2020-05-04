<?php
include 'conexion.php';
$empresa = $_POST["empresa"];
$rif =  $_POST["rif"];
$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];
$contraseña = $_POST["contraseña"];
$email = $_POST["Correo"];

/*Guardarlo*/
$gua = $con -> query("INSERT INTO registro (Empresa, RIF, Ciudad, Estado, contraseña, Correo) VALUE ('$empresa','$rif','$ciudad','$estado','$contraseña','$email')");
/*comprobar*/
if($gua){
    echo "<script>
    location.href='inicio.php'
    </script>";
}else{
echo "no guardado";
}



?>