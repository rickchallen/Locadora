<?php

  class Locacao{
    
    private $usuario = "";
    private $produto = "";
    
    public function setUsuario($user){
        if(is_object($user)){
            $this->usuario = $user;
        }
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    
    public function setProduto($prod){
        if(is_object($prod)){
            $this->produto = $prod;
        }
    }
    
    public function getProduto(){
        return $this->produto;
    }
    
    
    
    public function __construct($user,$prod){
      
      $this->setProduto($prod);
      $this->setUsuario($user);
    }
  }

?>