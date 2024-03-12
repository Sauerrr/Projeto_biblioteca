<?php
include_once("include/factory.php");

if(Auth::isAutenticated()){
    header("location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Biblioteca</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login Biblioteca</h2>
                    <div class="inputbox">
                        <icon-icon name="mail-outline"></icon-icon>
                        <input type="text" required>
                        <label for="">CPF</label>
                    </div>
                    <div class="inputbox">
                        <icon-icon name="lock-closed-outline"></icon-icon>
                        <input type="password" required>
                        <label for="">Senha</label>
                    </div>

                    <button>Entrar</button>
                </form>

            </div>

        </div>
    </section>
</body>

</html>