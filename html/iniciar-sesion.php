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
  <title>women'secret &#183; iniciar sesión</title>
</head>

<body>
  <!--Encabezado-->
  <header>
    <?php
    include "../includes/header.php";
    ?>
  </header>

  <main id="main-inicio-sesion">
    <h1>Inicia sesión</h1>

    <div class="formulario">
      <form>
        <input type="email" placeholder="Correo electrónico" required>
        <input type="password" placeholder="Contraseña" required>
        <input class="boton" type="submit" value="Iniciar Sesión" class="boton">
        <a href="./registrarse.php"><p id="quiero-crear-cuenta">Quiero crear una cuenta</p></a>
      </form>
      <p id="msg">
        <?php
          if (isset($_GET) && !empty($_GET)) {
            $msg = $_GET['msg'];
            if ($msg == 1) {
              echo "¡Te has registrado correctamente!";
            }
          }
        ?>
      </p>
    </div>
  </main>

  <!--Pie de página-->
  <footer>
    <?php
    include "../includes/footer.php";
    ?>
  </footer>
</body>

</html>