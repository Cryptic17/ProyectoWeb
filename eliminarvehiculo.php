<?php
include 'conexion.php';
$query = mysqli_query($mysqli,"SELECT modelo FROM vehiculos");

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Los Santos Customs</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

 </head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="header-left">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""/></a>
                     </div>
                     <div class="menu">
                          <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">

                                <li><a href="index.html">inicio</a></li>
								<li><a href="inicioempleados.php">Menú empleados</a></li>
                                                          
                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>                          
                    <div class="clear"></div>
                </div>
               
                          <div class="clear"></div>
                        </ul>
                     </li>
                   </ul>
                   <div class="clear"></div>
           </div>
          </div>
         </div>
        </div>
    </div> 
     
     
      <div class="shop_top">
         <div class="container">
                        <form method="post" action="procesar_eliminacion.php"> 
                                <div class="register-top-grid">
                                        <h3>Seleccione el modelo del vehiculo a eliminar</h3>
                                        <div>
                                            <span>Modelo Automovil<label>*</label></span>
                                             <select type="text" name="modelo">
                                            <?php while ($datos = mysqli_fetch_array($query)) {
                                                 ?> 
                                                <option><?php echo $datos['modelo']?>  </option>
                                                 <?php 
                                            }
                                             ?> 
                                             </select>
                                        
                               
                      
                               
                                <input type="submit" value="Eliminar" name='eliminando'>
                                </div>                                                                             
                                </div>
                        </form>
                        <?php
                        include("procesar_eliminacion.php");
                        ?>
                    </div>
           </div>
     
     
</body>    
</html>