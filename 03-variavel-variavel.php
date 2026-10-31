<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico</title>
</head>
<body>
    <?php
        $drink = 'refrigerante';
        $$drink = 'Guaraná';
        echo $drink. '<br>';
        echo $$drink. '<br>';

        $city = 'cidade';
        $$city = 'Ilhéus';
        echo $city. '<br>';
        echo $$city. '<br>';
    ?>
</body>
</html>