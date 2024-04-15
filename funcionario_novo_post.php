<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_POST["nome"])){
    header("location: funcionario_novo.php");

    exit();
}

if( $_POST["nome"] == "" || $_POST ["nome"] == null){
    header("location: funcionario_novo.php");
    
    exit();
}

if (!isset($_POST["cpf"])){
    header("location: funcionario_novo.php");

    exit();
}

if( $_POST["cpf"] == "" || $_POST ["cpf"] == null){
    header("location: funcionario_novo.php");
    
    exit();
}

if (!isset($_POST["telefone"])){
    header("location: funcionario_novo.php");

    exit();
}

if( $_POST["telefone"] == "" || $_POST ["telefone"] == null){
    header("location: funcionario_novo.php");
    
    exit();
}

if (!isset($_POST["senha"])){
    header("location: funcionario_novo.php");

    exit();
}

if( $_POST["senha"] == "" || $_POST ["senha"] == null){
    header("location: funcionario_novo.php");
    
    exit();
}

if (!isset($_POST["email"])){
    header("location: funcionario_novo.php");

    exit();
}

if( $_POST["email"] == "" || $_POST ["email"] == null){
    header("location: funcionario_novo.php");
    
    exit();
}
date_default_timezone_set('America/Sao_Paulo');
$funcionario = Factory::funcionario();

$funcionario->setNome($_POST["nome"]);
$funcionario->setCpf($_POST["cpf"]);
$funcionario->setTelefone($_POST["telefone"]);
$funcionario->setSenha($_POST["senha"]);
$funcionario->setEmail($_POST["email"]);
$funcionario->setInclusaoFuncionarioId($user->getId());
$funcionario->setDataInclusao(date("Y-m-d H:i:s"));

$funcionario_retorno = FuncionarioRepository::insert($funcionario);

if($funcionario_retorno > 0){
    header("location: funcionario_editar.php?id=". $funcionario_retorno);
    exit();
}

header("location: funcionario_listagem.php");

?>