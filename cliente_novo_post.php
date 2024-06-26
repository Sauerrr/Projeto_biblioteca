<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if($_POST["data_nascimento"] >= date("Y-m-d")){
    header("location: cliente_novo.php?Data Nascimento inválida");

    exit();
}

if (!isset($_POST["nome"])){
    header("location: cliente_novo.php");

    exit();
}

if( $_POST["nome"] == "" || $_POST ["nome"] == null){
    header("location: cliente_novo.php");
    
    exit();
}

if (!isset($_POST["telefone"])){
    header("location: cliente_novo.php");

    exit();
}

if( $_POST["telefone"] == "" || $_POST ["telefone"] == null){
    header("location: cliente_novo.php");
    
    exit();
}

if (!isset($_POST["email"])){
    header("location: cliente_novo.php");

    exit();
}

if( $_POST["email"] == "" || $_POST ["email"] == null){
    header("location: cliente_novo.php");
    
    exit();
}

if (!isset($_POST["data_nascimento"])){
    header("location: cliente_novo.php");

    exit();
}

if( $_POST["data_nascimento"] == "" || $_POST ["data_nascimento"] == null){
    header("location: cliente_novo.php");
    
    exit();
}
date_default_timezone_set('America/Sao_Paulo');

echo $_POST["data_nascimento"];

$datetime = DateTime::createFromFormat('d/m/Y', $_POST["data_nascimento"]);
$dateFormatted = $datetime->format('Y-m-d');
$cliente = Factory::cliente();

$cliente->setNome($_POST["nome"]);
$cliente->setTelefone($_POST["telefone"]);
$cliente->setEmail($_POST["email"]);
$cliente->setCpf($_POST["cpf"]);
$cliente->setRg($_POST["rg"]);
$cliente->setDataNascimento($dateFormatted);
$cliente->setInclusaoFuncionarioId($user->getId());
$cliente->setDataInclusao(date("Y-m-d H:i:s"));

$cliente_retorno = ClienteRepository::insert($cliente);

if($cliente_retorno > 0){
    header("location: cliente_editar.php?id=". $cliente_retorno);
    exit();
}

header("location: cliente_listagem.php");

?>