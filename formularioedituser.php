<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agregar Administradores</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i>+56 9 5000000</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> lamejoropcion@gmail.cl</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/lamejoropcion_"><i class="fa fa-twitter"></i></a></li>
					
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/lamejor.jpg" alt="" /></a>
						</div>
				
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="login.html" class="active"><i class="fa fa-lock"></i>Iniciar Sesión</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Inicio</a></li>
								<li class="dropdown"><a href="#">Productos<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Camaras</a></li> <!--
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html" class="active">Login</a></li>  -->
                                    </ul>
                                </li> 
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li> -->
								<li><a href="contact-us.html">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="BUSCAR"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<div class="login-form">
		<div class="container">
			<h2>Modificar Datos de Administrador</h2>
						<p> Realice los cambios que se requieran.</p>
					</div>
				</div>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login-form"><!--formulario agregar administrador-->
						<?php 
					
					$id=$_POST['id'];

					$conexion = mysql_connect("localhost","root","123");
					mysql_select_db("catalogo", $conexion); 
					if (empty($_POST["id"])) {

				    		echo"<script type=\"text/javascript\">alert('Ingrese una ID '); window.location='modificar_admin.php';</script>";
					}else{

				
					
					$sql=mysql_query("select * from usuarios where id = '$id'");

					while($array=mysql_fetch_array($sql)){
					
					$usuario=$array['usuario']; 
					 $nombre_com=$array['nombre_com']; 
					 $password=$array['password'];
					 $descripcion=$array['descripcion'];
					 $email=$array['email'];
					
					 
					 
					 if(mysql_num_rows($sql)>0) { 
				?>
						<h2>Modificar Administrador</h2>
						<form action="edit_admin.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
					Nombre de Usuario		<input type="text" name="usuario" placeholder="Nombre de Usuario"  class="form-control" value=<?php echo $usuario ?>>
					Nombre Completo		<input type="text" name="nombre_com" placeholder="Nombre Completo" value=<?php echo $nombre_com ?>>
					Contraseña		<input type="password" name="password" placeholder="Ingrese Contraseña" value=<?php echo $password ?>>
							
					Descripcion	<input type="text" name="descripcion" placeholder="Descripcion administrador" value=<?php echo $descripcion ?>>
					E-Mail	<input type="text" name="email" placeholder="Correo Electronico" value=<?php echo $email ?>>
					<?php
				}
				}
			}
	?>
							<button id="send" type="submit"  name ="submit" value="modificar" class="btn btn-default">Modificar Administrador</button>
						
						</form>
					</div><!--/formulario agregar administrador-->
				</div>
				
				</div>
			</div>
		</div>
	</section><!--/form-->
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>L</span>a mejor opción</h2>
							<p>Tu mano amiga en las compras por internet</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<a href="https://www.youtube.com/watch?v=z-uIat-axFo" target="_blank"><img src="images/product-details/nikond7000.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Canon EOS 700D (Rebel t5i)</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<a href="https://www.youtube.com/watch?v=WSYJ8c5Upmo" target="_blank"><img src="images/product-details/nikoncool1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Nikon Coolpix s6500</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<a href="https://www.youtube.com/watch?v=W4kBz5OATjM" target="_blank"><img src="images/product-details/gopro13.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Gopro 3 Silver</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<a href="https://www.youtube.com/watch?v=eeV3RIoBroU" target="_blank"><img src="images/product-details/sony1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Sony Action cam HDR-AS30V</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/mapa.jpg" alt="" p>Temuco, Region de la araucania, Chile</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom"><!--arriba va el footer-->
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2014 La mejor opción Inc. Todos los derechos reservados.</p>
					<p class="pull-right">Diseñado por  <span><a target="_blank" href="https://github.com/ProyectJuan">Proyectjuan</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
