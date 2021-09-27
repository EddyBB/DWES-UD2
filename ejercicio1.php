<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        $nombre = "Eddy Alejandro Gonźalez Chávez";
        $ciudad = "Sevilla";
        $edad = 27;
        echo"Soy $nombre, tengo $edad años y vivo en $ciudad";
        print"<p>";
        printf("Soy %s, tengo %s años y vivo en %s", $nombre, $edad, $ciudad);
    ?>
</body>
</html>