<?php 
include 'coneapar.php';
$conexi= mysqli_connect("localhost","root","","login");

if (isset($_POST['enviarbuzon'])) {
                                     if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['asunto']) >= 1 && strlen($_POST['mensaje']) >= 1) {
                                         $nombre = trim($_POST['nombre']);
                                         $correo = trim($_POST['correo']);
                                         $asunto = trim($_POST['asunto']);
                                         $contenido = trim($_POST['mensaje']);                               
                                         $consultar = "INSERT INTO buzon(nombre, correo, asunto, mensaje) VALUES ('$nombre','$correo','$asunto','$contenido')";
                                         $resultado = mysqli_query($conexi,$consultar);
                                         if ($resultado) {                                               
                                            
                                            header("location:contact.php");
                                             
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