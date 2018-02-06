<?php
      include_once("In_info.php");
      include_once("Produto.php");
      
      
      class Dvd extends Produto implements In_info {
            
            public function __construct($titulo,$estilo){
              $this->setTitulo($titulo);
              $this->setEstilo($estilo);
            }
            
           
            
            
            public function informar(){
                  
                  echo "<td>".$this->getTitulo()."<td>";
                  echo "<td>".$this->getEstilo()."<td>";
            }
      }
      




?>