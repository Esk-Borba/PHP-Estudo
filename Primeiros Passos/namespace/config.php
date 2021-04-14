<?php

spl_autoload_register(function ($nameClass){

    var_dump($nameClass);

    $dirClass = "class";//diretorio
    $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";//caminho completo onde se encotra a classe

    if(file_exists($filename)){

        require_once($filename);

    }

});