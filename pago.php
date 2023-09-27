
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Present Dreaming | pagos</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<?php

  include("abrir_conexion.php");
  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");

      
  ?>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:presenttdreaming@gmail.com">presenttdreaming@gmail.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+57 316 708643 ">+57 316 7308643 </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" width="300" height="300" alt=""></a>
               
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="registro.php">Inicio</a></li>
                             <!--   <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Listings</a>
                                            <ul class="dropdown">
                                                <li><a href="listings.html">Listings</a></li>
                                                <li><a href="single-listings.html">Single Listings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="about-us.php">Sobre Nosotros</a></li>
                                <li><a href="listings.php">Propiedades</a></li>
                                <li><a href="blog.php">Blog</a></li>
                             <!-- <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 1</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 2</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 3</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 4</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                    </div>
                                </li>-->
                                <li><a href="contact.php">Contactanos</a></li>
                                <li><a href="pago.php">Pagos</a></li>
                                <li><a href="pruebaiot.php">Prueba IOT</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">PAGOS</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Blog Area -->
    <div class="single-blog-area mb-50">
                        <!-- Post Thumbnail -->
                       
                        <!-- Post Content -->
                        <center>
                        <div class="post-content">
                            <!-- Headline -->
                            <a href="#" class="headline">KIT DE INICIO </a>
                            <!-- Date -->
                           
                            <div class="blog-post-thumbnail">
                            
                            <img src="img/blog-img/blog3.jpg." alt="">
                        </div>
                            <!-- Post Meta -->
                            <p>Con nuestro kit de inicio podras empezar a experimentar el mundo de la domotica, nuestro kit esta compuesto por un grupo de elementos basicos pero esenciales para adentrarte en este fascinate mundo. Este kit esta compuesto por: chapas de seguridad, camaras inteligentes, luces inteligentes phillips las cuales tienen una gran accesibilidad, 
                                robot inteligente limpiador y tambien 4 asistentes de google los cuales son los mas optimos para conectar diferentes dispositivos; al ser un kit ya definido su precio tambien esta definido, incluyendo la visita de planeacion y la instalacion. Si quieres iniciar en este mundo, es el kit ideal para ti, para que te enamores de tu casa inteligente de la mano de PRESENT DREAMING. </p>
                            <!-- Read More btn -->
                            
                        </div>
                    </div>
                    <center>


    <section class="south-blog-area section-padding-100">
        <div class="container">
            <div class="row">

            <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Search Widget -->
                        <h5>Elementos de tu kit de inicio </h5>

                
                        <!-- Catagories Widget -->
                        <div class="featured-properties-slides owl-carousel">
                        

                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                
                                <div class="property-thumb">
                                    <img src="img/domotica/1.jpg" alt="">
                                    <div class="tag">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Camaras Inteligentes de seguridad Crucier</h5>
                                   
                                    <p>Juego de camaras Crucier, Crucier ofrece una gama amplia de camaras para diferentes objetivos.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                       
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>5 - 7</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/domotica/2.jpg" alt="">
                                    <div class="tag">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Irobot Romba 670 Robot Limpiador Con Conexión Wi Fi Modelo R670020</h5>
                                   
                                    <p>Puedes usar Amazon Alexa o el Asistente de Google para acceder a tu robot mientras te relajas en casa.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                       
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/domotica/3.png" alt="">
                                    <div class="tag">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Chapa Inteligente Wifi - Huella Domótica Biometría App Móvil</h5>
                                   
                                    <p>Tendrás un equipo que te brindará la seguridad que necesita tu hogar, y la tecnología necesaria para que las llaves ya no sean una obligación.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                       
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/domotica/4.jpg" alt="">
                                    <div class="tag">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>asistente virtual google</h5>
                                   
                                    <p>Desarrollado con Inteligencia artificial por Google que está disponible principalmente en dispositivos móviles y domésticos inteligentes.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                       
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <!-- Single Slide -->
                             <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/domotica/5.jpg" alt="">
                                    <div class="tag">
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Luces inteligentes Phillips</h5>
                                   
                                    <p>Es un sistema de iluminación inteligente. Las luces inteligentes, Hue Bridge y los controles inteligentes</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                       
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>+8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            
                <!-- ##### Breadcumb Area End ##### -->
                <script src=""> // Replace YOUR_CLIENT_ID with your sandbox client ID
                </script>

                <div id="paypal-button-container">

                </div>
                <script>
                    paypal.Buttons({
                        style:{
                            color:'blue',
                            shape:'pill',
                            label:'pay'
                        },
                        createOrder: function(data, actions){
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: 300
                                    }
                                }]

                            });

                        },

                        onApprove: function(data, actions){
                            actions.order.capture().then(function (detalles){
                                window.location.href="completado.php"

                            });

                        },

                        onCancel: function(data){
                            alert("Pago cancelado");
                            console.log(data);
                        }
                    }).render('#paypal-button-container')
                </script>
   

            </div>
        </div>
    </section>


















    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Sobre Nosotros</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Somos una empresa que proporciona el servicio de asesoramiento inmobiliario acompañando a nuestros clientes en adentrarse en el mundo de la domotizacion.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Horas</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Lunes - Viernes</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sabado</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Domingo</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +57 316 7308643</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> presenttdreaming@gmail.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Bogota, Colombia</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Sobre nostros</a></li>
                             
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Propertiedades</a></li>
                           
                                <li><a href="#">Contactanos</a></li>
                          
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Propiedad Destacada</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to hashetag can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by presentdreaming
<!-- Link back to hashetag can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>