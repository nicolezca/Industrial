<?php
include('../bd.php');

function limpiarDato($conn, $dato) {
    return mysqli_real_escape_string($conn, htmlspecialchars($dato));
}

function validarDatos($nombre, $edad, $tipoVisita) {
    // Aquí puedes agregar reglas de validación según tus requisitos
    return !empty($nombre) && is_numeric($edad) && !empty($tipoVisita);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCompleto = limpiarDato($conn, $_POST["nombre_completo"]);
    $edad = limpiarDato($conn, $_POST["edad"]);
    $tipoVisita = limpiarDato($conn, $_POST["tipo_visita"]);
    $fechaHoraActual = date('Y-m-d H:i:s');

    if (validarDatos($nombreCompleto, $edad, $tipoVisita)) {
        $sql = "INSERT INTO personas (nombre_completo, edad, tipo, tiempo) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siss", $nombreCompleto, $edad, $tipoVisita, $fechaHoraActual);

        if ($stmt->execute()) {
            echo "<script>alert('Visita registrada'); window.location.href = '../../home/visitas.php';</script>";
        } else {
            echo "Error al guardar los datos: <a href='../../home/visitas.php'>Volver</a>";
        }

        $stmt->close();
    } else {
        echo "Error: Datos no válidos. <a href='../../home/visitas.php'>Volver</a>";
    }

    $conn->close();
}
?>
