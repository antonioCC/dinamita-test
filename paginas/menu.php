<?php
include_once '../crudmenu.php';
?>
<!DOCTYPE html>
<html>

<head>
<!--link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Pacifico|Playball|Pinyon+Script' rel='stylesheet' type='text/css'>-->

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
      <ul class="nav navbar-nav navbar-right" id=menu>
        <li> <a href="../index.php">logout</a></li>
      </ul>
    </div>
  </div>
</nav>




<div id="sect">
<section>
<div class="container">
      <div class="row-fluid">
      
      <div class="col-md-12">
        <h2><span class="glyphicon glyphicon-edit"></span> Menu</h2>

      
      
        
         </div> 
        </div>
  </div>  

       
          


  <form method="post">
  <div class="form-group">
        <label class="control-label" for="fn">Categoria:</label>
       <div class="col bg-info">
         <input type="text" class="form-control text-uppercase" id='fn' name="categoria" placeholder="Nombre" required
           value="" />
       </div>
    </div>
  </form>



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
    if (isset($_POST['categoria'])) {

      while($getROW)
      {
    ?>
       <tr>
         <td> <?php echo $getROW['id']; ?> </td>
         <td> <?php echo $getROW['nombre']; ?> </td>
         <td> <?php echo $getROW['precio']; ?> </td>
         <td> <?php echo $getROW['descripcion']; ?> </td>
         <td> <?php echo $getROW['categoria']; ?> </td>
         <td>
           <a href="?editar=<?php echo $getROW['id']; ?>" onclick="return confirm('¿Deseas Comprarlo?'); ">

             <span class="glyphicon glyphicon-usd"></span>

           </a>

         </td> 
       </tr>
       <?php
      }
    }
   ?>
 </table>
</section>
</div>






<footer>
Copyright antonio,diana,felipe
</footer>
</div>
</body>
</html>

