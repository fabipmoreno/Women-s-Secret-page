<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include "../includes/head.php";
  ?>
  <link rel="stylesheet" href="../css/producto_individual.css">
  <title>women'secret &#183; sujetador halter encaje negro</title>
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
    <div class="producto">
      <img src="../html/img/prendas/m1.jpg">
      <div class="info-producto">
        <h4>Sujetador halter encaje</h4>
        <p>25.50€</p>

        <div id="tallas">
          <label>Talla:</label>
          <select name="tallas">
            <option value="XS">XS</option>
            <option value="S" selected>S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <label>Color:</label>
          <select name="tallas">
            <option value="negro" selected>Negro</option>
            <option value="blanco">Blanco</option>
            <option value="rojo">Rojo</option>
          </select>
        </div>

        <div id="descripcion">
          <p>Bralette de tipo halter confeccionado en encaje de estilo crochet. Con espalda de tirantes cruzados, este bralette se convertirá en una de tus prendas favoritas de la temporada. Atrévete incluso a dejar que se vea luciéndolo con tus pantalones y blazer favoritos.</p>
        </div>

        <div class="botones">
        <button class="boton"><a href="wip.php">Compra Directa</a></button>
        <button class="boton"><a href="wip.php">Añadir a Cesta</a></button>
        </div>
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