<?php 
include 'coneapar.php';
$conexi= mysqli_connect("localhost","root","","login");

if (isset($_POST['apartando'])) {
                                     if (strlen($_POST['automovil']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['hora']) >= 1) {
                                         $automovil = trim($_POST['automovil']);
                                         $fecha = trim($_POST['fecha']);
                                         $hora = trim($_POST['hora']);
                                           
                                         $consultar = "INSERT INTO vehiculos_apartados(vehiculo, fecha, hora) VALUES ('$automovil','$fecha','$hora')";
                                         $resultado = mysqli_query($conexi,$consultar);
                                         if ($resultado) {
                                              
                                               
                                            header("location:apartar.php");
                                             
                                         } else {
                                                         ?> 
                                                         <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                                                          
                                                        <?php
                                                       
                                                }
                                     }    else {
                                                         ?> 
                                                         <h3 class="bad">¡Por favor complete los campos!</h3>
                                                        <?php
                                               }
                                 }

