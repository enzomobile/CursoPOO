<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 07</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ClassePessoa.php';
        require_once 'ClasseLivro.php';

        $p[0] = new Pessoa("Jean", 18, "H");
        $p[1] = new Pessoa("Iuri", 7, "F");
        $p[2] = new Pessoa("Miguel", 17, "F");

        $l[0] = new Livro("Aventuras de José", "José", 200, $p[0]);
        $l[1] = new Livro("Jorge, o Brabo", "Jorge", 250, $p[1]);
        $l[2] = new Livro("Os contos do Camelo", "Jean", 400, $p[2]);

        $l[0]->abrir();
        $l[0]->folhear(130);
        $l[0]->detalhes();

        $l[1]->abrir();
        $l[1]->folhear(220);
        $l[1]->detalhes();
    ?>
    </pre>
</body>
</html>