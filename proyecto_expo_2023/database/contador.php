<?php

include('../database/bd.php');

function obtenerTotal($conn, $sql, $default = 0) {
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["total"] ?? $default;
    } else {
        return $default;
    }
}

// Consulta 1: Suma total de personas de ambas tablas
$sql1 = "SELECT 
            (SELECT SUM(cant_alumnos) FROM instituciones) + 
            (SELECT SUM(cant_docentes) FROM instituciones) +
            (SELECT COUNT(id_persona) FROM personas) AS total";
$totalPersonas = obtenerTotal($conn, $sql1);

// Consulta 2: Obtener el número total de instituciones
$sql2 = "SELECT COUNT(*) AS total FROM instituciones";
$totalInstituciones = obtenerTotal($conn, $sql2);

// Consulta 3: Obtener el número total de alumnos
$sql3 = "SELECT COUNT(*) AS total FROM personas WHERE LOWER(tipo) = 'alumno'";
$totalAlumnos = obtenerTotal($conn, $sql3);

// Consulta 4: Obtener el número total de docentes
$sql4 = "SELECT COUNT(*) AS total FROM personas WHERE LOWER(tipo) = 'profesor'";
$totalDocentes = obtenerTotal($conn, $sql4);

// Consulta 5: Obtener el número total de directivos
$sql5 = "SELECT COUNT(*) AS total FROM personas WHERE LOWER(tipo) = 'directivo'";
$totalDirectivo = obtenerTotal($conn, $sql5);

// Consulta 6: Obtener el número total de ex-alumnos
$sql6 = "SELECT COUNT(*) AS total FROM personas WHERE LOWER(tipo) = 'ex-alumno'";
$totalExAlumno = obtenerTotal($conn, $sql6);

// Consulta 7: Obtener el número total de otros
$sql7 = "SELECT COUNT(*) AS total FROM personas WHERE LOWER(tipo) = 'otro'";
$totalOtros = obtenerTotal($conn, $sql7);

// Cerrar la conexión a la base de datos
$conn->close();

// Guardar los valores en sesiones
session_start();
$_SESSION['total_personas'] = $totalPersonas;
$_SESSION['total_instituciones'] = $totalInstituciones;
$_SESSION['total_alumnos'] = $totalAlumnos;
$_SESSION['total_docentes'] = $totalDocentes;
$_SESSION['total_directivo'] = $totalDirectivo;
$_SESSION['total_ex_alumnos'] = $totalExAlumno;
$_SESSION['total_otros'] = $totalOtros;