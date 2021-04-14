<?php

 class Pessoa{

     public $nome;//Atributo
     public $idade;//Atributo

     public function escrever(){//Método

         return "O meu nome é ".$this->nome." e minha idade é ".$this->idade;

     }

 }

 $pessoa = new Pessoa();
 $pessoa->nome = "Vinícus";
 $pessoa->idade = 17;
 echo $pessoa->escrever();