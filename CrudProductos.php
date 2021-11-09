<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $precio = $MySQLiconn->real_escape_string($_POST['precio']);
     $descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
     $categoria = $MySQLiconn->real_escape_string($_POST['categoria']);
  

  $SQL = $MySQLiconn->query("INSERT INTO productos(nombre,precio,descripcion,categoria) VALUES('$nombre','$precio','$descripcion','$categoria')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:productos.php");
}


/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM productos WHERE id=".$_GET['eliminar']);
 header("Location:productos.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM productos WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}


/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE productos SET nombre='" 
                          . $_POST['nombre']
                          . "', precio='"
                          . $_POST['precio']
                          . "', descripcion='"
                          . $_POST['descripcion']
                          . "', categoria='"
                          . $_POST['categoria']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:productos.php");
}

?>