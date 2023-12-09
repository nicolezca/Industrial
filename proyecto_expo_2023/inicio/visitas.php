<?php
include('../database/bd.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" href="estilos/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registo Visitas</title>
</head>

<body>
    <?php include('cabecera.php'); ?>

    <main class="contenido">
        <div class="banner_form">
            <img src="../img/logo_escuela.png" alt="">
            <h2 class="name">Escuela Tecnica n°1</h2>
            <h2 class="name">chascomus</h2>
        </div>
        <form method="post" action="subida/subir_visita.php" id="form_visita" class="form_insti">
            <div class="titulo">
                <h2>Registro de Visitas</h2>
            </div>
            <div class="entrada_datos">
                <div class="box">
                    <span>nombre completo:</span>
                    <input type="text" name="nombre_completo" id="nombre_completo" require autocomplete="off">
                </div>
                <div class="box">
                    <span>edad:</span>
                    <input type="text" name="edad" id="edad" require autocomplete="off">>
                </div>
                <div class="box">
                    <span>tipo de visita:</span>
                    <div class="box_tipo">
                        <div class="caja">
                            <input type="radio" name="tipo_visita" value="alumno" id="alumno">
                            <label for="alumno">alumno</label>
                        </div>
                        <div class="caja">
                            <input type="radio" name="tipo_visita" value="ex_alumno" id="ex_alumno">
                            <label for="ex_alumno">ex-alumno</label>
                        </div>
                        <div class="caja">
                            <input type="radio" name="tipo_visita" value="profesor" id="profesor">
                            <label for="profesor">profesor</label>
                        </div>
                        <div class="caja">
                            <input type="radio" name="tipo_visita" value="directivo" id="directivo">
                            <label for="directivo">directivo</label>
                        </div>
                        <div class="caja">
                            <input type="radio" name="tipo_visita" value="otro" id="otro">
                            <label for="otro">otro</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="boton_envio">
                <input type="submit" value="cargar">
            </div>
        </form>
    </main>

    <script src="main.js"></script>
</body>

</html>