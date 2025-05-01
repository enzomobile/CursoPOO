<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Métodos</title>
</head>
<body>
    <pre>
    <?php 
        require_once "ClasseCaneta.php";

        $c1 = new Caneta("BIC", "Azul", 0.7, 1);
        $c2 = new Caneta("Daora", "Preta", 0.5, 0);
        //echo "O modelo da caneta é {$c1->getModelo()}, tem ponta {$c1->getPonta()}, cor {$c1->getCor()} e está {$c1->getTampada()}";
        print_r($c1);
        print_r($c2);
        $c1->rabiscar();
        $c2->rabiscar();
    ?>
    </pre>
</body>
</html>