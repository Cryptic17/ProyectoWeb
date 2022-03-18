<?php 
include 'conexion.php';
$conex= mysqli_connect("localhost","root","","login");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1
        && strlen($_POST['correo']) >= 1&& strlen($_POST['clave2']) >= 1) {
        $name = trim($_POST['nombre']);
        $lastname = trim($_POST['apellido']);
        $email = trim($_POST['correo']);
        $password = trim($_POST['clave2']);    
        $consulta = "INSERT INTO usuarios_clientes(nombre, apellido, correo,contraseña) VALUES ('$name','$lastname','$email','$password')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
        
            header("location:login.php");
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