<?php
echo PHP_VERSION;
//constante do sistema

//define uma constante
define("SERVIDOR", "127.0.0.1");

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test',
], true);

echo SERVIDOR;
echo "<br>";
print_r(BANCO_DE_DADOS);