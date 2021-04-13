<?php

//parametros X passagem de parametro por referencia

//passagem de parametro por referencia= & usado para fazer referencia
//localiza onde a variável está alocada na memória, neste caso o que acontece dentro da função interfere na variável

$a  = 10;

function trocaValor($a){

    $a += 50;
    return $a;

}


function trocaValor2(&$a){

    $a+=50;
    return $a;

}

echo trocaValor($a);
echo "<br>";
echo $a;//a variavel continua tendo o valor 10 por causa do escopo
//pq o que acontece dentro da função não alterou diretamente a variável

echo "<br>";

echo trocaValor2($a);
echo "<br>";
echo $a;
echo "<br>";


//com variáveis globais

$data = array(
    'nome'=>'Vinícius',
    'idade'=>17,
);

foreach ($data as &$value){

    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';

}

print_r($data);