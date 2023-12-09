<?php
include('../database/bd.php');
include('../database/contador.php');
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/styles.css">
        <script src="../chartjs/node_modules/chart.js/dist/chart.umd.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="./datos.js"></script>
        <title>home | Expo 2023</title>
        <script>
            // alert("bienvenido al registro de la escuela industrial");
        </script>
    </head>

    <body>
        <?php include('cabecera.php'); ?>
        <main class="contenido_principal">

            <div class="banner">
                <img src="../img/logo_escuela.png" alt="">
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

            <!-- grafico -->
            <div class="grafico">
                <canvas id="myChart" style="position:relative;height:50vh;width:100%;"></canvas>
                <script>
                    const ctx = document.getElementById('myChart');
                    // Realiza la solicitud para obtener los datos del servidor
                    fetch('../database/obtener_datos_grafico.php')    
                        .then(response => response.json())
                        
                        .then(data => {
                            const myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: data.hora,
                                    datasets: [{
                                        data: data.cantidad_personas,
                                        label: 'Cantidad de Personas',
                                        borderColor: 'blue', // Cambiar el color aquí
                                        borderWidth: 2
                                    }],
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                        print_r(response.json());
                </script>
            </div>
        </main>

        <script src="main.js"></script>
    </body>
</html>