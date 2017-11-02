
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="css/style2.css" type="text/css" rel="stylesheet">
</head>
<body>
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
<form action="Comprar.php?" method="post">

    <div class="panel panel-primary">
      <div class="panel-heading">Informacion Acerca del Auto</div>
      <div class="panel-body">
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nombre del Auto</label>
        <input type="text" class="form-control" id="full_name_id" readonly name="Nombre_Auto" value="<?php  echo $row2['Nombre_Auto'] ?>">
        <input type="hidden" class="form-control" id="full_name_id" readonly  name="ID" value="<?php  echo $row2['Id_Auto'] ?>">
    </div>    

    <div class="form-group"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Marca Del Auto</label>
        <input type="text" class="form-control" id="street1_id" readonly name="Marca_Auto" value="<?php  echo $row2['Marca_Auto'] ?>">
    </div>                    
                            
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Tipo del Auto</label>
        <input type="text" class="form-control" id="street2_id" readonly name="Tipo_Auto" value="<?php echo $tipo2; ?>">
    </div>    

    <div class="form-group"> <!-- City-->
        <label for="city_id" class="control-label">Precio del Auto</label>
        <input type="text" class="form-control" id="city_id" name="Precio_Auto" readonly value="$<?php  echo $row2['Precio_Auto'] ?>">
    </div>                          
    <div class="form-group"> <!-- State Button -->
        <label for="state_id" class="control-label">Color del Auto</label>
        <select name="Color" class="form-control" id="state_id">
        <optgroup label="Seleccione un Color"> 
           <option value="1"> Azul </option>
                     <option value="2"> Rojo </option>
                     <option value="3"> Negro </option>
        </select>                    
    </div>           
                               
    <div class="form-group"> <!-- State Button -->
        <label for="state_id" class="control-label">Equipamento al Auto(Equipamento + Precio)</label>
        <select name="Equipamento" class="form-control" id="state_id">
        <optgroup label="Seleccione un Equipamento">
        <option value="1">Ninguno</option>
           <option value="2"> Rines Cromados + 5000$ </option>
                     <option value="3"> Llantas Todo Terreno + 5000$ </option>
                     <option value="4"> Llantas Todo Terreno y Rines Cromados + 10000$ </option>
                      
        </select>                    
    </div>
    </div>
    </div>
           <div class="panel panel-danger">
      <div class="panel-heading">Informacion Acerca del Cliente</div>
      <div class="panel-body">
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Nombre del Cliente</label>
        <input type="text" class="form-control" id="street2_id"  name="Nombre_Cliente" value="" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="street2_id"  name="ApellidoP_Cliente" value="" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Apellido Materno</label>
        <input type="text" class="form-control" id="street2_id"  name="ApellidoM_Cliente" value="" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Edad</label>
        <input type="number" class="form-control" id="street2_id"  name="Edad_Cliente" value=""  maxlength="2" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Sexo</label>
        <select name="Sexo" class="form-control" id="state_id">
        <optgroup label="Seleccione su Sexo">
        <option value="Hombre">Hombre</option>
           <option value="Mujer"> Mujer </option>
                 </select>  
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Direccion</label>
        <input type="text" class="form-control" id="street2_id"  name="Direccion_Cliente" value="" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Municipio</label>
        <select name="Colonia_Cliente" class="form-control" id="state_id">
        <optgroup label="Seleccione su Municipio">
        <option value="Ixtapaluca">Ixtapaluca</option>
           <option value="Chalco">Chalco</option>
                 </select>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Estado</label>
        <select name="Estado_Cliente" class="form-control" id="state_id">
        <optgroup label="Seleccione su Estado">
        <option value="Mexico">Mexico</option>
           <option value="Michoacan">Michoacan</option>
                 </select>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Pais</label>
        <select name="Pais_Cliente" class="form-control" id="state_id">
        <optgroup label="Seleccione su Pais">
        <option value="Mexico">Mexico</option>
           <option value="Usa">Usa</option>
                 </select>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Numero Telefonico</label>
        <input  type="number" class="form-control" id="street2_id"  name="Telefono_Cliente" value="" maxlength="10" required>
    </div>
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Correo</label>
        <input type="email" class="form-control" id="street2_id"  name="Correo_Cliente" value="" required>
    </div>
    
    
    
    </div>
    </div>        
    
    <div class="form-group"> <!-- Submit Button -->
        <button name="Comprar" type="submit" class="btn btn-primary">Comprar</button>
    </div>     
      
    
</form>
<div class="form-group"> <!-- Submit Button -->
        <button name="Regresar" onclick=" location.href='models.php' " type="submit" class="btn btn-danger">Escoger otro Modelo</button>
    </div> 
<?php }} ?>
</body>
</html>