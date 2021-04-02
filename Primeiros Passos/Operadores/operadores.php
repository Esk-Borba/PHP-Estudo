<?php

  //Operadores de atribuição
    // = atribuição
    $nome = "vicius";
    // . concatenação
    echo $nome . " fuhr";
    //.=
      //adiciona um valor a mais mas mantem o valor original
    $nome .= " de borba";
    echo $nome;

    
    // += adiciona um valor mas mantem o valor original
    $valorTotal = 100;
    $valorTotal += 25;
    $valorTotal += 75;

    //-= tira um valor pelo valor da varial
    $valorTotal -= 25;

    //*= multiplica um valor pelo valor da varial
    $valorTotal *= .9;
      //neste caso traz 90% do valor da variável
    
    echo $valorTotal;



  //Operadores aritméticos
    //+ (soma)
      $a = 10;
      $b = 2;
      echo $a + $b;
      echo "<br>";
    //- (subtração)
      echo $a - $b;
      echo "<br>";
    //* (multiplicação)
      echo $a * $b;
      echo "<br>";
    // / (divisão)
      echo $a / $b;
      echo "<br>";
    //% (módulo)
      echo $a % $b;
      echo "<br>";
    //** (expoente)
      echo $a ** $b;
      echo "<br>";


  //Operadores de Comparação
    $c = 30;
    $d = 30.0;
    // > (maior que)
      var_dump($c > $d);
      echo "<br>";
    // < (menor que)
      var_dump($c < $d);
      echo "<br>";
    // >= (maior ou igual que)
      var_dump($c >= $d);
      echo "<br>";
    // < (menor ou igual que)
      var_dump($c <= $d);
      echo "<br>";
    // == (compara valor)
      var_dump($c == $d);
      echo "<br>";
    // === (compara valor e tipo)
      var_dump($c === $d);
      echo "<br>";
    // != (valores diferentes)
      var_dump($c != $d);
      echo "<br>";
    // !== (valores diferentes e tipos diferentes)
      var_dump($c !== $d);
      echo "<br>";

    //Operadores PHP7
    $e = 50;
    $f = 35;
      //spaceship (compara trazendo 1 para a esquerda se for maior, 0 se forem iguais e -1 se o direito for maior)
      var_dump($e <=> $f);
      echo "<br>";
    $g = null;
    $h = null;
    $i = 10;
      //Null Coalescing Operator (ira mostrar apenas aquele que tiver um valor definido)
      echo $g ?? $h ?? $i;

    //Operadores Incrementais e Decrementais
    $j = 10;
    echo "<br>";
      //incremento
        //++ (incrementa mais 1)
            //pós-incremento
            echo $a++;
            echo "<br>";
            echo $a;
            echo "<br>";
            //pre-incremento
            echo ++$a;
            echo "<br>";
      //decremento
        //-- (decrementa menos 1)
          //pós-decremento
          echo $a--;
          echo "<br>";
          echo $a;
          echo "<br>";
          //pre-decremento
          echo --$a;
          echo "<br>";
    
    //Precedência de Operadores
    $resultado = 10 + 3 / 2;
    echo $resultado;
    echo "<br>";
      //() primeiro será executado aquilo que está dentro dos parenteses
      $resultado = (10 + 3) / 2;
      echo $resultado;
      echo "<br>";

    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
    var_dump($resultado);
    echo "<br>";
    //retornara porque as duas condições não são verdadeiras

    $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
    var_dump($resultado);
    echo "<br>";
    //retornara verdadeiro caso uma das duas forem verdadeiras
?>    