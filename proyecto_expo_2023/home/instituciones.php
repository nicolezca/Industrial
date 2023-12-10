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
    <title>Registo Intituciones</title>
</head>

<body>
    <?php include('../components/cabecera.php'); ?>

    <main class="contenido">
        <div class="banner_form">
            <img src="../img/logo_escuela.png" alt="Logo Industrial" title="Logo Industrial">
            <h2 class="name">Escuela Tecnica n°1</h2>
            <h2 class="name">chascomus</h2>
        </div>
        <form method="post" action="../database/data/subir_institucion.php" id="form_insti" class="form_insti">
            <div class="titulo">
                <h2>Registro de Instituciones</h2>
            </div>
            <div class="entrada_datos">
                <div class="box">
                    <span>nombre institucion:</span>
                    <input type="text" name="nombre_institucion" id="nombre_institucion" require autocomplete="off">
                </div>
                <div class="box">
                    <span>curso:</span>
                    <input type="text" name="curso" id="curso" require autocomplete="off">
                </div>
                <div class="box">
                    <span>cantidad de alumnos:</span>
                    <input type="number" name="cantidad_alumnos" id="cantidad_alumnos" require autocomplete="off">
                </div>
                <div class="box">
                    <span>cantidad de docentes:</span>
                    <input type="number" name="cantidad_docentes" id="cantidad_docentes" require autocomplete="off">
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