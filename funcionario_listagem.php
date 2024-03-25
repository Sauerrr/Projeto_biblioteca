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
    <title>NOVO FUNCIONARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Funcionários > Listagem</h1>
        <div id="botao">
            <a href="funcionario_novo.php" class="btn btn-info">Adicionar Funcionário</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>EMAIL</th>
                    <th>Ações</th>

                </thead>
                <tbody>

                    <?php
                    foreach (FuncionarioRepository::listAll() as $funcionario) {
                    ?>

                        <tr>
                            <td><?php echo $funcionario->getId(); ?></td>
                            <td><?php echo $funcionario->getNome(); ?> </td>
                            <td><?php echo $funcionario->getCpf(); ?> </td>
                            <td><?php echo $funcionario->getTelefone(); ?> </td>
                            <td><?php echo $funcionario->getEmail(); ?> </td>


                            <td>
                            <a href="funcionario_editar.php?id=<?php echo $funcionario->getId(); ?>" class="btn btn-info">Editar</a>
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