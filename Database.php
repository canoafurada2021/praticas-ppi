<?php 
class Database{
private $host;
private $user;
private $pass;
private $db;
private $connection;





public function getConnection() {
$this-> user='root';
$this->pass='aluno';    
$this->host='localhost';
$this->database='crud';
$this-> connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
return $this->connection;


}




}
  

?>