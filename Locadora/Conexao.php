<?php
class Conexao {

    private $conexao = new PDO("mysql:host=localhost;dbname=locadora","root","130490");
    


    public function getConexao(){
        return $this->$conexao->exec("set names utf8");
    }
}
?>