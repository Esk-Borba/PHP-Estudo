<?php

//polimorfismo

   abstract class Animal{

        public function falar(){

            return "Som";

        }
        public function mover(){

            return "Move";

        }

    }

    class Cachorro extends Animal{

       public function falar()
       {

            return "Auau";

       }

    }

    class Gato extends Animal{

       public function falar()
       {

           return "Miau";

       }

    }

    class Passaro extends Animal{

       public function falar()
       {

           return "Canta";

       }

       public function mover()
       {

           return "Voa "." e ". parent::mover();

       }


    }

    $pluto = new Cachorro();

    echo $pluto->falar();
    echo "<br>";
    echo $pluto->mover();
    echo "<br>";

    echo "<hr>";

    $garfield = new Gato();
    echo $garfield->falar();
    echo "<br>";

    echo "<hr>";

    $picaPau = new Passaro();
    echo $picaPau->falar();
    echo "<br>";
    echo $picaPau->mover();
    echo "<br>";
