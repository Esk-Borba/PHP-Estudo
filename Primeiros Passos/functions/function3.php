<?php


//parametros de uma função
    //ou argumentos
    //elementos necessário para ela funcionar de forma correta


//recebe um parametro, neste caso um texto
function ola($texto, $periodo = "Bom dia"){//foi definido uma valor padrão para a variável texto
    //caso um dos parametros não sejam prédefinidos é obrigatório passar um valo quando chamar a função
    return "Olá $texto!<br> $periodo <br>";

}

echo ola("Vinícius");//parametro 1 sendo passado porque não foi prédefinido
echo ola("vinicius", "boa tarde");