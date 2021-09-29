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

        $numOpD = "2";
        $numOpS = 1;
        define("MaxOpD", 6);
        define("MaxOpS", 30);

        echo "El valor de operaciones diarias: $numOpD, es mayor igual que el máximo: $maxOpD, es: ", var_export($numOpD >= $maxOpD);
        echo"<br>";
        echo "El valor de operaciones semanales: $numOpS, es mayor igual que el máximo: $maxOpS, es: ", var_export($numOpS >= $maxOpS);
        echo"<br>";
        echo"El valor de operaciones diarias: $numOpD, es idéntico al de las operaciones semanales: $maxOpD, es: ", var_export($numOpD === $maxOpS);
        echo"<br>";
        echo "El valor de operaciones diarias: $numOpD, es distinto al de operaciones semanales: $numOpS, es: ", var_export($numOpD != $numOpS);
    ?>
</body>
</html>