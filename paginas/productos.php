<?php
include_once '../crudproductos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!--link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Pacifico|Playball|Pinyon+Script' rel='stylesheet' type='text/css'>-->
<title>PRODUCTO</title>
<link rel="stylesheet" type="text/css" href="../estilos/index.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>



</head>

<body>
<div id="contenedor">
<header>
	<figure>
  		<img id="panoramica" src="../imagenes/banner.png" alt="Fachada normal JDRH" />
        <img id="logonormal" src="../imagenes/dt.jpeg" alt="Logo normal JDRH" />
	</figure>
	<h1>Taqueria "Don Toño"</h1>
  
</header>


<nav class="nav">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id=menu>
        <li> <a href="../index.php">Pagina principal</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="sect">
<section>
<h2>Productos</h2>

<div class="container-fluid ">
 
 <form method="post">
    <div class="form-group">
        <label class="control-label" for="fn">Nombre:</label>
       <div class="col bg-info">
         <input type="text" class="form-control text-uppercase" id='fn' name="nombre" placeholder="Nombre" required
           value="<?php
                      if(isset($_GET['editar']))
                        echo $getROW['nombre'];  
                  ?>" />
       </div>
    </div>

    <div class="form-group">
       <label class="control-label" for="ln">Precio:</label>
       <div class="col">
          <input type="text" class="form-control text-uppercase" name="precio" placeholder="precio"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['precio'];  ?>"  />
       </div>
    </div>

     <div class="form-group">
       <label class="control-label" for="ln">Descripcion:</label>
       <div class="col">
          <input type="text" class="form-control text-uppercase" name="descripcion" placeholder="descripcion"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['descripcion'];  ?>"  />
       </div>
    </div>

  <div class="form-group">
       <label class="control-label" for="ln">Categoria:</label>
       <div class="col">
          <input type="text" class="form-control text-uppercase" name="categoria" placeholder="categoria"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['categoria'];  ?>"  />
       </div>
    </div>

    <div class="form-group">        
       <?php
        if(isset($_GET['editar']))
         {
       ?>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
          </div>
      <?php
         }
         else
         {
      ?>
      <div class="col-12">       
        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
      </div>
      <?php
     }
     ?>       
    </div>
 </form>

 <h3>Listado de productos</h3>

 <table class="table table-hover table-bordered shadow p-3 mb-5 bg-danger rounded ">
    <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Precio</th>
       <th>Descripcion</th>
       <th>categoria</th> 
       <th>acciones</th>    

    </tr>
    <?php      
     $res = $MySQLiconn->query("SELECT * FROM productos");
      while($row=$res->fetch_array())
      {
    ?>
       <tr>
         <td> <?php echo $row['id']; ?> </td>
         <td> <?php echo $row['nombre']; ?> </td>
         <td> <?php echo $row['precio']; ?> </td>
         <td> <?php echo $row['descripcion']; ?> </td>
         <td> <?php echo $row['categoria']; ?> </td>
         <td>
           <a href="?editar=<?php echo $row['id']; ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

             <span class="glyphicon glyphicon-pencil"></span>

           </a>

           <a href="?eliminar=<?php echo $row['id']; ?>" onclick="return confirm('¿Seguro deseas eliminarlo?'); ">
             <span class="glyphicon glyphicon-trash"></span>
           </a>

           <a href="?imprimir=<?php echo $row['id']; ?>" onclick="return confirm('¿Deseas Imprimir ?'); ">

             <span class="glyphicon glyphicon-print"></span>

           </a>
         </td> 
       </tr>
       <?php
   }
   ?>
 </table>
 
</div>
</section>
</div>



<footer>
Copyright Antonio,Diana,Felipe
</footer>
</div>
</body>
</html>