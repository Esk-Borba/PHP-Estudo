<?php

    //herança
        //quando uma classe herda da outra


    class Documento{

        private $numero;

        public function getNumero(){

            return $this->numero;

        }

        public function setNumero($n){

            $this->numero = $n;

        }
    }

    class CPF extends Documento{

        public function varlidar():bool{

            $numeroCPF = $this->getNumero();

            return true;

        }

    }

    $doc = new CPF();

    $doc->setNumero("132312312-312");

    var_dump($doc->varlidar());

    echo $doc->getNumero();
