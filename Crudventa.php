<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     
     $fecha = $MySQLiconn->real_escape_string($_POST['fecha']);
     $costo = $MySQLiconn->real_escape_string($_POST['costo']);
     $estado = $MySQLiconn->real_escape_string($_POST['estado']);
  $SQL = $MySQLiconn->query("INSERT INTO venta(fecha,costo,estado) VALUES('$fecha','$costo','$estado')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:ventas.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM venta WHERE id=".$_GET['eliminar']);
 header("Location:ventas.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM venta WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE venta SET fecha='"
                          . $_POST['fecha']
                          . "', costo='"
                          . $_POST['costo']
                          ."', estado='"
                          . $_POST['estado']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:ventas.php");
}

?>