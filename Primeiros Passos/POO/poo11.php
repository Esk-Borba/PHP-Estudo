<?php

    //Incluindo classes com Autoload

    //chama a classe que está no mesmo diretório
    function incluirClasses($nomeClasse){
        //verfica se o arquivo existe
        if(file_exists($nomeClasse.".php") === true){

            require_once($nomeClasse.".php");

        }

    }

    spl_autoload_register("incluirClasses");

    //chama a classe que está em outro diretório
    spl_autoload_register(function ($nomeClasse){

        //verifica se o arquivo existe
        if(file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
            require_once("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
        }

    });

    $carro =  new DelRey();
    $carro->acelerar(100);

