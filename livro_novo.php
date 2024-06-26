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
    <title>NOVO LIVRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Livro > Novo</h1>
        <br>
        <div id="botaonovo">
            <a href="livro_listagem.php" class="btn btn-info">Voltar</a>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">

                <form action="livro_novo_post.php" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label" id="titulo">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo do livro" required>

                        <label for="ano" class="form-label" id="ano">Ano de lançamento</label>
                        <input type="number" name="ano" class="form-control" id="ano" placeholder="Ano" required>

                        <label for="genero" class="form-label" id="genero">Genero</label>
                        <input type="text" name="genero" class="form-control" id="genero" placeholder="Genero" required>

                        <label for="isbn" class="form-label" id="isbn">ISBN</label>
                        <input type="text" name="isbn" class="form-control" id="isbn" placeholder="0000000000000" required> 

                        <br>
                        
                        <label for="autor" class="form-label">Autor</label>
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