<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <?php
        $precioPantalon = 29.99;
        $numPantalones = 3;
        $precioCamisa = 25.99;
        $numCamisas = 2;

        $precioZapatos = 45.99;
        $descuentoEspecialZap = 12;

        define("Descuento",8);

        $totalPrecioPantalon = $precioPantalon * $numPantalones;
        $totalPrecioCamisa = $precioCamisa * $numCamisas;
        $precioTotal = $totalPrecioPantalon + $totalPrecioCamisa;
        $totalConDescuento = $precioTotal - $precioTotal * Descuento / 100;
        $totalConDescuento = round($totalConDescuento,2);
        
        $precioZapCon += $precioZapatos - ($precioZapatos*($descuentoEspecialZap/100));
        $precioTotalZap = $precioZapCon + $totalConDescuento;


        echo "El precio de un patalón es de: $precioPantalon";
        echo"<br>";
        echo "El precio de una camisa es de: $precioCamisa";
        echo"<br>";
        echo "El total sin descuento es: $precioTotal";
        echo"<br>";
        echo "El total con descuento es: $totalConDescuento";
        echo"<p>";
        echo "El precio de los zapatos sin descuento es: $precioZapatos";
        echo"<br>";
        printf("El precio de los zapatos con descuentos es: %.2f", $precioZapCon);
        echo"<br>";
        printf("El total de la cuenta es: %.2f", $precioTotalZap);

    ?>
</body>
</html>