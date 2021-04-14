<?php

$dt = new DateTime();
//inicia a classe datetime

$periodo = new DateInterval("P15D");
//cria um perido de quinze dias

echo $dt->format("d/m/Y H:i:s");
//passa o formato para o objeto

$dt->add($periodo);
//adiciona o periodo, neste caso acrescenta 15 dias a mais na data

echo '<br>';

echo $dt->format("d/m/Y H:i:s");