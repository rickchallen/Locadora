<?php

abstract class Pessoa{
    public $nome ="";
    public $telefone ="";
    public $endereco ="";
    
    
    public function setNome($nome){
        
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
}

?>