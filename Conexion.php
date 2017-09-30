<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php /*
$serverName = "NECTAR-PC"; 
    $connectionInfo = array( "UID"=>"Prueba","PWD"=>"prueba"); 
      
    $conn = sqlsrv_connect( $serverName, $connectionInfo); 
    if($conn){ 
        echo('Conectado'); 
    }else{ 
        echo('No se pudo conectar<br/>'); 
        die( print_r( sqlsrv_errors(), true)); 
    }  
   
   
*/?>

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
sqlsrv_close( $conn);
?>
</body>

</html>