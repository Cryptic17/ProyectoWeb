<?php 
include 'conexion.php';
$conex= mysqli_connect("localhost","root","","login");

if (isset($_POST['eliminando'])) {
    if (strlen($_POST['modelo']) >= 1) {
        $modelo = trim($_POST['modelo']);  
        $consulta = "DELETE FROM vehiculos WHERE modelo = '$modelo'";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
        
            header("location:eliminarvehiculo.php");
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
