<?php
// registro.php

include('../database/bd.php');

// Consulta para obtener el último id registrado en la tabla usuarios
$sql_last_id = "SELECT MAX(id) AS last_id FROM usuarios";
$result_last_id = $conn->query($sql_last_id);
$row_last_id = $result_last_id->fetch_assoc();
$last_id = $row_last_id['last_id'];

// Establecer el valor inicial del id
if ($last_id === null) {
    $initial_id = 1;
} else {
    $initial_id = $last_id + 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de registro
    $nombre_ingreso = $_POST['nombreIngreso'];
    $usuario_ingreso = $_POST['usuarioIngreso'];
    $clave_ingreso = $_POST['claveIngreso'];

    // Consulta para insertar el nuevo usuario en la base de datos con el id manual
    $sql = "INSERT INTO usuarios (id, nombre, usuario, clave) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $initial_id, $nombre_ingreso, $usuario_ingreso, $clave_ingreso);
    if ($stmt->execute()) {
        // Registro exitoso, redirigir al formulario de inicio de sesión.
        header("Location:../home/index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
