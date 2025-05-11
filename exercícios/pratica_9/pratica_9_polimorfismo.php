<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 9 - Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Animais.php';

        $cachorro = new Cachorro(34.5, 8, 7, "Golden");
        print_r($cachorro);
        $cachorro->locomover();
        $cachorro->emitirSom();
        $cachorro->abanarRabo();
        $cachorro->enterrarOsso();

        //Todas as classes operam da mesma forma, herdando da classe mãe e alterando os métodos da forma necessária.
    ?>
    </pre>
</body>
</html>