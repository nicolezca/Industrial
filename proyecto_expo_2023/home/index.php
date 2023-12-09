<?php
include('../database/bd.php');
include('../database/contador.php');
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/styles.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="./datos.js"></script>
        <title>home | Expo 2023</title>
    </head>

    <body>
        <?php include('../components/cabecera.php'); ?>
        <main class="contenido_principal">

            <div class="banner">
                <img src="../public/assets/logo_escuela.png" alt="Logo Industrial" title="Logo Industrial">
                <h2>Escuela Tecnica n°1</h2>
                <h3>chascomus</h3>
            </div>

            <div class="mostrar_contador">
                <div class="contador">
                    <span class="numeros"><?php echo $totalPersonas; ?></span>
                    <span>visitas totales</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalInstituciones; ?></span>
                    <span>instituciones</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalAlumnos; ?></span>
                    <span>alumnos</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalDocentes; ?></span>
                    <span>docentes</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalDirectivo; ?></span>
                    <span>directivos</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalExAlumno; ?></span>
                    <span>ex-alumnos</span>
                </div>
                <div class="contador">
                    <span class="numeros"><?php echo $totalOtros; ?></span>
                    <span>otros</span>
                </div>
            </div>
        </main>

        <script src="../public/js/main.js"></script>
    </body>
</html>