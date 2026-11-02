<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico</title>
</head>
<body>
    <?php
        //Escalares
        //string
        $name = 'Wesley Anjos';
        var_dump($name. '<br>');
        if (is_string($name)) {
            echo 'É uma string<br>';
        } else {
            echo 'Não é uma string<br>';
        }
        
        //int 
        $age = 29;
        var_dump($age. '<br>');
        if (is_int($age)) {
            echo 'É um int<br>';
        } else {
            echo 'Não é um int<br>';
        }
        
        //float
        $height = 1.70;
        var_dump($height. '<br>');
        if (is_float($height)) {
            echo 'É um float<br>';
        } else {
            echo 'Não é um float<br>';
        }
        
        //boolean
        $admin = true;
        var_dump($admin. '<br>');
        if (is_bool($admin)) {
            echo 'É um boolean<br>';
        } else {
            echo 'Não é um boolean<br>';
        }

        //Compostos
        //array
        $cars = ['Gol', 'Uno', 'Camaro'];
        var_dump($cars. '<br>');
        if (is_array($cars)) {
            echo 'É um array<br>';
        } else {
            echo 'Não é um array<br>';
        }
        
        //object
        class Client {
            public $name;
            
            public function attrName($name) {
                $this->$name = $name;
            }
        }

        $client = new Client();
        $client->attrName('Wesley');
        var_dump($client);
        if (is_object($client)) {
            echo 'É um objeto<br>';
        } else {
            echo 'Não é um objeto<br>';
        }
        
        //Especial
        //null
        $city = null;
        var_dump($city);
        if (is_null($city)) {
            echo 'É um null<br>';
        } else {
            echo 'Não é um null<br>';
        }
    ?>
</body>
</html>