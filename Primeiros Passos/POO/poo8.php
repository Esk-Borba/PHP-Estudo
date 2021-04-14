<?php


    //interface
        //usar para organizar o código
        //obriga a ter determinado padrao na classe

    interface Veiculo{

        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarchar($marcha);

    }

    interface Interior{

        public function mostrarCorInterior($corInterior);

    }

    class Civic implements Veiculo, Interior{

        public function acelerar($velocidade)
        {

            echo "O veiculo acelerou até ".$velocidade." km/h";
            echo "<br>";

        }

        public function freiar($velocidade)
        {

            echo "O veículo freiou até ".$velocidade." km/h";
            echo "<br>";

        }

        public function trocarMarchar($marcha)
        {

            echo "O veículo trouca de marcha até ".$marcha."ª marcha";
            echo "<br>";

        }

        public function mostrarCorInterior($corInterior)
        {

            echo "A cor do interior é ".$corInterior;
            echo "<br>";

        }

    }

    $carro = new Civic();

    $carro->trocarMarchar(1);
    $carro->mostrarCorInterior("Rosa");
