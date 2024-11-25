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
  <title>women'secret &#183; niños</title>
  <script>
    window.onload = function() {
      document.getElementsByClassName("trece")[0].addEventListener("click", function() {
        window.location.href = "producto3.php";
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
    <div class="producto trece">
      <div class="info-producto">
        <h4>Conjunto deporte</h4>
        <p>25.50€</p>
      </div>
    </div>

    <div class="producto catorce">
    <div class="info-producto">
        <h4>Body bebé </h4>
        <p>12.99€</p>
      </div>
    </div>

    <div class="producto quince">
    <div class="info-producto">
        <h4>Pijama bebé</h4>
        <p>17.99€</p>
      </div>
    </div>

    <div class="producto dieciseis">
      <div class="info-producto">
        <h4>Sudadera con capucha</h4>
        <p>19.65€</p>
      </div>
    </div>

    <div class="producto diecisiete">
      <div class="info-producto">
        <h4>Vestido</h4>
        <p>25.05€</p>
      </div>
    </div>

    <div class="producto dieciocho">
    <div class="info-producto">
        <h4>Cojunto animales</h4>
        <p>33.00€</p>
      </div>
    </div>

    <div class="producto diecinueve">
    <div class="info-producto">
        <h4>Body pijama</h4>
        <p>18.25€</p>
      </div>
    </div>

    <div class="producto veinte">
      <div class="info-producto">
        <h4>Vaqueros</h4>
        <p>14.50€</p>
      </div>
    </div>

    <div class="producto veintiuno">
      <div class="info-producto">
        <h4>Camiseta blanca</h4>
        <p>5.99€</p>
      </div>
    </div>

    <div class="producto veintidos">
    <div class="info-producto">
        <h4>Mono vaquero</h4>
        <p>20.05€</p>
      </div>
    </div>

    <div class="producto veintitres">
    <div class="info-producto">
        <h4>Zapatillas deportiva</h4>
        <p>30.00€</p>
      </div>
    </div>

    <div class="producto veinticuatro">
      <div class="info-producto">
        <h4>Sudadera</h4>
        <p>14.99€</p>
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