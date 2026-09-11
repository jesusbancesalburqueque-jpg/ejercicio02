<?php

$estudiante = $_POST["txtEstudiante"];
$nota1 = (float) $_POST["txtNota1"];
$nota2 = (float) $_POST["txtNota2"];
$nota3 = (float) $_POST["txtNota3"];
$nota4 = (float) $_POST["txtNota4"];

$notas = [
    $nota1,
    $nota2,
    $nota3,
    $nota4

];

// $promedio = array_sum($notas)/4;
$suma = 0;
$contador = 0;
foreach ($notas as $not) {
    if ($not < 0 || $not > 20) {
        header("Location: index.php?error=1");
        exit;
    }
    $suma += $not;
    $contador++;
}

$promedio = $suma / $contador;

$situacion = "";
if ($promedio < 11) {
    $situacion = "Desaprobado";
} elseif ($promedio <= 13) {
    $situacion = "Regular";
} elseif ($promedio <= 17) {
    $situacion = "Bueno";
} else {
    $situacion = "Excelente";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h1>Notas</h1>

    <p><strong>Estudiante: </strong><?php echo $estudiante ?></p>
    <p><strong>Notas:</strong></p>
    <ul>
        <?php
            foreach($notas as $not) {
                echo "<li>$not</li>";
            }
        ?>
    </ul>
    <p><strong>Promedio: </strong><?php echo number_format($promedio,2) ?></p>
    <p><strong>Situación Académica: </strong><?php echo $situacion ?></p>
</body>
</html>