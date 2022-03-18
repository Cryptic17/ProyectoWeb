<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$conectation= mysqli_connect("localhost","root","","login");


$consulta1="SELECT * FROM usuarios_empleados WHERE usuario='$usuario' and clave='$clave'";
$resultado1=mysqli_query($conectation,$consulta1);

$filas=mysqli_num_rows($resultado1);

if($filas>0){

    header("location:inicioempleados.php");

}
else{
   
    echo "ERROR DE AUTENTIFICACION";

 
}
mysqli_free_result($resultado1);
mysqli_close($conectation);
?>