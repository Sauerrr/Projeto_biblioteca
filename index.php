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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Conexão de Livros</title>

</head>

<body>
    <header>

        <?php include("include/menu.php"); ?>

    </header>
    
    <div class="imgcenter">
        <img src="imagens/imgcentro.png" alt="imagem central">

    </div>

    <footer>
         <p class="copyright"> &copy; Copyright Conexão de Livros - 2024
		Vitor Sauer - Curso SISMETRO
	</p>
</footer>


</body>


</html>