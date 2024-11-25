<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width. initial-scale=1.0">
  <?php
  include "../includes/head.php";
  ?>
  <link rel="stylesheet" href="../css/productos.css">
  <title>women'secret &#183; cosméticos</title>
  <script>
    window.onload = function() {
      document.getElementsByClassName("veinticinco")[0].addEventListener("click", function() {
        window.location.href = "producto2.php";
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
    <div class="producto veinticinco">
      <div class="info-producto">
        <h4>Limpiador facial 200ml</h4>
        <p>27.95€</p>
      </div>
    </div>

    <div class="producto veintiseis">
    <div class="info-producto">
        <h4>Sérum Bakuchiol 30ml</h4>
        <p>38.00€</p>
      </div>
    </div>

    <div class="producto veintisiete">
    <div class="info-producto">
        <h4>Crema facial Enriched 50ml</h4>
        <p>36.95€</p>
      </div>
    </div>

    <div class="producto veintiocho">
      <div class="info-producto">
        <h4>Aceite Super Seed 15ml</h4>
        <p>29.50€</p>
      </div>
    </div>

    <div class="producto veintinueve">
      <div class="info-producto">
        <h4>Body Mist 'Magic Stories' 250ml</h4>
        <p>8.99€</p>
      </div>
    </div>

    <div class="producto treinta">
    <div class="info-producto">
        <h4>Fragancia "Rose Seduction" 100ml</h4>
        <p>17.99€</p>
      </div>
    </div>

    <div class="producto treintayuno">
    <div class="info-producto">
        <h4>Fragancia 'Intimate' 100ml</h4>
        <p>16.99€</p>
      </div>
    </div>

    <div class="producto treintaydos">
      <div class="info-producto">
        <h4>Fragancia 'Intimate' 100ml</h4>
        <p>16.99€</p>
      </div>
    </div>

    <div class="producto treintaytres">
      <div class="info-producto">
        <h4>Mascarilla para el cabello 200ml</h4>
        <p>22.49€</p>
      </div>
    </div>

    <div class="producto treintaycuatro">
    <div class="info-producto">
        <h4>Champú color y brillo 250ml</h4>
        <p>14.50€</p>
      </div>
    </div>

    <div class="producto treintaycinco">
    <div class="info-producto">
        <h4>Acondicionador cabello 490ml</h4>
        <p>24.49€</p>
      </div>
    </div>

    <div class="producto treintayseis">
      <div class="info-producto">
        <h4>Champú sólido Dry Hair 85gr</h4>
        <p>11.00€</p>
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