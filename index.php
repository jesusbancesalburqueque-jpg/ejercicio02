<?php
$tiene_error = isset($_GET["error"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de notas</title>
</head>
<body>
    <h1>Registro de notas de un estudiante</h1>

    <form action="proceso_form.php" method="POST">
        <label for="estudiante">Nombre del Estudiante:</label>
        <input type="text" name="txtEstudiante" id="estudiante" required>
        <br>
        <br>

        <label for="nota1">Nota 1:</label>
        <input type="number" name="txtNota1" id="nota1" min="0" max="20" step="0.1" required>
        <br>
        <br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="txtNota2" id="nota2" min="0" max="20" step="0.1" required>
        <br>
        <br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="txtNota3" id="nota3" min="0" max="20" step="0.1" required>
        <br>
        <br>
        
        <label for="nota4">Nota 4:</label>
        <input type="number" name="txtNota4" id="nota4" min="0" max="20" step="0.1" required>
        <br>
        <br>

        <input type="submit" value="Promedio">
        <br>
        <br>
    </form>

    <?php if ($tiene_error): ?>
        <small style="color: red;">Error. Las notas deben estar entre 0 y 20.</small>
    <?php endif; ?>
</body>
</html>