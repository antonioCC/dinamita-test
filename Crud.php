<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $valor = $MySQLiconn->real_escape_string($_POST['valor']);

  $SQL = $MySQLiconn->query("INSERT INTO rol(nombre,valor) VALUES('$nombre','$valor')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:roles.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM rol WHERE id=".$_GET['eliminar']);
 header("Location:roles.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM rol WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE rol SET nombre='" 
                          . $_POST['nombre']
                          . "', valor='"
                          . $_POST['valor']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:roles.php");
}

?>