<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php
    $nombre = $GET_['nombre'];
    $apellido =$GET_['apellido'];
    echo 'Hola ' . $nombre . ' ' . $apellido;
    ?>
</body>
</html>