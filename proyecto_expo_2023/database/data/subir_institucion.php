<?php
include('../bd.php');

function obtenerUltimoID($conn) {
    $sql = "SELECT MAX(id_instituciones) AS last_id FROM instituciones";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return ($row['last_id'] !== null) ? $row['last_id'] + 1 : 1;
}

function limpiarDato($conn, $dato) {
    return mysqli_real_escape_string($conn, htmlspecialchars($dato));
}

function validarDatos($nombre, $curso, $cantAlumnos, $cantDocentes) {
    // Aquí puedes agregar reglas de validación según tus requisitos
    return !empty($nombre) && !empty($curso) && is_numeric($cantAlumnos) && is_numeric($cantDocentes);
}

function insertarInstituto($conn, $nombre, $curso, $cantAlumnos, $cantDocentes, $id, $tiempo) {
    $sql = "INSERT INTO instituciones (escuela, curso, cant_alumnos, cant_docentes, id_instituciones, tiempo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiis", $nombre, $curso, $cantAlumnos, $cantDocentes, $id, $tiempo);

    if ($stmt->execute()) {
        echo "<script>alert('Instituto registrado'); window.location.href = '../../home/instituciones.php';</script>";
    } else {
        echo "Error al guardar los datos: <a href='../../home/instituciones.php'>Volver</a>";
    }

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreInstitucion = limpiarDato($conn, $_POST["nombre_institucion"]);
    $curso = limpiarDato($conn, $_POST["curso"]);
    $cantidadAlumnos = limpiarDato($conn, $_POST["cantidad_alumnos"]);
    $cantidadDocentes = limpiarDato($conn, $_POST["cantidad_docentes"]);
    $fechaHoraActual = date('Y-m-d H:i:s');

    if (validarDatos($nombreInstitucion, $curso, $cantidadAlumnos, $cantidadDocentes)) {
        $lastID = obtenerUltimoID($conn);
        insertarInstituto($conn, $nombreInstitucion, $curso, $cantidadAlumnos, $cantidadDocentes, $lastID, $fechaHoraActual);
    } else {
        echo "Error: Datos no válidos. <a href='../../home/instituciones.php'>Volver</a>";
    }

    $conn->close();
}
?>
