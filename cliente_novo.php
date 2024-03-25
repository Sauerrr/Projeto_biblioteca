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
    <title>NOVO AUTOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Cliente > Novo</h1>
        <br>
        <div id="botaonovo">
            <a href="cliente_listagem.php" class="btn btn-info">Voltar</a>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">

                <form action="cliente_novo_post.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label" id="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome">

                        <label for="telefone" class="form-label" id="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" id="telefone">

                        <label for="email" class="form-label" id="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">

                        <label for="cpf" class="form-label" id="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf">

                        <label for="rg" class="form-label" id="rg">RG</label>
                        <input type="text" name="rg" class="form-control" id="rg">

                        <label for="data_nascimento" class="form-label" id="data_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control" id="data_nascimento">


                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>