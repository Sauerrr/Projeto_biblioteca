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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Biblioteca "Conexão de Livros"</title>

</head>
<body>
<header>

    <?php include("include/menu.php"); ?>

</header>
<div class="container">
            <br>
            <a href="autor_listagem.php" class="btn btn-light">Autor</a>
            <br>
            <a href="logout.php" class="btn btn-light">Emprestimos</a>
            <br>
            <a href="funcionario_listagem.php" class="btn btn-light">Funcionarios</a>
            <br>
            <a href="livro_listagem.php" class="btn btn-light">Livros</a>
            <br>
            <a href="cliente_listagem.php" class="btn btn-light">Clientes</a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>