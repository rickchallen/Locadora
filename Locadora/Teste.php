<?php
   include_once("Usuario.php");
   include_once("Funcionario.php");
   class Teste{
      
      
      
      public function comparar($objA , $objB){
         
         if($objA === $objB){
            echo "Objetos de mesma instância";
         }else{
            echo " Não são iguais";
         }
         
      }
    public function criarUsuario($nome,$telefone,$endereco,$locacao) : Usuario{
      
      $user = new Usuario($nome,$telefone,$endereco , $locacao);
      $func = new Usuario($nome,$telefone,$endereco,$locacao);
      return $func;
    }
    
    public function objeto($obj){
      if(is_object($obj)){
         echo "<li>É um Objeto</li>";
      }
    }
   }

?>