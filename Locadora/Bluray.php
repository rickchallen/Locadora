<?php
        include_once("In_info.php");
        include_once("Produto.php");
        
        class Bluray extends Produto implements In_info {
                
                private $resolucao = "";
                
                public function setResolucao($resolucao){
                        
                        $this->resolucao = $resolucao;
                        
                }
                
                public function getResolucao(){
                        return $this->resolucao;
                }
                
                
                public function __construct($titulo,$estilo,$resolucao){
                        $this->setEstilo($estilo);
                        $this->setTitulo($titulo);
                        $this->setResolucao($resolucao);
                }
                
                public function informar(){
                        
                        echo "<td>".$this->getTitulo()."</td>";
                        echo "<td>".$this->getEstilo()."<td>";
                        echo "<td>".$this->getResolucao()."<td>";
                }
                
        }



?>