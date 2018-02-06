<?php

     include_once("Pessoa.php");
     
     class Funcionario extends Pessoa{
        
        private $salario = 0;    
        public function setSalario($money){
          $this->salario = $money;
        }
        
        
        public function getSalario(){
            return $this->salario;
        }
        
        
        public function __construct($name,$phone,$street,$money){
            $this->setNome($name);
            $this->setTelefone($phone);
            $this->setEndereco($street);
            $this->setSalario($money);
        }
     }





?>