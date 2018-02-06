<?php
  include_once("Pessoa.php");
  class Usuario extends Pessoa {
    
    private $qtd_locacao  = 0;
    
    
    public function setQtd_locacao($locacao){
        $this->qtd_locacao = $locacao;
    }
    
    public function getQtd_locacao(){
        return $this->qtd_locacao;
    }
    
    public function __construct($nome,$telefone,$endereco,$locacao){
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setQtd_locacao($locacao);
        $this->setTelefone($telefone);
        
    }
  }

?>