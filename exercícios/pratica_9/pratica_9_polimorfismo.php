<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 9 - Polimorfismo</title>
</head>
<body>
    <?php
        require_once 'ClasseAbsAnimal.php';
        require_once 'ClasseAve.php';
        require_once 'ClasseReptil.php';
        require_once 'ClassePeixe.php';
        require_once 'ClasseMamifero.php';

        $peixe = new Peixe (20, 2, 4, "Amarelo");
        print_r($peixe);
    ?>
</body>
</html>