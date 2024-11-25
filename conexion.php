<?php
$server = "localhost";
$user = "root";
$pass = "pass";
$db = "womensecret";

// se crea la conexión
$con = new mysqli($server, $user, $pass, $db);

// se valida la conexión
if ($con->connect_error) {
  die("Hubo un fallo en la conexión." . $con->connect_error);
}
