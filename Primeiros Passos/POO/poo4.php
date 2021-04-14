<?php
//Métodos Mágicos

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    //chamado assim que uma nova classe é criada
    public function __construct($a, $b, $c)
    {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    //limpa todas as informações
    public function __destruct(){

        var_dump("DESTRUIR");

    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero."-".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Gustavo Karsten", "107", "Blumenau");

echo $meuEndereco;

var_dump($meuEndereco);

unset($meuEndereco);

