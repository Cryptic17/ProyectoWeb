<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$conexion= mysqli_connect("localhost","root","","login");


$consulta="SELECT * FROM usuarios_clientes WHERE correo='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){

    header("location:apartar.php");

}
else{
   
    echo "ERROR DE AUTENTIFICACION";

 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>