<?php

//declaração de tipos escalares
//só ira funcionar se os valores possuirem o mesmo tipo
function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2,3,4);
echo "<br>";
echo soma(2,3,5);
echo "<br>";


//declaração do tipo de retorno
function soma2(int ...$valores):string{
    return array_sum($valores);
}

echo var_dump(soma2(1,2));