<?php
require 'conexion.php';

$user = $_POST['usuario'];
$pass = $_POST['contrasena'];
 

$consulta = mysqli_query($connect,"SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$pass'");

if(mysqli_num_rows($consulta) > 0) 
{
    
    session_start();
 
    
    header("Location: iniciado.html");
 
    exit(); 
}
 

else{
    echo'<script type="text/javascript">
        alert("Usuario o contraseña incorrectos");
        window.location.href="index.html";
        </script>';
     
}
 