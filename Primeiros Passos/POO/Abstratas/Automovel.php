<?php


interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarchar($marcha);

}

abstract class Automovel implements Veiculo{

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

}