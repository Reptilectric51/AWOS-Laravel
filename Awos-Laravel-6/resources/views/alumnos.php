<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
</head>
<body>
    <h1>Alumnos:</h1>

    
<ul>
<?php foreach ($alumno as $alumno);?>
<li><?php echo $alumno?> </li>
<?php endforeach; ?>
</ul>
</body>
</html>