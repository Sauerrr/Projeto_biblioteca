<?php
include_once("include/factory.php");

if (!Auth::isAutenticated()) {
    header("location: login.php");
    exit();
}

$user = Auth::getUser();

if (!isset($_GET["id"])) {
    header("location: funcionario_listagem.php");
    exit();
}

if ($_GET["id"] == "" || $_GET["id"] == null) {
    header("location: funcionario_listagem.php");
    exit();
}

$funcionario = FuncionarioRepository::get($_GET["id"]);

if (!$funcionario) {
    header("location: funcionario_listagem.php");
    exit();
}

/*if(ClienteRepository::countByCliente($autor->getId()) > 0){
    header("location: autor_listagem.php");

    exit();
}
*/

FuncionarioRepository::delete($funcionario->getId());

header("location: funcionario_listagem.php");

?>