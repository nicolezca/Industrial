<?php
// login.php

include('../database/bd.php');

function redirigir($url) {
    header("Location: $url");
    exit();
}

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
        redirigir('../home/index.php');
    } else {
        // Inicio de sesión fallido
        echo "Inicio de sesión fallido. Por favor, verifica tus datos. <a href='login.html'>Volver a iniciar</a>";
    }

    $stmt->close();
}

$conn->close();
?>
