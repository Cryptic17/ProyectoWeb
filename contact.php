<!DOCTYPE HTML>
<html>

<head>
    <title>Los Santos Customs</title>

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="" /></a>
                        </div>
                        <div class="menu">
                            <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">
                                <li><a href="shop.html">BMW</a></li>
                                <li><a href="shop2.html">Audi</a></li>
                                <li><a href="shop3.html">Mazda</a></li>
                                <li><a href="contact.php">Contacto</a></li>
                                <li><a href="login.php">Apartar</a></li>

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
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467.11472704866105!2d-73.11458611750886!3d7.11132167430479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683f21d6a28f6b%3A0x2cdd7f8d639ead43!2sCra.%2027%20%23%2354-10%2C%20Bucaramanga%2C%20Santander!5e0!3m2!1ses!2sco!4v1647319522911!5m2!1ses!2sco"
                                width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <p class="m_8">Nuestra corporacion llamada Los Santos Customs, dispone de un punto fisico de atencion al cliente ubicado por el momento unicamente en Bucaramanga, Santander. La direccion especifica y otros metodos de contacto tales como telefono, e-mail,
                            entre otros se encuentran disponibles a continucacion: </p>
                        <div class="address">
                            <p>Cra 27 #54</p>
                            <p>Barrio Bolarqui,</p>
                            <p>CO</p>
                            <p>Telefono: 633 0520</p>

                            <p>Email: <span>soporte.santoscustomsoficial@gmail.com</span></p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 contact">
                        <form method="post" action="procesar_reservas.php">
                            <div class="to">
                                <input type="text" name="nombre" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
                                <input type="text" name="correo" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                                <input type="text" name="asunto" class="text" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asunto';}">
                            </div>
                            <div class="text">
                                <textarea value="Mensaje:" name="mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje:</textarea>
                                <div class="form-submit">
                                    <input name="enviarbuzon" type="submit" id="submit" value="Enviar Mensaje"><br>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </form>
                        <?php
                        include("procesar_reservas.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>