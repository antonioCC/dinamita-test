<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $correo = $MySQLiconn->real_escape_string($_POST['correo']);
     $contrasena = $MySQLiconn->real_escape_string($_POST['contrasena']);
     $idrol = $MySQLiconn->real_escape_string($_POST['idrol']);
     $SQL = $MySQLiconn->query("INSERT INTO usuarios(nombre,correo,contrasena,id_rol) VALUES('$nombre','$correo',
      '$contrasena','$idrol')");

  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:usuarios.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM usuarios WHERE id=".$_GET['eliminar']);
 header("Location:usuarios.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM usuarios WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE usuarios SET nombre='" 
                          . $_POST['nombre']
                          . "', correo= '"
                          . $_POST['correo']
                          . "', contrasena='"
                          . $_POST['contrasena']
                          . "', id_rol='"
                          . $_POST['idrol']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:usuarios.php");
}

?>