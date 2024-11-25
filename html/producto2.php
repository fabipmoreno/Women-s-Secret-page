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
  <title>women'secret &#183; limpiador facial</title>
  <script>
    window.onload = function () {
      const precio = document.getElementById("precio");
      const cantidad = document.getElementsByName("cantidad")[0];

      cantidad.addEventListener("change", function() {
        if (cantidad.value == "200") {
          precio.innerHTML = "27.95€";
        } else if (cantidad.value == "350") {
          precio.innerHTML = "37.95€";
        } else {
          precio.innerHTML = "52.95€";
        }
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
    <div class="producto">
      <img src="../html/img/cosmeticos/c1.jpg">
      <div class="info-producto">
        <h4>Limpiador facial sioris</h4>
        <p id="precio">27.95€</p>

        <div id="tallas">
          <label>Cantidad:</label>
          <select name="cantidad">
            <option value="200" selected>200ml</option>
            <option value="350">350ml</option>
            <option value="500">500ml</option>
          </select>
          <label>Fragancia:</label>
          <select name="fragancia">
            <option value="vainilla" selected>Vainilla</option>
            <option value="rosas">Rosas</option>
            <option value="lavanda">Lavanda</option>
          </select>
        </div>

        <div id="descripcion">
          <p>Este gel de cara se va a convertir en tu mejor aliado. Sus tensioactivos limpian suavemente la piel, sin irritar ni alterar la barrera cutánea. El Sodium Cocoyl Glutamate proporciona un efecto acondicionador e hidratante, ya que hidrata la piel y evita esa incómoda sensación de tirantez.</p>
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