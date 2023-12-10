<?php

$servername = 'DB_HOST';
$username = 'DB_USER';
$password = 'DB_PASSW0RD';
$dbname = 'DB_DATABASE';

// Intentar crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Opcional: Configurar el manejo de errores y excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>
