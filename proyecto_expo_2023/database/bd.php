<?php

// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = 'DB_HOST';
$username = 'DB_USER';
$password = 'DB_PASSW0RD';
$dbname = 'DB_DATABASE';

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die('Error de conexión: ' . $conn->connect_error);
}


?>