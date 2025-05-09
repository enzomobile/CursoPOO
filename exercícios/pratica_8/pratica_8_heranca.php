<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 8 - Herança</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ClassePessoa.php';
        require_once 'ClasseFuncionario.php';
        require_once 'ClasseProfessor.php';
        require_once 'ClasseAluno.php';

        $p[0] = new Pessoa("Pedro", 20, "Masculino");
        $p[1] = new Funcionario("Maria", 30, "Feminino", "RH", true);
        $p[2] = new Professor("João", 40, "Masculino", "Matemática", 2000);
        $p[3] = new Aluno("Ana", 22, "Feminino", 12345, "Engenharia");

        print_r($p[01]);
        $p[3]->setCurso("Informátca");
        print_r($p[3]);
    ?>
    </pre>
</body>
</html>