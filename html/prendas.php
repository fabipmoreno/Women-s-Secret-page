<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include "../includes/head.php";
  ?>
  <link rel="stylesheet" href="../css/productos.css">
  <title>women'secret &#183; prendas</title>
  <script>
    window.onload = function() {
      document.getElementsByClassName("uno")[0].addEventListener("click", function() {
        window.location.href = "producto1.php";
      });
    }
  </script>
</head>

<body>

  <!--Encabezado-->
  <header>
    <?php
    include "../includes/header.php";
    ?>
  </header>

  <!--Sección Principal-->
  <main>
    <div class="producto uno">
      <div class="info-producto">
        <h4>Sujetador halter encaje negro</h4>
        <p>14.99€</p>
      </div>
    </div>

    <div class="producto dos">
      <div class="info-producto">
        <h4>Sujetador top triangular negro</h4>
        <p>9.99€</p>
      </div>
    </div>

    <div class="producto tres">
      <div class="info-producto">
        <h4>Sujetador top maternity negro</h4>
        <p>16.99€</p>
      </div>
    </div>

    <div class="producto cuatro">
      <div class="info-producto">
        <h4>Sujetador push up encaje granate</h4>
        <p>11.99€</p>
      </div>
    </div>

    <div class="producto cinco">
      <div class="info-producto">
        <h4>Braguita brasileña algodón blanco</h4>
        <p>4.99€</p>
      </div>
    </div>

    <div class="producto seis">
      <div class="info-producto">
        <h4>Tanga encaje naranja</h4>
        <p>5.99€</p>
      </div>
    </div>

    <div class="producto siete">
      <div class="info-producto">
        <h4>Braguita clásica encaje marrón</h4>
        <p>5.99€</p>
      </div>
    </div>

    <div class="producto ocho">
      <div class="info-producto">
        <h4>Tanga encaje negro</h4>
        <p>5.99€</p>
      </div>
    </div>

    <div class="producto nueve">
      <div class="info-producto">
        <h4>Pantalón largo 100% algodón flores</h4>
        <p>16.99€</p>
      </div>
    </div>

    <div class="producto diez">
      <div class="info-producto">
        <h4>Pantalón largo cuadros blanco</h4>
        <p>16.99€</p>
      </div>
    </div>

    <div class="producto once">
      <div class="info-producto">
        <h4>Chaqueta pelo verde</h4>
        <p>27.99€</p>
      </div>
    </div>

    <div class="producto doce">
      <div class="info-producto">
        <h4>Pantalón largo cuadros vichy</h4>
        <p>16.99€</p>
      </div>
    </div>

  </main>

  <!--Pie de Página-->
  <footer>
    <?php
    include "../includes/footer.php";
    ?>
  </footer>
</body>

</html>