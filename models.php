<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
<?php require_once('conexion.php'); //importamos el archivo de conexión 
			$result = mysqli_query($con,"Select * from model");//Realizamos la seccion de todos los registros de la tabla de las imagenes.
		?>
        
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Auto Show a Autos-transportation category Flat bootstrap Responsive  Website Template | Models :: w3layouts</title>
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

<link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="css/style2.css" type="text/css" rel="stylesheet">
    
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- start menu -->
</head>
<body>
	<div class="men_banner">
   	  <div class="container">
   	  	<div class="navbar-header">
   		<div class="logo">
			<a href="index.html"><img src="images/auto.png" alt=""/></a>
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
        
        
        
         
   <div class="men">
    <div class="container">
      <div >
   		  <div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    
                    
                </ul>
                <ul class="previous">
                	
                </ul>
                <div class="clearfix"></div>
	    </div>
			   <div class="mens-toolbar">
			     <div class="clearfix">
			       <form name="form1" method="post" action="models.php">
			         <label for="Select">Selecciona Tipo de auto</label>
			         <select name="Select" id="Select">
                     <option value="1"> Camionetas </option>
                     <option value="2"> Deportivos </option>
                     <option value="3"> Turismo </option>
		             </select>
		           <input type="submit" name="Enviar" id="Enviar" value="Buscar">
			       </form>
			     </div>		
        </div>
   		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
   		  <ul>
          <?php if (isset($_POST["Enviar"])) { 
		?>
            <?php 
			$tipo1 = $_REQUEST['Select'];
			$result2 = mysqli_query($con,"Select * from model Where Tipo = $tipo1");
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row2 = mysqli_fetch_array($result2)){				
			?>
		    <li>
					  <a class="cbp-vm-image" href="single.php?id=<?php echo $row2['Id_Auto'] ?>">
						  <div class="view view-first">
				   		    <div class="inner_content clearfix">
							  <div class="product_image">
								  <div class="mask1"><img src="ver-img.php?id=<?php echo $row2['Id_Auto'] ?>" alt="image" class="img-responsive zoom-img"></div>
								  <div class="mask">
		                       		  <div class="info">Vista Rapida</div>
			                    </div>
								  <div class="product_container">
								     <h4><?php  echo $row2['Nombre_Auto'] ?></h4>
								     <p><?php  echo $row2['Marca_Auto'] ?></p>
								     <div class="price">$<?php  echo $row2['Precio_Auto'] ?></div>
							    </div>		
						      </div>
	                        </div>
                        </div>
					  </a>
                      
	        </li>
             
            </table>
                    <?php } //Fin del Ciclo
				mysqli_close($con);//cerramos la conexión
			?>
            <?php }else{ ?>
            
            <?php 
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row = mysqli_fetch_array($result)){				
			?>
		    <li>
					  <a class="cbp-vm-image" href="single.php?id=<?php echo $row['Id_Auto'] ?>">
						  <div class="view view-first">
				   		    <div class="inner_content clearfix">
							  <div class="product_image">
								  <div class="mask1"><img src="ver-img.php?id=<?php echo $row['Id_Auto'] ?>" alt="image" class="img-responsive zoom-img"></div>
								  <div class="mask">
		                       		  <div class="info">Vista Rapida</div>
			                    </div>
								  <div class="product_container">
								     <h4><?php  echo $row['Nombre_Auto'] ?></h4>
								     <p><?php  echo $row['Marca_Auto'] ?></p>
								     <div class="price">$<?php  echo $row['Precio_Auto'] ?></div>
							    </div>		
						      </div>
	                        </div>
                        </div>
					  </a>
                      
	        </li>
             
            </table>
                    <?php } //Fin del Ciclo
				mysqli_close($con);//cerramos la conexión
			?>
            <?php } ?>
			    </ul>
		</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
   	  </div>
    </div>
   </div>
   
   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacidad</a></li>
					<li><a href="#">Terminos</a></li>
					<li><a href="#">Tienda</a></li>
					<li><a href="#">Acerca</a></li>
					<li><a href="contact.html">Contactanos</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"></div>
	    
   	</div>
   <
</body>
<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="js/jquery.bdt.min.js" type="text/javascript"></script>
<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
</script>
</html>		