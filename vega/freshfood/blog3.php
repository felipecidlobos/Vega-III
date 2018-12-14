<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vega Modelo</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet" media="screen" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/jstree.min.js" type="text/javascript"></script>
<script src="javascript/template.js" type="text/javascript" ></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/> 
<link rel="icon" href="image/logo1.png" sizes="80x80" />
</head>
<body>
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
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>Socios</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="login.html">Login</a></li>
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
      <div class="col-sm-4 col-xs-6 header-left">
        <div> <a href="index.html"><img src="image/logo1.jpg" title="logo-vega" alt="logo-vega" class="img-responsive" /></a> </div>
         
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="index.html"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
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

    <div id="content" class="col-sm-9">
      

      <div class="container">
        <div id="row"></div>
      </div>
      
    </div>
    

    <div id="column-right" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        
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

<script src="javascript/postListPublic.js" type="text/javascript"></script>
