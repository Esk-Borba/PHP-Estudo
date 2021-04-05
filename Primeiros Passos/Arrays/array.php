<?php

  $frutas = array("Maça", "Banana", "Melão"); //vetor, uma dimenção
  print_r($frutas);//mostra o array e sua estrutura;


   //array bidimencional
   $vw[0][0] = "VW";
   $vw[0][1] = "Golf";
   $vw[0][2] = "Polo";
   $vw[0][3] = "Gol";

   $vw[1][0] = "Audi";
   $vw[1][1] = "RS7";
   $vw[1][2] = "A5";
   $vw[1][3] = "A3";

   echo $vw[0][1];//traz o veiculo da VW na posição 1

   echo end($vw[0]);
?>