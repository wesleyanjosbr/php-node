<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico</title>
</head>
<body>
    <?php
        $name = 'Wesley Anjos';
        $a = 1; 
        $b = 3; 
        $c = 7;

        function showName() {
            global $name;
            echo $name;
        }

        showName();
        echo '<hr>';

        function city() {
            global $city;
            $city = 'São Paulo';
        }

        city();
        echo $city. '<br>';
        echo '<hr>';

        function plus() {
            echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
        }

        plus();
    ?>
</body>
</html>