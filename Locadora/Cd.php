<?php
    include_once("Produto.php");
    include_once("In_info.php");
   class Cd extends Produto implements In_info {
    
    public $nome_Album ="";
    
    public function __construct($estilo,$nomeAlbum,$nome){
        $this->setNome($nome);
        $this->setNomeAlbum($nomeAlbum);
        $this->setEstilo($estilo);
    }
    
    public function getNomeAlbum(){
        return $this->nome_Album;
    }
    
    public function setNomeAlbum($album){
        $this->nome_Album = $album;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($word){
        
        $this->nome = $word;
    }
    
    public function informar(){
        
        echo "<td>".$this->getNome()."</td>";
        echo "<td>".$this->getNomeAlbum()."</td>";
        echo "<td>".$this->getEstilo()."</td>";
        
        
    }
   }


?>