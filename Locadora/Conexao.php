<?php
class Conexao {

    private $conexao ="";
    
    private function conect(){
        try{
           $conexao = new PDO("mysql:host=localhost;dbname=locadora;","root","130490");
           $conexao->exec("set names utf8");
           return $conexao;
        }catch(PDOException $e){
            return $e->getMessage();
            exit();       
        }
    }
}
?>