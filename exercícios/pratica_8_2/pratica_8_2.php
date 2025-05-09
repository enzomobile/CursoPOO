<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 8pt2 - Herança</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ClasseVisit.php';
        require_once 'ClasseAluno.php';
        require_once 'ClasseBolsista.php';

        $v = new Visitante("Lucas", 22, "M");
        print_r($v);
        $a = new Aluno("Jean", 23, "M", 123, "Informática");
        $a->pagarMensalidade();
        print_r($a);
        $b = new Bolsista("Denner", 17, "M", 124, "Informática", 100);
        $b->pagarMensalidade();
        $b->renovarBolsa();

    ?>
    </pre>
</body>
</html>