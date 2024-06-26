<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_POST["cliente"])){
    header("location: emprestimo_novo.php");

    exit();
}

if( $_POST["cliente"] == "" || $_POST ["cliente"] == null){
    header("location: emprestimo_novo.php");
    
    exit();
}

if (!isset($_POST["livro_id"])){
    header("location: emprestimo_novo.php");

    exit();
}

if( $_POST["livro_id"] == "" || $_POST ["livro_id"] == null){
    header("location: emprestimo_novo.php");
    
    exit();
}


if(
    EmprestimoRepository::countByClienteWithNotFinished($_POST["cliente_id"]) > 0
    ||
    EmprestimoRepository::countByLivroWithNotFinished($_POST["livro_id"] > 0)
){
    header("location: emprestimo_novo.php");
}

date_default_timezone_set('America/Sao_Paulo');
$emprestimo = Factory::emprestimo();

$emprestimo->setLivroId($_POST["livro_id"]);
$emprestimo->setClienteId($_POST["cliente"]);
$emprestimo->setInclusaoFuncionarioId($user->getId());
$emprestimo->setDataInclusao(date("Y-m-d H:i:s"));

$emprestimo_retorno = EmprestimoRepository::insert($emprestimo);

if($emprestimo_retorno > 0){
    header("location: emprestimo_listagem.php?id=". $emprestimo_retorno);
    exit();
}

header("location: emprestimo_novo.php");

?>