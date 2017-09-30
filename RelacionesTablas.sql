USE db_Autopartes

/*Relacion para tabla DetallePieza */

ALTER TABLE tbl_DetallePieza  ADD CONSTRAINT FK_DetallePieza  FOREIGN  KEY (Cn_idDetallePieza) REFERENCES tbl_AutoPartes (Cn_idPieza )


/*Relacion para Tabla Ventas */

ALTER TABLE tbl_Ventas  ADD CONSTRAINT FK_VentaEmpleado FOREIGN  KEY (Cn_idVenta) REFERENCES tbl_Empleado (Cn_idEmpleado)
ALTER TABLE tbl_Ventas  ADD CONSTRAINT FK_VentaCliente FOREIGN  KEY (Cn_idVenta) REFERENCES tbl_Cliente (Cn_idCliente)

/*Relacion para Tabla DetalleVentas */

ALTER TABLE tbl_DetalleVenta  ADD CONSTRAINT FK_DetalleVenta FOREIGN  KEY (Cn_idDetalleVenta) REFERENCES tbl_Ventas (Cn_idVenta)
ALTER TABLE tbl_DetalleVenta   ADD CONSTRAINT FK_DetalleVentaPieza  FOREIGN  KEY (Cn_idDetalleVenta) REFERENCES tbl_AutoPartes (Cn_idPieza)

/*Relacion para Tabla Compras */
ALTER TABLE tbl_Compras  ADD CONSTRAINT FK_CompraProveedor FOREIGN  KEY (Cn_idCompra) REFERENCES tbl_Proveedor (Cn_idProveedor)


/*Relacion para Tabla DetalleCompras */

ALTER TABLE tbl_DetalleCompras  ADD CONSTRAINT FK_DetalleCompra FOREIGN  KEY (Cn_idDetalleCompra) REFERENCES tbl_Compras (Cn_idCompra)

/*Muestra las Relaciones */
SELECT * FROM INFORMATION_SCHEMA.REFERENTIAL_CONSTRAINTS