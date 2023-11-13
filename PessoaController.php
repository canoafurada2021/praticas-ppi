
<?php
class PessoaController {

public function __construct(){







}

public function cadastrarPessoa($nome, $email, $senha){
//instanciar obj pessoa
$pessoa = new Pessoa();

//setta os atributos de pessoa
$pessoa-> setAll(null, $nome, $email, $senha);

// instancia obj pessoa DAO
$pessoaDAO = new PessoaDAO();

//chama o metodo insert do pessoa DAO
return $pessoaDAO-> insert($pessoa);

}





public function listarPessoas(){

}



public function getPessoa($id){

}


public function editarPessoa($id){

}


public function excluirPessoa($id){

}


public function authPessoa($email, $senha){

}

}

?>