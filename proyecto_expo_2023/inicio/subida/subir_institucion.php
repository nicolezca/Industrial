<?php
include('../../database/bd.php');

// Consulta para obtener el último id registrado en la tabla instituciones
$sql_last_id = "SELECT MAX(id_instituciones) AS last_id FROM instituciones";
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
    $nombreInstitucion = $_POST["nombre_institucion"];
    $curso = $_POST["curso"];
    $cantidadAlumnos = $_POST["cantidad_alumnos"];
    $cantidadDocentes = $_POST["cantidad_docentes"];
    $fechaHoraActual = date('Y-m-d H:i:s');

    $sql = "INSERT INTO instituciones (escuela, curso, cant_alumnos, cant_docentes, id_instituciones, tiempo) VALUES ('$nombreInstitucion', '$curso', '$cantidadAlumnos', '$cantidadDocentes', '$initial_id', '$fechaHoraActual')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('instituto registrado'); window.location.href = '../index.php';</script>";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
    $conn->close();
}
?>
