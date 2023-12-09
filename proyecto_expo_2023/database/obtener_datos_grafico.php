<?php
    include('../database/bd.php');

    $sql = "SELECT hora,SUM(cantidad_personas) AS total_personas
            FROM (SELECT tiempo AS hora,SUM(cant_alumnos + cant_docentes) AS cantidad_personas
                FROM instituciones GROUP BY hora UNION ALL
                SELECT tiempo AS hora,COUNT(*) AS cantidad_personas
                FROM personas GROUP BY hora
            ) AS todas_las_visitas_con_cantidad_personas GROUP BY hora;";
    
    $result = $conn->query($sql);
    
    // Crear un arreglo con los datos obtenidos de la base de datos
    $datos = array();
    while ($fila = $result->fetch_assoc()) {
        $datos['hora'][] = $fila['hora'];
        $datos['total_personas'][] = $fila['total_personas'];
    }
    
    // Rellenar el arreglo con ceros para las horas que no tienen visitas
    for ($i = 0; $i <= 23; $i++) {
        if (!in_array($i, $datos['hora'])) {
            $datos['hora'][] = $i; 
            $datos['cantidad_personas'][] = 0;
        }
    }

    $nuevahoras = array('horas' => 3,'cantidad_personas' =>2); 
    // array_multisort($datos['hora'], $datos['total_personas']);
    echo json_encode($nuevahoras);
    
    $conn->close();
    
?>
<script>
    // Mostrar los datos en la consola del navegador
    var datos = <?php echo json_encode($nuevahoras); ?>;
    console.log(nuevahoras);
</script>