<?php 
include 'conexion.php';
$conex= mysqli_connect("localhost","root","","login");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['clave2']) >= 1) {
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['clave2']);    
        $consulta = "INSERT INTO usuarios_empleados(usuario, clave) VALUES ('$usuario','$password')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
        
            header("location:inicioempleados.php");
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
        }
    }   else {
            ?> 
            <h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>