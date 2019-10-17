<?php
include 'conexion.php';
$USER_NAME=$_POST['usuario'];
$PASSWORD=$_POST['password'];

//$USER_NAME="Carlos28";
//$PASSWORD="12345678";

$sentencia=$conexion->prepare("SELECT * FROM usuarios WHERE USER_NAME=? AND PASSWORD=?");
$sentencia->bind_param('ss',$USER_NAME,$PASSWORD);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>