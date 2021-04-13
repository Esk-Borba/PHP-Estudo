<?php

//toda function precisa retornar um valor
function ola(){
   return "Olá Mundo!<br>";
}

echo ola();
echo ola();

$frase = ola();
//retorna o tamanho da frase;
echo  strlen($frase);
