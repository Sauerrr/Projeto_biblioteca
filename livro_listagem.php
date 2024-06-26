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
    <title>NOVO LIVRO</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Livros > Listagem</h1>
        <div id="botao">
            <a href="livro_novo.php" class="btn btn-info">Adicionar Livro</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <th>ID</th>
                    <th>Título</th>
                    <th>Ano de lançamento</th>
                    <th>Genero</th>
                    <th>ISBN</th>
                    <th>Id Autor</th>
                    <th>Ações</th>

                </thead>
                <tbody>

                    <?php
                    foreach (LivroRepository::listAll() as $livro) {
                    ?>
                    

                        <tr>
                            <td><?php echo $livro->getId(); ?></td>
                            <td><?php echo $livro->getTitulo(); ?> </td>
                            <td><?php echo $livro->getAno(); ?> </td>
                            <td><?php echo $livro->getGenero(); ?> </td>
                            <td><?php echo $livro->getIsbn(); ?> </td>
                            <td><?php echo $livro->getAutorId();?></td>


                            <td>
                            <a href="livro_editar.php?id=<?php echo $livro->getId(); ?>" class="btn btn-info">Editar</a>
                            <?php if(EmprestimoRepository::countByLivro($livro->getId()) == 0){ ?>
                            <a href="livro_excluir.php?id=<?php echo $livro->getId();?>" class="btn btn-danger">Deletar</a>
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