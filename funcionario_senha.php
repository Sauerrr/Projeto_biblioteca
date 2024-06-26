<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

if (!isset($_GET["id"])) {
    header("location: funcionario_listagem.php");
    exit();
}

if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: funcionario_listagem.php");
    exit();
}

$funcionario = FuncionarioRepository::get($_GET["id"]);

if (!$funcionario) {
    header("location: funcionario_listagem.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>EDITAR SENHA - FUNCIONARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Funcionario senha > Editar</h1>
        <br>
        <div id="botaonovo">
            <a href="funcionario_listagem.php" class="btn btn-info">Voltar</a>
           

        </div>

        <div class="row mt-4">
            <div class="col-md-7">

                <form action="funcionario_senha_post.php" method="POST">
                    <div class="mb-3">

                        <label for="senha" class="form-label" id="senha">Digite a nova senha</label>
                        <input type="text" name="senha" class="form-control" id="senha" placeholder="Digite uma nova senha" required>

                        <br>

                        <label for="repSenha" class="form-label" id="repSenha">Confirmar senha</label>
                        <input type="text" name="repSenha" class="form-control" id="repSenha" placeholder="Confirmar senha" required>

                        
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $funcionario->getId();?>" >
                        <button type="submit" class="btn btn-success">Alterar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>