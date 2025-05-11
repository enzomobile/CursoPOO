<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 10</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ClasseVideo.php';
        require_once 'ClasseGafanhoto.php';
        require_once 'ClasseVisualizacao.php';

        $p[0] = new Gafanhoto("Jorge", 22, "M", "jorginho");
        $p[1] = new Gafanhoto("Ana", 25, "F", "aninha");
        $p[2] = new Gafanhoto("Carlos", 30, "M", "carlito");

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 2 de POO");
        $v[2] = new Video("Aula 3 de POO");

        $vis[0] = new Visualizacao($p[0], $v[0]);
        $vis[1] = new Visualizacao($p[1], $v[0]);
        $vis[2] = new Visualizacao($p[2], $v[0]);

        $vis[0]->avaliar();
        $vis[1]->avaliarNota(9);
        $vis[2]->avaliarPorc(85);

        print_r($v[0])
    ?>
    </pre>
</body>
</html>