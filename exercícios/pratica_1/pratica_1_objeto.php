<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Objeto</title>
</head>
<body>
    <?php 
        require_once "ClasseCaneta.php";

        $c1 = new Caneta;
        $c1->cor = "Vermelho";
        $c1->ponta = 0.5;
        $c1->modelo = "Bic Crital";
        $c1->tampada = false;
        $c1->tampar();

        $c2 = new Caneta;
        $c2->cor = "Azul";
        $c2->modelo = "Bic Plástico";
        $c2->ponta = 0.7;
        $c2->tampada = false;
        $c2->carga = 100;
        
        var_dump($c1);
        echo "<br><br>";
        print_r($c1);
        echo "<br><br>";
        var_dump($c2);
        echo "<br><br>";
        print_r($c2);
        echo "<br><br>";
        $c1->destampar();
        $c1->rabiscar();
        $c2->tampar();
        $c2->rabiscar();
    ?>
</body>
</html>