<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Controle Remoto</h1>
    <pre>
    <?php
        require_once "ClasseControle.php";
        $c = new Controlador;
        $c->ligar();
        $c->volumeUp(60);
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>