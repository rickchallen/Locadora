<?php

     abstract class Produto {
        
        public $estilo = "";
        public $titulo = "";
        public $nome = "";
        
     public function setEstilo($estilo){
          
          $this->estilo = $estilo;
          
     }
     
     public function getEstilo(){
          
          return $this->estilo;
     }
          
        public function setNome($nome){
          $this->nome = $nome;
          
        }
        
        public function getNome(){
          return $this->nome;
        }
        
        public function setTitulo($titulo){
          $this->titulo = $titulo;
        }
        
        public function getTitulo(){
          return $this->titulo;
        }
        
        
        
     }



?>