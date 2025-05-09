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
        require_once 'ClassePessoaAbs.php';
        require_once 'ClasseVisit.php';

        $v = new Visitante("Lucas", 22, "M");
        print_r($v);
    ?>
    </pre>
</body>
</html>