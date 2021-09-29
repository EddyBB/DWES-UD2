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
       $str = "Hola";
       echo $str;
       echo "<br>";
       echo gettype($str);
       echo "<br>";
       echo var_export(is_string($str));
       echo "<br>";
       echo var_export(is_scalar($str));
       echo "<br>";
       $str = 12.2;
       echo $str;
       echo"<br>";
       $int = (int)$str;
       echo $int;
       echo"<br>";
       $iStr = "6dofa4io7jasd";
       echo $iStr;
       $int2 = (int)$iStr;
       echo"<br>";
       echo $int2;
       
    ?>
</body>
</html>