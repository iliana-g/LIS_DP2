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
    return 
    [[25,15,10], 
    [10,5,2], 
    [8,4,1],
    [12,8,4],
    [30,15,10],
    [90,25,67] 
    ];
}

function mostrarDatos($datos){
    $idiomas = ['Inglés','Francés','Mandarín','Ruso','Portugués','Japonés'];
    $niveles = ['Básico','Intermedio','Avanzado'];
    echo "<div class='row mb-4'>";
    foreach ($datos as $idioma => $niveles) {
        echo "<div class='col-md-4  py-3'>";
        echo "<div class='card shadow-sm'>";
        echo "<div class='card-header text-center bg-primary text-white fw-bold'>$idioma</div>";
        echo "<div class='card-body p-0'>";
        echo "<table class='table table-bordered mb-0'>";

        foreach ($niveles as $nivel => $cantidad) {
            if ($nivel === 0) { //Asignando color a cada fila según su nivel
                $colorfila = 'table-success';
            } elseif ($nivel === 1) {
                $colorfila = '#table-warning';
            } elseif ($nivel === 2) {
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
