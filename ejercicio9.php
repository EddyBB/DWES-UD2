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
        print "<p>\$_SERVER[PHP_SELF]: $_SERVER[PHP_SELF]</p>\n";
        print "$_SERVER[SERVER_NAME]";
        echo"<br>";
        print "$_SERVER[DOCUMENT_ROOT]";
        echo"<br>";
        print "$_SERVER[REMOTE_ADDR]";
        echo"<br>";
        print "$_SERVER[REQUEST_METHOD]";
        echo"<br>";

        $c = "global";
        function prueba(){

            $a = "local";
            static $b = 1;
            global $c;

            echo $a;
            echo"<br>";
            echo $b;
            echo"<br>";
            echo $c;
            echo"<br>";


        }

        prueba();

        echo $a;
        echo"<br>";
        echo $b;
        echo"<br>";
        echo $c;
    ?>
</body>
</html>