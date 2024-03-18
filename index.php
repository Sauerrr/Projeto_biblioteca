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
    <link rel="stylesheet" href="css/style.css">
    <title>Conexão de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<header>
    <div class="logo">
        Seja bem-vindo a Biblioteca: Conexão de Livros!
    </div>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Emprestimos</a></li>
            <li><a class="dropdown-item" href="#">Funcionários</a></li>
            <li><a class="dropdown-item" href="#">Autores</a></li>
            <li><a class="dropdown-item" href="#">Livros</a></li>
            <li><a class="dropdown-item" href="#">Clientes</a></li>
        </ul>
    </div>
</header>

<body>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>