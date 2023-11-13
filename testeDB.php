<?php

include_once "Database.php";

$conn = new Database();

if($conn -> getConnection()){
    echo('conectado com sucesso');
}else{
    echo('erro ao conectar');
}


?>