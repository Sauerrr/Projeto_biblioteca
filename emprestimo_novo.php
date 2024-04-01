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
        <h1>Emprestimo > Novo</h1>
        <br>
        <div id="botaonovo">
            <a href="emprestimo_listagem.php" class="btn btn-info">Voltar</a>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">

                <form action="emprestimo_novo_post.php" method="POST">
                    <div class="mb-3">
                        <label for="livro_id" class="form-label">Livro:</label>
                        <select name="livro_id" id="livro_id">
                            <?php
                            foreach (LivroRepository::listAll() as $livro) {
                            ?>
                                <option value="<?php echo $livro->getTitulo(); ?>">
                                    <?php echo $livro->getTitulo() ?>
                                </option>
                            <?php } ?>
                        </select>

                        <br>
                        

                        <label for="cliente" class="form-label">Cliente:</label>
                        <select name="cliente" id="cliente">
                            <?php
                            foreach (ClienteRepository::listAll() as $cliente) {
                            ?>
                                <option value="<?php echo $cliente->getNome(); ?>">
                                    <?php echo $cliente->getNome() ?>
                                </option>
                            <?php } ?>
                        </select>

                        <br>

                        <label for="data_vencimento" class="form-label" id="data_vencimento">Data de Vencimento</label>
                        <input type="date" name="data_vencimento" class="form-control" id="data_vencimento">


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