<!DOCTYPE html>
<!-- Consider specifying the language of your content by adding the `lang` attribute to <html> -->
<!--[if lt IE 7]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"> <!–Llamamos al archivo CSS –> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –> 
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> <!– Llamamos al JavaScript de Bootstrap –> 

	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Put your title here! -->
	<title></title>

	<meta name="description" content="">

	 <!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width">

	<link href="style.css" rel="stylesheet">

	<!-- Load Open Sans and Merriweather from Google Fonts
		For optimal performance, customize it to load the styles you need:
		http://goo.gl/QufgJ
	-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700|Merriweather:400,700,900" rel="stylesheet">

	<!-- All JavaScript at the bottom, except for Modernizr
		Modernizr enables HTML5 elements & feature detects; It includes Respond, a polyfill for min/max-width CSS3 Media Queries
		For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="js/modernizr-2.6.1.min.js"></script>
</head>

<body>

	<!-- Prompt IE 6 and 7 users to install Chrome Frame:		chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 8]>
		<p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
	<![endif]-->

	<header id="master-header" class="clearfix" role="banner">

		<hgroup>
			<h1 id="site-title"><a href="index.html" title="Your Site Name">Farm</a></h1>
			<h2 id="site-description">Aqui encontraras los productos en existencia por farmacia o sucursal</h2>
		</hgroup>

	</header> <!-- #master-header -->

<div id="main" class="row">

	<!-- Main navigation -->
	<nav class="main-navigation span12 clearfix" role="navigation">
		<h3 class="assistive-text">Main menu</h3>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li class="current">
				<a href="Productos.php">Procutos</a>
			</li>
			<li><a href="Farmacias.php">Farmacias</a></li>
		</ul>
	</nav> <!-- #main-navigation -->

<div id="content" role="main" class="span12">

	<article class="page hentry">

		<header class="entry-header">
			<h1 class="entry-title">Productos</h1>
		</header> <!-- .entry-header -->

		<div class="entry-content">
			<p>
				Encontraras una gama de productos en existencia, segun la sucursal seleccionada. 
			</p>

			<!-- Typography
			================================================== -->
			<section id="typography">
				<h1>PRODUCTOS <small>Preservativos, pastillas del segundo dia, viagra, etc.</small></h1>

					<p>
                    Porque nos preocupa tu seguridad y tu comodidad al momento de adquirir un producto con nosotros.Selecciona tu producto y luego en el boton de comprar.</p>

					<div class="row"></div>

	  			<h2>&nbsp;</h2>
	  			<h3>&nbsp;</h3>

					<div class="row"></div>

				<hr />

				<h2>LISTA: 
                
                <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Comprar</th>
      </tr>
    </thead>
    <tbody>
    <?php
include ('conexion.php');

  $sql="SELECT Id_Pre, Nombre_Pre, Precio_Pre FROM preservativos
 ";

if ($result=mysqli_query($mysqli,$sql))
  {
   while ($row=mysqli_fetch_row($result))
    {
    
    

?>
      <tr class="success">
        <td><?php echo $row[0]; //Codigo ?></td>
        <td><?php echo $row[1]; //Codigo ?></td>
        <td><?php echo $row[2]; //Codigo ?></td>
        <td><button type="button" name="<?php echo $row[0]; //Codigo ?>" class="btn btn-primary btn-lg">Comprar</button></td>
      </tr>
      
      <?php
}}
?>
    </tbody>
  </table></h2>

					<div class="row"></div> <!-- .row -->
			</section> <!-- #typography -->

			<!-- Code
			================================================== --><!-- #code -->

			<!-- Tables
			================================================== --><!-- #tables -->

			<!-- Forms
			================================================== --><!-- #forms -->

			<!-- Images
			================================================== -->
			<section id="images">

				<h1>Images</h1>

				<div class="row">
				  <div class="span4"><img src="http://i.imgur.com/lG2bbl.jpg" alt="Image alt">
					</div>
            	</div>
			</section> <!-- #images -->

			<!-- Miscellaneous
			================================================== --><!-- #miscellaneous -->

		</div> <!-- .entry-content -->

	</article> <!-- .post.hentry -->

</div> <!-- #content -->

</div> <!-- #main -->

	<footer id="footer" role="contentinfo">
		<!-- You're free to remove the credit link to Jayj.dk in the footer, but please, please leave it there :) -->
		<p>
			Copyright &copy; 2012 <a href="#">Sitename.com</a>
			<span class="sep">|</span>
			Design by <a href="http://jayj.dk" title="Design by Jayj.dk">Jayj.dk</a>
		</p>
	</footer> <!-- #footer -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- Load custom scripts -->
	<script src="js/script.js"></script>
</body>
</html>
