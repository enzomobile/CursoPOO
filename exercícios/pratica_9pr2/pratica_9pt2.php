<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 9pt2 - Polimorfismo</title>
</head>
<body>
    <?php
        require_once 'Classes.php';
        $c = new Cachorro (10, 5, 4, "Preto");
        $c->emitirSom();
        $c->reagirFrase("AAA");
    ?>
</body>
</html>