<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$emprestimo = Factory::emprestimo();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>NOVO EMPRESTIMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php include("include/menu.php"); ?>
    </header>
    <div class="container">
        <h1>Empréstimo > Novo</h1>
        <br>
        <div id="botaonovo">
            <a href="emprestimo_listagem.php" class="btn btn-info">Voltar</a>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">

                <form action="emprestimo_novo_post.php" method="POST">
                    <div class="mb-3">
                        <label for="livro_id" class="form-label">Livro:</label>
                        <select name="livro_id" id="livro_id">
                            <?php
                            foreach (LivroRepository::listAll() as $livro){
                                if(EmprestimoRepository::countByLivro($livro->getId()) == 0 || EmprestimoRepository::countByLivrosDevol($livro->getId()) > 0){
                            ?>
                            
                                <option value="<?php echo $livro->getId(); ?>">
                                    <?php echo $livro->getTitulo() ?>
                                </option>
                            <?php }} ?>
                        </select>

                        <br>
                        

                        <label for="cliente" class="form-label">Cliente:</label>
                        <select name="cliente" id="cliente">
                            <?php
                            foreach (ClienteRepository::listAll() as $cliente) {
                                if(EmprestimoRepository::countByCliente($cliente->getId()) == 0 || EmprestimoRepository::countByClientesDevol($cliente->getId()) > 0){
                            ?>
                                <option value="<?php echo $cliente->getId(); ?>">
                                    <?php echo $cliente->getNome() ?>
                                </option>
                            <?php }} ?>
                        </select>

                        <br>
                        

                        <label for="data_vencimento" class="form-label" name="data_vencimento"> Data de Vencimento</label>
                        <input type="text" name="data_vencimento" class="form-control" id="data_vencimento" value="<?php echo $emprestimo->getDataVencimento("d/m/Y")?>" readonly >


                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#data_vencimento").mask("00/00/0000")
        });
    </script>
</body>

</html>