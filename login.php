<?php
include_once("include/factory.php");

if(Auth::isAutenticated()){
    header("location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <title>Login Biblioteca</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="logar.php">
                    <h2>Login Biblioteca</h2>
                    <div class="inputbox">
                        <icon-icon name="mail-outline"></icon-icon>
                        <input name="cpf" type="text" required>
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="inputbox">
                        <icon-icon name="lock-closed-outline"></icon-icon>
                        <input name="senha" type="password" required>
                        <label for="senha">Senha</label>
                    </div>
                    

                    <button>Entrar</button>
                </form>

            </div>

        </div>
    </section>
</body>

</html>