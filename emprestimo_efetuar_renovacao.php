<?php
include_once('include/factory.php');

if (!Auth::isAutenticated()) {
    header("Location: login.php");
    exit();
}

$user = Auth::getUser();

if(!isset($_GET['id'])){
    header("location: emprestimo_listagem_php?1");
    exit();
}
if($_GET["id"] == "" || $_GET["id"] == null){
    header("location: emprestimo_listagem_php?2");
    exit();
}
$emprestimo = EmprestimoRepository::get($_GET["id"]);
if(!$emprestimo){
    header("location: emprestimo.listagem.php?3");
    exit();
}

if (!(
    $emprestimo->getDataRenovacao() == null &&
    $emprestimo->getDataRenovacao() == null &&
    $emprestimo->getDataAlteracao() == null
    )){
        header("location: emprestimo_listagem.php");
        exit();
    }

$novo_emprestimo = Factory::emprestimo();

$emprestimo->setDataVencimento($novo_emprestimo->getDataVencimento());


EmprestimoRepository::update($emprestimo->getId());

header("Location: emprestimo_listagem.php");