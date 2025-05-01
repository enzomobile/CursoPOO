<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Visibilidade</title>
</head>
<body>
    <pre>
    <?php
        require_once "ClasseCaneta.php";
        $c3 = new Caneta;
        $c3->modelo = "Bic Cristal";
        $c3->cor = "Azul";
        //$c3->ponta = 0.5;
        //$c3->carga = 100;
        //$c3->tampada = true;
        print_r($c3);
        $c3->tampar();
        var_dump($c3);
        $c3->rabiscar();
    ?>
    </pre>
</body>
</html>