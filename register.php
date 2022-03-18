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
                                <li><a href="shop.html">BMW</a></li>
                                <li><a href="shop2.html">Audi</a></li>
                                <li><a href="shop3.html">Mazda</a></li>
                                
                                <li><a href="contact.html">Contacto</a></li>                                
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
                        <form method="post" action="procesar.php"> 
                                <div class="register-top-grid">
                                        <h3>INFORMACIÓN PERSONAL</h3>
                                        <div>
                                            <span>Primer nombre<label>*</label></span>
                                            <input type="text" name="nombre"> 
                                        </div>
                                        <div>
                                            <span>Primer apellido<label>*</label></span>
                                            <input type="text" name="apellido"> 
                                        </div>
                                        <div>
                                            <span>Correo electronico<label>*</label></span>
                                            <input type="text" name="correo"> 
                                        </div>
                                        <div class="clear"> </div>
                                            <a class="news-letter" href="#">
                                                
                                            </a>
                                        <div class="clear"> </div>
                                </div>
                                <div class="clear"> </div>
                                <div class="register-bottom-grid">
                                        <h3>INFROMACIÓN DE INGRESO</h3>
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
                                <input type="submit" value="INGRESAR" name='registrarse'>
                        </form>
                        <?php
                        include("procesar.php");
                        ?>
                    </div>
           </div>
      </div>
     
</body>    
</html>