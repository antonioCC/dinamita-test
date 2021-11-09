<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['crear']))
{
		
	 /*echo "Guardandoooooooooooooooooooo";
     $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
     $contra = $MySQLiconn->real_escape_string($_POST['contra']);


  $SQL = $MySQLiconn->query("INSERT INTO perfiles(nombre,direccion,telefono) VALUES('$nombre','$direccion','$telefono')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  }*/
  header("Location:../index.php");
}



/* Codigo para eliminar Datos */
if(isset($_POST['categoria']))
{
  //no se usa esta variable
$categoria = $MySQLiconn->real_escape_string($_POST['categoria']);
    
$res = $MySQLiconn->query("SELECT * FROM productos where categoria='$categoria'");
 $getROW = $res->fetch_array();

}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

  //$getROW = $SQL->fetch_array();

  $SQL = $MySQLiconn->query("INSERT INTO venta(fecha,costo,estado) VALUES(curdate(),'$getROW[precio]','pagado')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
   echo $getROW['precio'];
  }

 //$SQL = $MySQLiconn->query("SELECT * FROM ventas WHERE id=".$_GET['editar']);
 //
}



?>