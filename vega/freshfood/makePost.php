<?php
session_start();

if (isset($_SESSION['autorExist']) && $_SESSION['autorExist'] == true && isset($_SESSION['loger']) && $_SESSION['loger'] == true && $_SESSION['username']=='admin') {

} else {
    echo "<script>alert('Tienes que iniciar sesion para entrar al sitio.') </script>";
    echo "<script> window.location = 'php/logout.php' </script>";
    echo "<script> window.location = 'php/login.php' </script>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "<script>alert('Su sesion ha expirado, inicie sesion nuevamente.') </script>";    
echo "<script> window.location = 'php/login.php' </script>";
exit;
}
?>

<?php

include 'php/Connection.php';
$connection = new Connection();
$conn = $connection-> getConnection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fresh Food</title><meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/jstree.min.js"></script>
<script type="text/javascript" src="javascript/template.js"></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
</head>
<body class="account-login col-2">
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>Mi cuenta</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="php/logout.php">Salir</a></li>
                  </ul>
                </li>
              </ul>
              <div class="search-box">
                <input class="input-text" placeholder="buscar.." type="text">
                <button class="search-btn"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-6 header-left">
        <div> <a href="blog.php"><img src="image/logo1.jpg" title="logo-vega" alt="logo-vega" class="img-responsive" /></a> </div>
       
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="blog.php"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
      </div>
  <div class="col-sm-4 col-xs-12 header-right">
      <div class="shipping">
          <div class="shipping-img"></div>
          <div class="shipping-text">+45 (2) 227 172<span class="shipping-detail">Atendemos Todos los días de año, las 24 hrs.</span></div>
        </div>
  </div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner container">
    <div class="navbar-header"><span id="category" class="visible-xs">Categorias</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">
      <ul class="main-navigation">
        <li><a href="home.php">Inicio</a> </li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <br>
  <div class="row">
    
    <div class="col-sm-12" id="content">
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Nueva Entrada*</h2>
            <form enctype="multipart/form-data" method="post" action="php/savePost.php">
              <div class="form-group">
                <label for="titulo" class="control-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" placeholder="..."  maxlength="50" value="" name="titulo" required>
              </div>
              <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" placeholder="https://example.com" maxlength="255" value="" name="imagen">
            </div>
              <div class="form-group">
                <label for="mensaje" class="control-label">Mensaje</label>
                <textarea type="text" class="form-control" id="mensaje" placeholder="..." maxlength="255" value="" name="mensaje" required></textarea>
                <!-- <a href="forgetpassword.html">Forgotten Password</a> -->
              </div>
              <input type="submit" class="btn btn-primary" value="Crear">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="container">
        <div class="row">
          <div class="footer-top-cms">
            <div class="col-sm-7">
                    <div class="newslatter">
                        <form>
                            <h5>Newsletter</h5>
                            <div class="input-group">
                                <input type="text" class=" form-control" placeholder="Correo......">
                                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Suscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col-sm-5">
            <div class="footer-social">
                <h5>Social</h5>
                <ul>
                    <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100006653389373"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-3 footer-block">
                <h5 class="footer-title">Información</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="about-us.html">Nosotros</a></li>
                    <li><a href="#">Términos &amp; Condiciones</a></li>
                </ul>
            </div>
            <div class="col-sm-3 footer-block">
                <h5 class="footer-title">Servicio al Cliente</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="contact.html">Contacto</a></li>
                </ul>
            </div>
            <div class="col-sm-3 footer-block">
                <h5 class="footer-title">Extras</h5>
                <ul class="list-unstyled ul-wrapper">
                    <li><a href="#">Espacios de venta</a></li>
                    <li><a href="gift.html">Tarifa</a></li>
                </ul>
            </div>
            <div class="col-sm-3 footer-block">
                <div class="content_footercms_right">
                    <div class="footer-contact">
                        <h5 class="contact-title footer-title">Contacto</h5>
                        <ul class="ul-wrapper">
                            <li><i class="fa fa-map-marker"></i><span class="location2"> Instalaciones & Oficinas,<br>
                                Km 5 camino Temuco a Cajón, Temuco<br>
                                Chile</span></li>
                            <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">vegatco@hotmail.com</a></span></li>
                            <li><i class="fa fa-mobile"></i><span class="phone2">+56 9 9999 9999</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="scrollup">Desplazar</a> </footer>
  <div class="footer-bottom">
  <div class="container">
    <div class="copyright">Made with love by <a class="skylabs" href="http://www.skylabs.cl/">skylabs &copy; 2018 </a> </div>
    <div class="footer-bottom-cms">
    </div>
  </div>
  </div>
  </body>
  </html>
  