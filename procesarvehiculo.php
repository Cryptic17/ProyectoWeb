<?php 
include 'conexion.php';
$conex= mysqli_connect("localhost","root","","login");

if (isset($_POST['agregar'])) {
    if (strlen($_POST['modelo']) >= 1 && strlen($_POST['color']) >= 1
        && strlen($_POST['disponibles']) >= 1&& strlen($_POST['precio']) >= 1) {
        $modelo = trim($_POST['modelo']);
        $color = trim($_POST['color']);
        $disponible = trim($_POST['disponibles']);
        $precio = trim($_POST['precio']);    
        $consulta = "INSERT INTO vehiculos(modelo, color, disponibles,precio) VALUES ('$modelo','$color','$disponible','$precio')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
        
            header("location:agregarvehiculo.php");
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