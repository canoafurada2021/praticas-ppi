<?php
class PessoaDao{

public function __construct(){

}

//insert db
public function insert(Pessoa $pessoa){
$dao= new Database();
$conn=$dao->getConnection();



$sql ="INSERT INTO pessoa (nome, email, senha) VALUES (:nome, :email, :senha)";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':nome', $pessoa-> getNome());
$stmt->bindParam(':email', $pessoa-> getEmail());
$stmt->bindParam(':senha', $pessoa-> getSenha());


}






//updat db
// select all
//select by id
}


?>