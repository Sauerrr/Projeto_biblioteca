<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_POST["nome"])){
    header("location: autor_novo.php");

    exit();
}

if( $_POST["nome"] == "" || $_POST ["nome"] == null){
    header("location: autor_novo.php");
    
    exit();
}
date_default_timezone_set('America/Sao_Paulo');
$autor = Factory::autor();

$autor->setNome($_POST["nome"]);
$autor->setInclusaoFuncionarioId($user->getId());
$autor->setDataInclusao(date("Y-m-d H:i:s"));

$autor_retorno = AutorRepository::insert($autor);

if($autor_retorno > 0){
    header("location: autor_editar.php?id=". $autor_retorno);
    exit();
}

header("location: autor_listagem.php");

?>