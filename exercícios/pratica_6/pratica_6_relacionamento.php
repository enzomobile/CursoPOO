<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 06 - Relacionamento</title>
</head>
<body>
    <pre>
    <?php
        require_once "ClasseLutador.php";
        require_once "ClasseLuta.php";
        $L[0] = new Lutador("Wellington", "Brasil", 32, 1.89, 83.0, 4, 1, 2);
        $L[1] = new Lutador("Thomas", "Alemanha", 35, 1.70, 67.0, 7, 3, 1);
        $L[2] = new Lutador("Miguel", "Angola", 58, 1.67, 57.0, 10, 4, 0);
        $L[3] = new Lutador("Jean", "Egito", 23, 1.92, 89.0, 9, 2, 3);
        $L[4] = new Lutador("Iuri", "Russia", 20, 2.05, 120.0, 12, 1, 0);
        $L[5] = new Lutador("Denner", "Paraguai", 40, 1.64, 68.0, 6, 5, 3);

        /*
        $L[0]->status();
        $L[0]->apresentar();
        $L[1]->status();
        $L[2]->status();
        $L[3]->status();
        $L[4]->status();
        $L[5]->status();
        */

        $UEC01 = new Luta;
        $UEC01->marcarLuta($L[5], $L[2]);
        $UEC01->lutar();

        $L[5]->status();
        $L[2]->status();
    ?>
    </pre>
</body>
</html>