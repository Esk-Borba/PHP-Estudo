<?php

  //diferença entre "" e ''
    $nome = "Carlos";
    $nome2 = 'Vinicius';
    var_dump($nome, $nome2);
    echo "<br>";
    //"" aceita acrescentar o valor de uma variável
      echo "Meu nome é $nome2";
      echo "<br>";
    //'' não aceita acrescentar o valor de uma variável e sim o nome dela
      echo 'Meu nome é $nome2 ';
      echo "<br>";
    //esse processo se chama interpolação de variáveis

  //Funções para Strings
    //Uppercase
      $text = "vinicius";
      echo $text;
      echo "<br>";
      echo strtoupper($text);
      echo "<br>";
    //Lowercase
      $text2 = "VINICIUS";
      echo $text2;
      echo "<br>";
      echo strtolower($text2);
      echo "<br>";
    //First Letter All Worlds
      $text3 = "vinicius de borba";
      echo $text3; 
      echo "<br>";
      echo ucwords($text3);
      echo "<br>";
    //First Letter First World
      $text4 = "vinicius borba";
      echo $text4;
      echo "<br>";
      echo ucfirst($text4);
      echo "<br>";
    //Substituição
      $text5 = "vinicius borba";
      echo $text5;
      echo "<br>";
      echo str_replace("borba", "fuhr", $text5);
      echo "<br>";
    //Posição
      $text6 = "vinicius fuhr de borba";
      $palavra = "de";
      $q = strpos($text6, $palavra);
      var_dump($q);
      echo "<br>";
    //Pegar antes de uma posição
      $text7 = "vinicius fuhr de borba";
      $texto = substr($text7, 0, $q);
      var_dump($texto);
      echo "<br>";
    //Pegar depois de uma posição
      $text8 = "vinicius fuhr de borba";
      $texto2 = substr($text8, $q + strlen($palavra), strlen($text8));
      //strlen($palavra) conta o tamanho da palavra apartir do $q que é aquilo que vem antes da palavra que eu não quero
      //strlen($text8) conta o tamanho total do meu texto para ir até o final da frase
      var_dump($texto2);
      echo "<br>";
?>