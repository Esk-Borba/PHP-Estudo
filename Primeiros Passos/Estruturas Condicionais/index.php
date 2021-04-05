<?php
  //diversas opções
  $qualSuaIdade = 68;  

  $idadeCrianca = 12;
  $idadeMaior = 18;
  $idadeMelhor = 65;

  if($qualSuaIdade < $idadeCrianca){  
    echo "Criança";
  }
  else if($qualSuaIdade < $idadeMaior && $qualSuaIdade > $idadeCrianca){
    echo "Adolecente";
  }
  else if($qualSuaIdade < $idadeMelhor && $qualSuaIdade > $idadeMaior){
    echo "Adulto";
  }
  else{
    echo "Idoso";
  }

  echo "<br>";

  //operador ternário
  echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";



?>