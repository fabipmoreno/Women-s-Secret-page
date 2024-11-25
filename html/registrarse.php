<?php

require "../conexion.php";

if (isset($_POST) && !empty($_POST)) {
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  // insertar registro
  $sql = "INSERT INTO user (nombre, apellidos, email, pass)
  VALUES('" . $nombre . "','" . $apellidos . "','" . $email . "','" . $pass . "');";
  
  // validación proceso
  if ($con->query($sql) === TRUE) {
    header("location: iniciar-sesion.php?msg=1");
  } else {
    echo $con->error;
  }

  $con->close();

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include "../includes/head.php";
  ?>
  <link rel="stylesheet" href="../css/cuentas.css">
  <title>women'secret &#183; registrarse</title>
</head>

<body>
  <!--Encabezado-->
  <header>
    <?php
    include "../includes/header.php";
    ?>
  </header>

  <main>
    <h1>¡Únete a nosotras!</h1>

    <div class="formulario">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" placeholder="Nombre" name="nombre" required>
        <input type="text" placeholder="Apellidos" name="apellidos" required>
        <input type="email" placeholder="Correo electrónico" name="email" required>
        <input type="password" placeholder="Contraseña" name="pass" required>
        <p>Todos los campos son obligatorios.</p>
        <p>Al registrate, aceptas los términos y condiciones de Women'secret.</p>
        <input class="boton" type="submit" value="Registrarse" class="boton">
      </form>
    </div>
  </main>

  <!--Pie de página-->
  <footer id="footer-registrar">
    <?php
    include "../includes/footer.php";
    ?>
  </footer>
</body>

</html>