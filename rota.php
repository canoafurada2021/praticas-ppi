<?php
// verificar metodo de envios
if(!isset($_POST['op'])){
    header('Location: index.php');
    exit();
}

$op =  $_POST['op'];


switch($op){
    case "cadastrar_usuario":



if(!isset($_POST['nome']) || 
!isset($_POST['email']) ||
!isset($_POST['senha']) ){
    header('Location: index.php');
    exit();
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


        break;
}
?>