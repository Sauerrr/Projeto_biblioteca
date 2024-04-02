<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>NOVO EMPRESTIMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Empréstimos > Listagem</h1>
        <div id="botao">
            <a href="emprestimo_novo.php" class="btn btn-info">Adicionar empréstimo</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <th>ID</th>
                    <th>Livro</th>
                    <th>Cliente</th>
                    <th>Data Vencimento</th>
                    <th>Data de Devolução</th>
                    <th>Ações</th>

                </thead>
                <tbody>

                    <?php
                    foreach (EmprestimoRepository::listAll() as $emprestimo) {
                    ?>

                        <tr>
                            <td><?php echo $emprestimo->getId(); ?></td>

                            <td>
                                <?php $livro = LivroRepository::get($emprestimo->getLivroId());
                                echo $emprestimo->getLivroId() . " - " . $livro->getTitulo(); ?>

                            </td>

                            <td><?php $cliente = ClienteRepository::get($emprestimo->getClienteId());
                                echo $emprestimo->getClienteId() . " - " . $cliente->getNome(); ?>
                            </td>
                            
                            <td><?php echo $emprestimo->getDataVencimento("d/m/Y"); ?> </td>
                            <td><?php echo $emprestimo->getDataDevolucao(); ?> </td>

                            <td>
                                <?php
                                if(
                                    $emprestimo->getDataRenovacao() == null &&
                                    $emprestimo->getDataDevolucao() == null &&
                                    $emprestimo->getDataAlteracao() == null
                                ){

                                ?>

                                <a href="emprestimo_excluir.php?id=<?php echo $emprestimo->getId();?>" class="btn btn-danger">Deletar</a>
                                <?php } ?>


                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>