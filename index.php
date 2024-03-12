<?php
include_once("include/factory.php");

if(!Auth::isAutenticated()){
    header("location: login.php");
    exit();
}

?>