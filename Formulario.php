<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
/* Nombre del servidor. */
$serverName = "NECTAR-PC";
/* Usuario y clave.  */
$uid = "Prueba";
$pwd = "prueba";
/* Array asociativo con la información de la conexion */
$connectionInfo = array( "UID"=>$uid,
"PWD"=>$pwd);
 
/* Nos conectamos mediante la autenticación de SQL Server . */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
echo "No es posible conectarse al servidor.</br>";
die( print_r( sqlsrv_errors(), true));
}
 
/* Query que nos mostrara el usuario con el que nos hemos conectado a la base de datos. */
$tsql = "SELECT CONVERT(varchar(32), SUSER_SNAME())";
$stmt = sqlsrv_query( $conn, $tsql);
if( $stmt === false )
{
echo "Error al ejecutar consulta.</br>";
die( print_r( sqlsrv_errors(), true));
}
/* Mostramos el resultado. */
$row = sqlsrv_fetch_array($stmt);
echo "User login: ".$row[0]."</br>";
/* Cerramos la conexión, muy importante. */
sqlsrv_free_stmt( $stmt);

?>  <!-- Conexion a Base de Datos --> 





<form id="form1" name="form1" method="post" action="">
  <p>CREAR  - BORAR - CONSULTAR</p>
  <p>BASE DE DATOS AUTOPARTES</p>
  <p> </p>
 
  <p>
    <input type="submit" name="Crear" id="Crear" value="Crear" />
    <input type="submit" name="Borrar" id="Borrar" value="Borrar" />
    <input type="submit" name="Consultar" id="Consultar" value="Consultar" />
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="CrearRelaciones" id="CrearRelaciones" value="Crear Relaciones" />
    <input type="submit" name="Mostrar" id="Mostrar" value="Mostrar Relaciones" />
  </p>
  
  <p>MENSAJE: </p>
  
  <p>
    <textarea name="Texto" id="Texto" cols="45" rows="5">
    <?php
if (isset($_POST['Crear'])) {
$tsql1 = "IF  NOT EXISTS (SELECT 1 FROM sys.databases WHERE name = N'db_AutoPartes')
    BEGIN
        CREATE DATABASE [db_AutoPartes]
    END;";
$stmt1 = sqlsrv_query( $conn, $tsql1);
if( $stmt1 === false )
{
echo "Error al ejecutar consulta.";
}


$CrearTabla = "USE db_AutoPartes
		Create table tbl_Empleado(
Cn_idEmpleado int identity(1,1),
Cn_NombreEmp nvarchar,
Cn_ApellidoPEmp nvarchar,
Cn_ApellidoMEmp nvarchar,
Cn_EdadEmp int,
Cn_SexoEmp Char,
Cn_DireccionEmp text,
Cn_TelEmp int,
CONSTRAINT PK_Cn_IdEmpleado Primary Key (Cn_idEmpleado))

Create table tbl_AutoPartes(
Cn_idPieza int identity(1,1),
Cn_NombrePieza nvarchar,
Cn_AVS nvarchar,
Cn_Fotografia nvarchar,
CONSTRAINT PK_Cn_idPieza Primary Key (Cn_idPieza))

Create table tbl_DetallePieza(
Cn_idDetallePieza int identity(1,1),
Cn_VersionPieza int,
Cn_ModeloAUto nvarchar,
Cn_MedidaPieza int,
Cn_CantidadPieza int,
CONSTRAINT PK_Cn_idDetallePieza Primary Key (Cn_idDetallePieza))

Create table tbl_Cliente(
Cn_idCliente int identity(1,1),
Cn_NombreCli nvarchar,
Cn_ApellidoPCli nvarchar,
Cn_ApellidoMCli nvarchar,
Cn_EdadCli int,
Cn_SexoCli Char,
Cn_DireccionCli text,
Cn_TelEmp int,
CONSTRAINT PK_Cn_idCliente Primary Key (Cn_idCliente))

Create table tbl_Proveedor(
Cn_idProveedor int identity(1,1),
Cn_NombreProvee nvarchar,
Cn_DireccionProvee text,
Cn_TelProvee int,
CONSTRAINT PK_Cn_idProveedor Primary Key (Cn_idProveedor))

Create table tbl_Ventas(
Cn_idVenta int identity(1,1),
Cn_Fecha date,
Cn_Monto money,
CONSTRAINT PK_Cn_idVenta Primary Key (Cn_idVenta))

Create table tbl_DetalleVenta(
Cn_idDetalleVenta int identity(1,1),
Cn_Cantidad int,
CONSTRAINT PK_Cn_idDetalleVenta Primary Key (Cn_idDetalleVenta))

Create table tbl_Compras(
Cn_idCompra int identity(1,1),
Cn_PrecioCompra money,
Cn_FechaCompra date,
CONSTRAINT PK_Cn_idCompra Primary Key (Cn_idCompra))

Create table tbl_DetalleCompras(
Cn_idDetalleCompra int identity(1,1),
Cn_PrecioUnitario money,
Cn_PrecioIva money,
Cn_PrecioSinIva money,
Cn_CantidadPieza int,
Cn_NombrePieza nvarchar,
CONSTRAINT PK_Cn_idDetalleCompra Primary Key (Cn_idDetalleCompra));";
$Tabla = sqlsrv_query( $conn, $CrearTabla);
if( $Tabla === false )
{
echo "Error al ejecutar consulta.";
die( print_r( sqlsrv_errors(), true));
}
echo "Base de datos Creada Correctamente"; 
} 
?>  
<?php
if (isset($_POST['CrearRelaciones'])) {
$tsql12 = "

USE db_Autopartes
ALTER TABLE tbl_DetallePieza  ADD CONSTRAINT FK_DetallePieza  FOREIGN  KEY (Cn_idDetallePieza) REFERENCES tbl_AutoPartes (Cn_idPieza )
ALTER TABLE tbl_Ventas  ADD CONSTRAINT FK_VentaEmpleado FOREIGN  KEY (Cn_idVenta) REFERENCES tbl_Empleado (Cn_idEmpleado)
ALTER TABLE tbl_Ventas  ADD CONSTRAINT FK_VentaCliente FOREIGN  KEY (Cn_idVenta) REFERENCES tbl_Cliente (Cn_idCliente)
ALTER TABLE tbl_DetalleVenta  ADD CONSTRAINT FK_DetalleVenta FOREIGN  KEY (Cn_idDetalleVenta) REFERENCES tbl_Ventas (Cn_idVenta)
ALTER TABLE tbl_DetalleVenta   ADD CONSTRAINT FK_DetalleVentaPieza  FOREIGN  KEY (Cn_idDetalleVenta) REFERENCES tbl_AutoPartes (Cn_idPieza)
ALTER TABLE tbl_Compras  ADD CONSTRAINT FK_CompraProveedor FOREIGN  KEY (Cn_idCompra) REFERENCES tbl_Proveedor (Cn_idProveedor)
ALTER TABLE tbl_DetalleCompras  ADD CONSTRAINT FK_DetalleCompra FOREIGN  KEY (Cn_idDetalleCompra) REFERENCES tbl_Compras (Cn_idCompra)
";
$stmt12 = sqlsrv_query( $conn, $tsql12);
if( $stmt12 === false )
{
echo "Error al ejecutar consulta.";
}
echo "Se crearon las relaciones, Correctamente";
} 
?>
<?php
if (isset($_POST['Borrar'])) {
$tsql13 = "DROP DATABASE [db_AutoPartes]";
$stmt13 = sqlsrv_query( $conn, $tsql13);
if( $stmt13 === false )
{
echo "Error al ejecutar consulta.";
}
} 
?> 
  <?php
if (isset($_POST['Consultar'])) {
$tsql12 = "IF EXISTS (SELECT 1 FROM sys.databases WHERE name = N'db_AutoPartes')
    BEGIN
	SELECT TABLE_NAME FROM db_AutoPartes.INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE'
	END;";
$stmt12 = sqlsrv_query( $conn, $tsql12);
if( $stmt12 === false )
{
echo "Error al ejecutar consulta.";
}
echo"Tablas CREADAS::::";
while($row = sqlsrv_fetch_array($stmt12)){
echo " ".$row[0]." ";
    }
} 
?>
 
<?php
if (isset($_POST['Mostrar'])) {
$tsql14 = "USE db_AutoPartes
    SELECT * FROM INFORMATION_SCHEMA.REFERENTIAL_CONSTRAINTS";
$stmt14 = sqlsrv_query( $conn, $tsql14);
if( $stmt14 === false )
{
echo "Error al ejecutar consulta.";
}
echo"Relaciones CREADAS::::";
while($row1 = sqlsrv_fetch_array($stmt14)){
echo " ".$row1[0]." ";
    }
} 
?>


  </textarea>
    <br />
  </p>
</form>
</body>
</html>