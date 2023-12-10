<?php
// registro.php

include('../database/bd.php');

function obtenerSiguienteID($conn) {
    $sql = "SELECT MAX(id) AS last_id FROM usuarios";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return ($row['last_id'] !== null) ? $row['last_id'] + 1 : 1;
}

function redirigir($url) {
    header("Location: $url");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de registro
    $nombreIngreso = $_POST['nombreIngreso'];
    $usuarioIngreso = $_POST['usuarioIngreso'];
    $claveIngreso = $_POST['claveIngreso'];

    // Obtener el próximo ID disponible
    $nextID = obtenerSiguienteID($conn);

    // Consulta para insertar el nuevo usuario en la base de datos con el próximo ID
    $sql = "INSERT INTO usuarios (id, nombre, usuario, clave) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $nextID, $nombreIngreso, $usuarioIngreso, $claveIngreso);

    if ($stmt->execute()) {
        // Registro exitoso, redirigir al formulario de inicio de sesión.
        redirigir('../home/index.php');
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
