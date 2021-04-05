<?php

  $condicao = true;
  $contador = 0;

  while($condicao){
    $numero = rand(1, 10);

    if($numero === 3){
      echo "Três";
      $condicao = false;
    }
    else{
      echo $numero."  ";
    }
  }

  $total = 150;
  $desconto = 0.9;

  do{
    $total *= 0.9;
    echo "<br>".$total."<br>";
  }while($total > 100);

?>