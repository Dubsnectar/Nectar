CREATE DATABASE db_AutoPartes
GO
Use db_Autopartes
GO
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
CONSTRAINT PK_Cn_idDetalleCompra Primary Key (Cn_idDetalleCompra));

