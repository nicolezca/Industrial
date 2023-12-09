<?php
include('../../database/bd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCompleto = $_POST["nombre_completo"];
    $edad = $_POST["edad"];
    $tipoVisita = $_POST["tipo_visita"];
    $fechaHoraActual = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO personas (nombre_completo, edad, tipo,tiempo) VALUES ('$nombreCompleto', '$edad', '$tipoVisita','$fechaHoraActual')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('visita registrada'); window.location.href = '../index.php';</script>";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
    $conn->close();
}
?>
