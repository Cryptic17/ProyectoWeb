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
                                <li><a href="reservas.php">Reservas</a></li> 
                                <li><a href="agregarvehiculo.php">Agregar vehículo</a></li>
                                <li><a href="actualizarvehiculo.php">Actualizar vehículo</a></li>  
                                <li><a href="eliminarvehiculo.php">Eliminar vehiculo</a></li>
                                <li><a href="listavehiculos.php">Inventario</a></li>
                                <li><a href="buzonmensajes.php">Buzón de mensajes</a></li>
                                                              
                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>                            
                    <div class="clear"></div>
                </div>
              
           </div>
          </div>
         </div>
        </div>
      </div>
     <div class="main">
      <div class="shop_top">
         <div class="container">
                        <form method="post" action="procesar_empleados.php"> 
                                <div class="register-top-grid">
                                        <h1>Menú empleados</h1>
                                        <br>
                                        <h3>Crear nuevo usuario para empleado</h3>
                                        <div>
                                            <span>Usuario<label>*</label></span>
                                            <input type="text" name="usuario"> 
                                        </div>
                                        
                                </div>
                                <div class="clear"> </div>
                                <div class="register-bottom-grid">
                                       
                                        <div>
                                            <span>Contraseña<label>*</label></span>
                                            <input type="Password" name="clave" id="clave">
                                        </div>
                                        <div>
                                            <span>Confrimar contraseña<label>*</label></span>
                                            <input type="Password" name="clave2" id="clave2">
                                        </div>
                                        <div class="clear"> </div>
                                </div>
                                <div class="clear"> </div>
                                <input type="submit" value="Ingresar datos" name='registrar'>
                        </form>
                        <?php
                        include("procesar_empleados.php");
                        ?>
                    </div>
           </div>
      </div>

     
</body>    
</html>