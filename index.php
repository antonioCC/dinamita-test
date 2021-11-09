<?php
include_once 'crudlog.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="estilos/login.css">
  <script src="script/login.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" name="nombre" placeholder="username"/>
      <input type="password" name="contra" placeholder="password"/>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="iniciar">Login</button>
      </div>
      <p class="message">Not registered? <a href="paginas/registro.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
