<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detalle Producto| La mejor opcion!</title>
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
								<li><a href=""><i class="fa fa-phone"></i> +56 9 500000</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> lamejoropcion@gmail.com</a></li>
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
						<div class="btn-group pull-right">
							<div class="btn-group">
							
							</div>
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
					<!--			<li><a href="login.html"><i class="fa fa-lock"></i> Iniciar Sesion</a></li>-->
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
                                        <li><a href="shop.html">Camaras</a></li>
										<li><a href="product-details.html" class="active"></a></li> 
							                        
                                    </ul>
                                </li> 
							
                                </li> 
								<li><a href="contact-us.html">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<!--<input type="text" placeholder="BUSCAR"/>-->
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camaras Compactas 
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="nikon_coolpix.html">NIKON COOLPIX S3500</a></li>
											<li><a href="sonydsc_w730.html">SONY DSC-W730 </a></li>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camaras Deportivas
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="gopro3.html">GO PRO HERO 3</a></li>
											<li><a href="sony_actioncam.html">SONY ACTIONCAM</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camaras Semiprofesionales
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="canonreflexeos.html">CANON REFLEX EOS T3</a></li>
											<li><a href="sonyslt.html">SONY SLT-A58Y</a></li>
											<li><a href="samsungwb1100.html">SAMSUNG WB1100</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#cp">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camaras profesionales
										</a>
									</h4>
								</div>
								<div id="cp" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
											<li><a href="canon _eos70.html">CANON EOS 70 D</a></li>
											<li><a href="d7000.html">Nikon D7000</a></li>
											<li><a href="ds4.html">NIKON DS4</a></li>
											<li><a href="d3300.html">NIKON D3300</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#cv">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Camaras de video
										</a>
									</h4>
								</div>
								<div id="cv" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="sonyfdr.html">SONY FDR-AX100</a></li>
											<li><a href="samsunghmx.html">SAMSUNG HMX-F900</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
					<div class="brands_products"><!--brands_products-->
							<h2>Marcas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="http://www.nikoncenter.cl" target="_blank"> <span class="pull-right"></span>Nikon</a></li>
									<li><a href="http://www.canon.cl/canon/html/general/minificha.php?cat_id=2085" target="_blank"> <span class="pull-right" ></span>Canon</a></li>
								
									<li><a href="http://www.sony.cl/electronics/camaras-digitales-fotograficas"  target="_blank"> <span class="pull-right"></span>Sony</a></li>
									<li><a href="http://www.samsung.com/cl/" target="_blank"> <span class="pull-right"></span>Samsung</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/d70002.png" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/d70001.png" width='90' height='90' alt=""></a>
										  <a href=""><img src="images/product-details/d70003.png" width='90' height='90'alt=""></a>
										  <a href=""><img src="images/product-details/d70004.png" width='90' height='90'alt=""></a>

										</div>
										<div class="item">
										   <a href=""><img src="images/product-details/d70002.png" width='90' height='90'alt=""></a>
										 
										</div>
										<!--<div class="item">
										  <a href=""><img src="images/product-details/sonyc11.png" width='90' height='90'alt=""></a>
										  <a href=""><img src="images/product-details/sonyc12.png" width='90' height='90'alt=""></a>
										  <a href=""><img src="images/product-details/sonyc13.png" width='90' height='90'alt=""></a>
										</div>-->
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>

						 <?php 
								$conexion = mysql_connect("localhost","root","");
							     mysql_select_db("catalogo", $conexion);
							     $result = mysql_query("SELECT * FROM camaras");
							     ?>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2> <?php $camaras[marca];?></h2>
								<p>Web ID: 00011</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><a href="http://www.paris.cl/tienda/es/paris/camara-digital-nikon-d7000-18-105mm?gclid=CjgKEAjwiumdBRDZyvKvqb_6mkUSJABDyYOzLxazLpYmZYKPTnL_6IOAR_oC-S11Qm4ZnM7dNMrhlfD_BwE">$849.990  Paris</a> </span>
									<p><a href="http://www.falabella.com/falabella-cl/product/3653148/Camara-Digital-W730-Pink;jsessionid=D3CA972473716351FCA743DBE4843CF9.node37?color=&passedNavAction=push">$ 899.990   Ripley</a></p>
									<p><a href="https://www.pcfactory.cl/producto/12403-Cámara.Reflex.D7000.16.2.MP.+.AF-S.DX.18-105mm.f3.5-5.6G.ED.VR">$ 999.990   PCFactory</a></p>
				
								</span>
								<p><b>Marca:</b>Nikon</p>
								<p><a href="http://www.nikoncenter.cl/reflex_cam.php?sec=reflex&cam=4&name=d7000">Link a pagina del fabricante</a></p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Descripción</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Detalles</a></li>
								<li><a href="#reviews" data-toggle="tab">Comentarios</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
							
							<div class="tab-pane fade" id="companyprofile" >
								
								<p align="justify">
								16.2 Megapíxeles formato DX</br>
								3.0" Pantalla LCD</br>
								39 Áreas de Enfoque</br>
								6 cps Disparos Continuos</br>
								Video Full HD (1080p)</br>
								1/8000 seg. Obturador</br>
								Doble Ranuras para Tarjetas</br>
								Construido en la conexión HDMI</br>
								Control de Imagen</br>
								D-Lighting activo</br>
							
							
							</div>
							
							<div class="tab-pane fade active in" id="details" >
								<p align="justify">Poder para asombrar. Características para inspirar.Una impresionante cámara SLR de formato DX con un cuerpo sorprendentemente cómodo de transportar, un potente sensor de imagen CMOS de 16,2 megapíxeles, EXPEED 2, alcance ISO de 100 a 6400 (ampliable), doble ranura de tarjetas SD, sistema AF de 39 puntos y D-Movie. Todo lo que necesita para mejorar sus aptitudes fotográficas.
								</br>

								<p>
							</div>
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Daniela Z.</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>14:01 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>07 Jul 2014</a></li>
									</ul>
									<p>Es una buena cámara profesional, tiene muy buenas específicaciones y saca fotos geniales.</p>
									<p><b>Escribe tu opinión</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
				</div><!--acaarriba del div va recomended item-->
			</div>
		</div>
	</section>
	
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
