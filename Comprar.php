<!DOCTYPE HTML>
<html>
<head>
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
 include('conexion.php');
 if (isset($_POST["Comprar"])) { 
		//Auto
		$Equipamento = $_REQUEST['Equipamento'];
		$Color = $_REQUEST['Color'];
		$Tipo_Auto = $_REQUEST['Tipo_Auto'];
		$Id = $_REQUEST['ID'];
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
		
		$result2 = mysqli_query($con,"Select * from model Where Id_Auto = $Id");
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row2 = mysqli_fetch_array($result2)){
					$Nombre_Auto = $row2['Nombre_Auto'];
					$Marca_Auto = $row2['Marca_Auto'];
					$Precio_Auto = $row2['Precio_Auto'];
					$Id_Auto = $row2['Id_Auto'];
				}
				
				$ColorR=$Color; 
					if ($ColorR==1){ 
					$tipo2="Azul";
					
					}elseif($ColorR==2){ 
						$tipo2="Rojo";
						
						}elseif($ColorR==3){
							$tipo2="Negro";
							
						} 
		
					$Equipar=$Equipamento; 
					if ($Equipar==1){ 
					$tipo3=0;
					$tipo5="Ninguno";
					}elseif($Equipar==2){ 
						$tipo3=5000;
						$tipo5="Rines Cromados";
						}elseif($Equipar==3){
							$tipo3=5000;
							$tipo5="Llantas Todo Terreno";
						} 
						elseif($Equipar==4){
							$tipo3=10000;
							$tipo5="Llantas Todo Terreno y Rines Cromados";
						} 
		$PrecioTotal = $Precio_Auto * 1000 + $tipo3;
		$Money = number_format($PrecioTotal);
				
	
 }

$result3 = mysqli_query($con,"Select * from empleado Where Id_Empleado = 2");
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row3 = mysqli_fetch_array($result3)){

 $Nombre_Vendedor = $row3['Nombre_Empleado'];
$Matricula_Vendedor = $row3['Matricula_Empleado'];
}
 ?>
 
 <form action="Confirmada.php?" method="post">

    <div class="panel panel-primary">
      <div class="panel-heading">Informacion Acerca del Auto y Vendedor</div>
      <div class="panel-body">
<div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nombre del Vendedor</label>
        <input type="text" class="form-control" id="full_name_id" readonly name="Nombre_Vendedor" value="Venta Online">
    </div> 
<div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Matricula Vendedor</label>
        <input type="text" class="form-control" id="full_name_id" readonly name="Matricula_Vendedor" value="Sin Matricula">
    </div> 

    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nombre del Auto</label>
        <input type="text" class="form-control" id="full_name_id" readonly name="Nombre_Auto" value="<?php  echo $Nombre_Auto; ?>">
    </div>    

    <div class="form-group"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Marca Del Auto</label>
        <input type="text" class="form-control" id="street1_id" readonly name="Marca_Auto" value="<?php  echo $Marca_Auto; ?>">
    </div>                    
                            
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Tipo del Auto</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Tipo_Auto" value="<?php  echo $Tipo_Auto; ?>">
    </div> 
    
     <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Precio del Auto</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Precio_Auto" value="<?php  echo $Precio_Auto; ?>">
    </div> 
    
     <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Color del Auto</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Color_Auto" value="<?php  echo $tipo2; ?>">
    </div> 
    
     <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Equipamento del Auto</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Equipamento_Auto" value="<?php  echo $tipo5; ?>">
    </div> 
    
     <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Precio del Equipamento</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Precio_Equipamento" value="<?php  echo $tipo3; ?>">
    </div> 
    
    
       
       <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Precio Total</label>
        <input type="text" class="alert alert-danger" id="street2_id" readonly name="Precio_Total" value="<?php  echo $Money; ?>">
    </div> 
    </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">Informacion Acerca del Cliente</div>
      <div class="panel-body">
      <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Nombre del cliente</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Nombre_Cliente" value="<?php  echo $Nombre_Cliente; ?>">
    </div> 
     <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="street2_id"  name="ApellidoP_Cliente" value="<?php  echo $ApellidoP_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Apellido Materno</label>
        <input type="text" class="form-control" id="street2_id"  name="ApellidoM_Cliente" value="<?php  echo $ApellidoM_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Edad</label>
        <input maxlength="2" type="number" class="form-control" id="street2_id"  name="Edad_Cliente" value="<?php  echo $Edad_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Sexo</label>
        <input type="text" class="form-control" id="street2_id"  name="Sexo" value="<?php  echo $Sexo_Cliente; ?>" readonly required>  
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Direccion</label>
        <input type="text" class="form-control" id="street2_id"  name="Direccion_Cliente" value="<?php  echo $Direccion_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Colonia</label>
        <input type="text" class="form-control" id="street2_id"  name="Colonia_Cliente" value="<?php  echo $Colonia_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Estado</label>
        <input type="text" class="form-control" id="street2_id"  name="Estado_Cliente" value="<?php  echo $Estado_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Pais</label>
        <input type="text" class="form-control" id="street2_id"  name="Pais_Cliente" value="<?php  echo $Pais_Cliente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Numero Telefonico</label>
        <input type="number" class="form-control" id="street2_id"  name="Telefono_Cliente" value="<?php  echo $Telefono_Ciente; ?>" readonly required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Correo</label>
        <input type="email" class="form-control" id="street2_id"  name="Correo_Cliente" value="<?php  echo $Correo_Cliente; ?>" readonly required>
    </div> 
      
      
      </div>
      </div>
<div class="form-group"> <!-- Submit Button -->
        <button name="Confirmar" type="submit" class="btn btn-primary">Confirmar</button>
    </div>     
      
    
</form>
<div class="form-group"> <!-- Submit Button -->
        <button name="Cancelar" onclick=" location.href='models.php' " type="submit" class="btn btn-danger">Cancelar</button>
    </div> 
   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					
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
