<?php
$usuario= $_POST['usuario'];
$password = $_POST['password'];
$contrasenia = "231";

if($password==$contrasenia){
    header("Location: loader.html");
}
if($password <> $contrasenia ){
    header("Location: verificar.html");
}
?>
