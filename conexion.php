<?php
$hostname='213.190.6.106';
$database='u730314370_formulario';
$username='u730314370_root';
$password='12345678';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>