<?php

    //encapsulamento
        //forma de controlar quem pode e quem não pode acessar um atributo ou método

    class Pessoa{

        public $nome = "Vinicius";
        protected $idade = 17;//acessivel somente dentro da classe
        private $senha = "123";

        public function verDados() {

            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";

        }

    }

    $objeto = new Pessoa();
    $objeto->verDados();//todos os dados serão apresentados, devido ao método pertecer a mesma classe que os atributos

//    echo $objeto->idade;


