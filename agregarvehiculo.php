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
              
           </div>
          </div>
         </div>
        </div>
      </div>
     <div class="main">
      <div class="shop_top">
         <div class="container">
                        <form method="post" action="procesarvehiculo.php"> 
                                <div class="clear"> </div>
                                <div class="register-bottom-grid">
                                        <h3>Información vehículo</h3>
                                        <div>
                                            <span>Modelo<label>*</label></span>
                                            <input type="text" name="modelo">
                                        </div>
                                        <div>
                                            <span>Color<label>*</label></span>
                                            <input type="text" name="color">
                                        </div>
                                        <div>
                                            <span>Disponibles<label>*</label></span>
                                            <input type="text" name="disponibles">
                                        </div>
                                        <div>
                                            <span>Precio<label>*</label></span>
                                            <input type="text" name="precio">
                                        </div>
                                        <div class="clear"> </div>       
                                </div>
                                <div class="clear"> </div>
                                <input type="submit" value="Agregar" name='agregar'>
                        </form>
                        <?php
                        include("procesarvehiculo.php");
                        ?>
                        
                    </div>
           </div>
      </div>
     
</body>    
</html>