<?php

// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'exposicion_2023';

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die('Error de conexión: ' . $conn->connect_error);
}


?>