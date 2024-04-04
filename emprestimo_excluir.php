<?php
include_once('include/factory.php');

if (!Auth::isAutenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_GET["id"])){
    header("location: emprestimo_listagem.php");
    exit();
}
if($_GET["id"] == "" || $_GET["id"] == null){
    header("location: emprestimo_listagem.php43");
    exit();
}

$emprestimo = EmprestimoRepository::get($_GET["id"]);
if(!$emprestimo){
    header("location: emprestimo_listagem.php");
    exit();
}

if (!(
    $emprestimo->getDataRenovacao() == null &&
    $emprestimo->getDataDevolucao() == null &&
    $emprestimo->getDataAlteracao() == null
)){
    
    header("location: emprestimo_listagem.php99");
    exit();
}


EmprestimoRepository::delete($emprestimo->getId());

header("location: emprestimo_listagem.php");

?>