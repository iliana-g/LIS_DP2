<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1> ACADEMIA MIRANDA</h1>
<?php
function cargarDatos(){
    return [
        'Inglés' => ['Básico' => 25, 'Intermedio' => 15, 'Avanzado' => 10],
        'Francés' => ['Básico' => 10, 'Intermedio' => 5, 'Avanzado' => 2],
        'Mandarín' => ['Básico' => 8, 'Intermedio' => 4, 'Avanzado' => 1],
        'Ruso' => ['Básico' => 12, 'Intermedio' => 8, 'Avanzado' => 4],
        'Portugués' => ['Básico' => 30, 'Intermedio' => 15, 'Avanzado' => 10],
        'Japonés' => ['Básico' => 90, 'Intermedio' => 25, 'Avanzado' => 67],
    ];
}

function mostrarDatos($datos){
    echo "<div class='row mb-4'>";
    foreach ($datos as $idioma => $niveles) {
        echo "<div class='col-md-4  py-3'>";
        echo "<div class='card shadow-sm'>";
        echo "<div class='card-header text-center bg-primary text-white fw-bold'>$idioma</div>";
        echo "<div class='card-body p-0'>";
        echo "<table class='table table-bordered mb-0'>";

        foreach ($niveles as $nivel => $cantidad) {
            if ($nivel === 'Básico') { //Asignando color a cada fila según su nivel
                $colorfila = 'table-success';
            } elseif ($nivel === 'Intermedio') {
                $colorfila = '#table-warning';
            } elseif ($nivel === 'Avanzado') {
                $colorfila = 'table-danger';
            } else {
                $colorfila = '#FFFFFF';
            }
            echo "<tr class='$colorfila'>
            <td><b>$nivel<b></td>
            <td>$cantidad</td>
            </tr>";
}

echo "</table></div></div></div>";
}

echo "</div></div>";
    }


$datos = cargarDatos();
mostrarDatos($datos);
?>

</div>
</body>

</html>
