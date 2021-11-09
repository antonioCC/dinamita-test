<?php
include_once '../crudlog.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CREATE</title>
  <link rel="stylesheet" type="text/css" href="../estilos/login.css">
  <script src="script/login.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="crear">create</button>
      </div>      <p class="message">Already registered? <a href="../index.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>

