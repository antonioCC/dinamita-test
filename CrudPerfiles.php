<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $direccion = $MySQLiconn->real_escape_string($_POST['direccion']);
     $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);

  $SQL = $MySQLiconn->query("INSERT INTO perfiles(nombre,direccion,telefono) VALUES('$nombre','$direccion','$telefono')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:perfiles.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM perfiles WHERE id=".$_GET['eliminar']);
 header("Location:perfiles.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM perfiles WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE perfiles SET nombre='" 
                          . $_POST['nombre']
                          . "', direccion='"
                          . $_POST['direccion']
                          . "', telefono='"
                          . $_POST['telefono']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:perfiles.php");
}

?>