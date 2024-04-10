<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

if (!isset($_GET["id"])) {
    header("location: livro_listagem.php");
    exit();
}

if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: livro_listagem.php");
    exit();
}

$livro = LivroRepository::get($_GET["id"]);

if (!$livro) {
    header("location: livro_listagem.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>EDITAR - LIVRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Livro > Editar</h1>
        <br>
        <div id="botaonovo">
            <a href="livro_listagem.php" class="btn btn-info">Voltar</a>
            <a href="livro_novo.php" class="btn btn-info">Novo</a>

        </div>

        <div class="row mt-4">
            <div class="col-md-10">

                <form action="livro_editar_post.php" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label" id="titulo">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" required value="<?php echo $livro->getTitulo(); ?>">

                        <label for="ano" class="form-label" id="ano">Ano de lançamento</label>
                        <input type="number" name="ano" class="form-control" id="ano"  required value="<?php echo $livro->getAno(); ?>">


                        <label for="genero" class="form-label" id="genero">Genero</label>
                        <input type="text" name="genero" class="form-control" id="genero" required value="<?php echo $livro->getGenero(); ?>">

                        <label for="isbn" class="form-label" id="isbn">ISBN</label>
                        <input type="text" name="isbn" class="form-control" id="isbn" required value="<?php echo $livro->getIsbn(); ?>">

                        <br>


                        <label for="autor" class="form-label">Autor:</label>
                        <select name="autor" id="autor">
                            <?php
                            foreach (AutorRepository::listAll() as $autor) {
                            ?>
                                <option value="<?php echo $autor->getId(); ?>">
                                    <?php echo $autor->getNome() ?>
                                </option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $livro->getId(); ?>">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>