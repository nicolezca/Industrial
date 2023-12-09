<?php
include('../database/bd.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registo Visitas</title>
</head>

<body>
    <?php include('cabecera.php'); ?>

    <main class="contenido">
        <div class="banner_form">
            <img src="../public/assets/logo_escuela.png" alt="Logo Industrial" title="Logo Industrial" >
            <h2 class="name">Escuela Tecnica n°1</h2>
            <h2 class="name">chascomus</h2>
        </div>
        <form method="post" action="../database/data/subir_visita.php" id="form_visita" class="form_insti">
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
                        <select name="tipo_visita" id="tipo_visita">
                            <option value="alumno">alumno</option>
                            <option value="ex-alumno">ex-alumno</option>
                            <option value="profesor">profesor</option>
                            <option value="directivo">directivo</option>
                            <option value="otro">otro</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="boton_envio">
                <input type="submit" value="cargar">
            </div>
        </form>
    </main>

    <script src="../public/js/main.js"></script>
</body>

</html>