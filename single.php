<!DOCTYPE HTML>
<html>
<head>
<title>Auto Show</title>
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
<script src="js/imagezoom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
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
     <?php 
	include ('conexion.php');
	$id = $_GET['id'];;
 
if ($id > 0){
			$result2 = mysqli_query($con,"Select * from model Where Id_Auto = $id");
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row2 = mysqli_fetch_array($result2)){				
			?>
            <?php  
					$tipo=$row2['Tipo']; 
					if ($tipo==1){ 
					$tipo2="Camioneta";
					
					}elseif($tipo==2){ 
						$tipo2="Deportivo";
						
						}elseif($tipo==3){
							$tipo2="Turismo";
							
						} ?>
      <div class="col-md-9 single_top">
      	<div class="single_left">
      	  <div class="labout span_1_of_a1">
			<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s1.jpg">
			        <div class="thumb-image"> <img src="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s2.jpg">
			         <div class="thumb-image"> <img src="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s2.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s3.jpg">
			       <div class="thumb-image"> <img src="<?php echo $tipo2;?>/<?php  echo $row2['Nombre_Auto'] ?>/s3.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
	     	</div>
		     <div class="clearfix"></div>	
	    </div>
		<div class="cont1 span_2_of_a1">
				<h1><?php  echo $row2['Nombre_Auto'] ?></h1>
				<p class="availability">Disponibilidad: <span class="color">
 en existencia</span></p>
			    <div class="price_single">			
				  <span class="actual">$<?php  echo $row2['Precio_Auto'] ?></span>
				</div>
				<h2 class="quick">Descripción rápida:</h2>
				<p class="quick_desc"> <?php  echo $row2['Desc_Auto'] ?></p>
			    <div class="wish-list">
				 	<ul>
				 		
				 	</ul>
				 </div>
				<div class="tags">
					<h5>Categoria : <?php  
							echo $tipo2;
						
						?> </h5>
			     </div>
				<div class="quantity_box">					
				   
		   		    <div class="clearfix"></div>
	   		    </div>
			    <a href="sales.php?id=<?php echo $id; ?>" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Comprar</a>
			</div>
		    <div class="clearfix"> </div>
		</div>
        <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Descripcion del producto</span></li>
							 
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><?php  echo $row2['Desc_Auto'] ?></li>
									  </ul>           
							        </div>
							     </div>	
							      
					      </div>
					 </div>	
		</div>
        <?php }} ?>
      <div class="clearfix"> </div>
	</div>
    </div>

   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacy</a></li>
					
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