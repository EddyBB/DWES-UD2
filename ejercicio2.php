<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <?php
        $base = 2;
        $altura = 5;
        $radio = 3;
        $diagonalMayor = 12;
        $diagonalMenor = 6;

        $triangulo = ($base*$altura)/2;
        $cuadrado = ($base*$altura);
        $rombo = ($diagonalMayor*$diagonalMenor)/2;
        define("PI",3.1415);
        $circulo = PI * $radio * $radio;

        echo "El área de un triangulo es: base: $base x  altura: $altura entre 2 = $triangulo";
        echo"<br>";
        echo "El área de un cuadrado es: base: $base x altura: $altura = $cuadrado";
        echo"<br>";
        echo "La diagonal de un rombo es: Diagonal Mayor: $diagonalMayor x Diagonal Menor: $diagonalMenor  = $rombo";
        echo"<br>";
        print "El área de un circulo es: $circulo" ;
    ?>
</body>
</html>