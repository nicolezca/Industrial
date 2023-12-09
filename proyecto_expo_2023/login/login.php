<?php
// login.php

include('../database/bd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $loginUsername = $_POST['nombre'];
    $loginPassword = $_POST['clave'];

    // Consulta para verificar si el usuario y contraseña son válidos
    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND clave = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $loginUsername, $loginPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso, redirigir al index o a la página deseada.
        header("Location: ../inicio/index.php");
        exit();
    } else {
        // Inicio de sesión fallido
        echo "Inicio de sesión fallido. Por favor, verifica tus datos.";
        echo '<a href="login.html">volver a inciar</a>';
    }
}

$conn->close();
?>
