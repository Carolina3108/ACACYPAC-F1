<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="public/img/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" action="validarlogin.php">

      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Nombre de usuario">
      <input type="text" id="login" class="fadeIn third" name="pwd" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Ingresar">

    </form>

  </div>
</div>
</body>
</html>