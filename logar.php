<?php
include_once("include/factory.php");

$cpf = $_POST["cpf"];
$cpf = $_POST["senha"];

if($cpf == null || $senha == null){
    header("location: login.php");
    exit();
}

if ($cpf = "" || $senha = ""){
    header("location: login.php");
    exit();
}

$auth = Auth::login($cpf,$senha);

if(Auth::isAutenticated()){
    header("location: index.php");
    exit();
}

header("location: login.php");
exit();

?>