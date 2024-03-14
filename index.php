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
</head>

<header>
    <div class="logo">
        Seja bem-vindo a Biblioteca: Conexão de Livros!
    </div>
    <ul>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Funcionarios</a></li>
        <li><a href="#">Autores</a></li>
        <li><a href="#">Livros</a></li>
        <li><a href="#">Emprestimos</a></li>

        <button><a href="logout.php">Sair</a></button>
    </ul>
</header>

<body>



</body>

</html>