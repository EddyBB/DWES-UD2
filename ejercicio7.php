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

        $n1 = 8;
        $n2 = 3;

        printf("El valor en binario del n1 es: %b", $n1);
        echo"<br>";
        printf("El valor en binario del n2 es: %b", $n2);
        echo"<br>";
        printf("El resultado de la operación de comparación bit a bit AND es: %b", $n1 & $n2);
        echo"<br>";
        printf("El resultado de la operación de comparación bit a bit OR es: %b", $n1 | $n2);
        echo"<br>";
        printf("El resultado de la operación de comparación bit a bit Not n1 es: %b", ~$n1);
        echo"<br>";
        printf("El resultado de la operación de comparación bit a bit Not n2 es: %b", ~$n2);
        echo"<br>";
        printf("El resultado de la operación de comparación bit a bit Xor es: %b", $n1 ^ $n2);
    ?>
</body>
</html>