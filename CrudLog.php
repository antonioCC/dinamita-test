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
if(isset($_POST['iniciar']))
{
  //no se usa esta variable
  $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);//segunda forma de hacerlo, asignar abajo esta variable

//sentencia sql para hacer consulta donde el nombre y la contraseña sean los que se ingresan en los cuadros de texto
//del login.php(index.php ahora)
$sql = "SELECT * FROM usuarios WHERE nombre='$_POST[nombre]' and contrasena='$_POST[contra]'";

//tu consulta seria algo asi, $_POST[categoria] es el nombre que tiene el cuadro de texto(name=categoria)
$sql2 = "SELECT * FROM productos WHERE categoria='$_POST[categoria]'";

$result=mysqli_query($MySQLiconn,$sql);//se guarda el resultado aqui

$fila=mysqli_fetch_array($result);//convierte en un array el resultado

//esta condicion pregunta el valor del campo categoria en la bd, en tu caso seria $fila['categoria']=='tortas'
if ($fila['id_rol']==1) {
    header("Location:paginas/principal.php");//envia a la pagina, en tu caso debes hacer que se muestren las consultas
}elseif ($fila['id_rol']==3) {
    header("Location:paginas/menu.php");
}else{
    echo '<script language="javascript">

  alert("usuario/contraseña incorrectos o usuario inexistente");

  </script>';
    
}


 
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM perfiles WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}



?>