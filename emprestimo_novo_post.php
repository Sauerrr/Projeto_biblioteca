<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_POST["data_vencimento"])){
    header("location: emprestimo_novo.php");

    exit();
}

if( $_POST["data_vencimento"] == "" || $_POST ["data_vencimento"] == null){
    header("location: emprestimo_novo.php");
    
    exit();
}

$emprestimo = Factory::emprestimo();

$emprestimo->setLivroId($_POST["livro_id"]);
$emprestimo->setClienteId($_POST["cliente"]);
$emprestimo->setDataVencimento($_POST["data_vencimento"]);
$emprestimo->setInclusaoFuncionarioId($user->getId());
$emprestimo->setDataInclusao(date("Y-m-d H:i:s"));

$emprestimo_retorno = EmprestimoRepository::insert($emprestimo);

if($emprestimo_retorno > 0){
    header("location: emprestimo_editar.php?id=". $emprestimo_retorno);
    exit();
}

header("location: emprestimo_novo.php");

?>