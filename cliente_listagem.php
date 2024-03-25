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
    <title>NOVO CLIENTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Clientes > Listagem</h1>
        <div id="botao">
            <a href="cliente_novo.php" class="btn btn-info">Adicionar Cliente</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>

                </thead>
                <tbody>

                    <?php
                    foreach (ClienteRepository::listAll() as $cliente) {
                    ?>

                        <tr>
                            <td><?php echo $cliente->getId(); ?></td>
                            <td><?php echo $cliente->getNome(); ?> </td>
                            <td><?php echo $cliente->getTelefone(); ?> </td>
                            <td><?php echo $cliente->getEmail(); ?> </td>
                            <td><?php echo $cliente->getCpf(); ?> </td>
                            <td><?php echo $cliente->getRg(); ?> </td>
                            <td><?php echo $cliente->getDataNascimento(); ?> </td>



                            <td>
                                <a href="cliente_editar.php?id=<?php echo $cliente->getId(); ?>" class="btn btn-info">Editar</a>
                                <a href="#" class="btn btn-danger">Deletar</a>

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