<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once "ClasseContaBanc.php";

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("Corrente");
        $p1->setNumConta(1);
        $p1->setDono("Enzo");

        $p2->abrirConta("Poupança");
        $p2->setNumConta(2);
        $p2->setDono("Jorge");

        print_r($p1);
        print_r($p2);

        $p1->Depositar(300);
        $p2->Depositar(500);

        $p2->Sacar(100);

        $p1->PagarMensalidade();
        $p2->PagarMensalidade();

        $p1->Sacar(338);
        $p2->Sacar(530);

        $p1->FecharConta();
        $p2->FecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>