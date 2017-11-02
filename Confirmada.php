
<!DOCTYPE HTML>
<html>
<head>
<title>Auto Show a Autos-transportation category Flat bootstrap Responsive  Website Template | 404 :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- start menu -->
</head>
<body>
	<div class="men_banner">
   	  <div class="container">
   	  	<div class="navbar-header">
   		<div class="logo">
			<a href="index.php"><img src="images/auto.png" alt=""/></a>
		</div>
	   <div class="navg">	   	 
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	       </div>
	      </div>
	       <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav">
<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav">
		        <li class="dropdown">
	            <li class="dropdown">
		            <a href="models.php" class="last-nav">Modelos<b class="caret"></b></a>
		        </li>
		        <li class="dropdown">
		            <a class="last-nav" href="contact.html">Contactanos</a>
		        </li>
		       
                
               
                
	        </ul>
		</div>
	        </div>
		   </div>
	     <div class="clearfix"> </div>
	    </div>
   <div class="container">
   	  <?php
	  include ('conexion.php');
 if (isset($_POST["Confirmar"])) { 
  //Auto 
 $Nombre_Auto = $_REQUEST['Nombre_Auto'];
 $Marca_Auto = $_REQUEST['Marca_Auto'];
 $Tipo_Auto = $_REQUEST['Tipo_Auto'];
 $Precio_Auto = $_REQUEST['Precio_Auto'];
 $Color_Auto = $_REQUEST['Color_Auto'];
 $Equipamento_Auto = $_REQUEST['Equipamento_Auto'];
 $Precio_Equipamento = $_REQUEST['Precio_Equipamento'];
 $Precio_Total = $_REQUEST['Precio_Total'];
 //Cliente
 $Nombre_Cliente = $_REQUEST['Nombre_Cliente'];
		$ApellidoP_Cliente= $_REQUEST['ApellidoP_Cliente'];
		$ApellidoM_Cliente= $_REQUEST['ApellidoM_Cliente'];
		$Edad_Cliente= $_REQUEST['Edad_Cliente'];
		$Sexo_Cliente= $_REQUEST['Sexo'];
		$Direccion_Cliente= $_REQUEST['Direccion_Cliente'];
		$Colonia_Cliente= $_REQUEST['Colonia_Cliente'];
		$Estado_Cliente= $_REQUEST['Estado_Cliente'];
		$Pais_Cliente= $_REQUEST['Pais_Cliente'];
		$Telefono_Ciente= $_REQUEST['Telefono_Cliente'];
		$Correo_Cliente= $_REQUEST['Correo_Cliente'];

 
 $sql = "INSERT INTO ventas (Total_Venta, Empleado_Venta, Cliente_Venta, Nombre_Auto, Marca_Auto, Tipo_Auto, Precio_Auto, Color_Auto, Equipamento, Precio_Equipamento,Matricula_Vendedor,ApellidoP_Cliente,ApellidoM_Cliente,Edad_Cliente,Sexo_Cliente,Direccion_Cliente,Colonia_Cliente,Estado_Cliente,Pais_Cliente,Telefono_Cliente,Correo_Cliente)
VALUES ('$Precio_Total', 'Venta Online', '$Nombre_Cliente','$Nombre_Auto','$Marca_Auto','$Tipo_Auto','$Precio_Auto','$Color_Auto','$Equipamento_Auto','$Precio_Equipamento','0','$ApellidoP_Cliente','$ApellidoM_Cliente','$Edad_Cliente','$Sexo_Cliente','$Direccion_Cliente','$Colonia_Cliente','$Estado_Cliente','$Pais_Cliente','$Telefono_Ciente','$Correo_Cliente')";


 

if ($con->query($sql) === TRUE) {

$con->query("Update empleado Set Num_Ventas_Emple = '+1'
                  Where Id_Empleado = 2
        ")or die(mysqli_error($bd));
  $con->commit();
    ?>
	<div class="page-not-found">
	    <h1>Compra Realizada</h1>
	    <img src="images/realizada.png" class="img-responsive" alt=""/>
      </div>
    <div class="form-group"> <!-- Submit Button -->
        <button name="Volver" onclick=" location.href='models.php' " type="submit" class="btn btn-danger">Volver Al Inicio</button>
    </div> 
    
	<?php
} else { ?>

<div class="page-not-found">
	    <h1>Compra Fallida</h1>
	    <img src="images/Fallida.png" class="img-responsive" alt=""/>
      </div>
    <div class="form-group"> <!-- Submit Button -->
        <button name="Volver" onclick=" location.href='models.php' " type="submit" class="btn btn-danger">Volver Al Inicio</button>
    </div> 
<?php }
 
 
 
 
 }
 ?>
   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"> </div>
	    
   	</div>
   </div>
</body>
</html>		