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
  <title>women'secret &#183; conjunto deporte</title>
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
      <img src="../html/img/ninos/n1.jpg">
      <div class="info-producto">
        <h4>Conjunto deporte</h4>
        <p>25.50€</p>

        <div id="tallas">
          <label>Talla:</label>
          <select name="tallas">
            <option value="0_12" selected>0-12 meses</option>
            <option value="2_3">2-3 años</option>
            <option value="4_5">4-5 años</option>
            <option value="6_7">6-7 años</option>
            <option value="8_9">8-9 años</option>
            <option value="10_12">10-12 años</option>
          </select>
          <label>Color:</label>
          <select name="tallas">
            <option value="gris" selected>Gris</option>
            <option value="blanco">Blanco</option>
            <option value="negro">Negro</option>
          </select>
        </div>

        <div id="descripcion">
          <p>Conjunto completo infantil con dibujos de la serie animada "La Patrulla Canina", que muestra a los personajes Chase, Marshall, y Rubble. Hecha con algodón, puede venir en color gris, blanco o negro. Sirve para hacer deporte, o como conjunto casual. Conjunta muy bien con niños pelirrojos como se puede apreciar en la imagen de muestra. Niño no incluido.</p>
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