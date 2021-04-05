<?php

  $pessoas = array();
  //incrementa valores em um array já criado
  array_push($pessoas, array(
    'nome'=>"João",
    'idade'=>"20"
  ));
  array_push($pessoas, array(
    'nome'=>"Vinicius",
    'idade'=>"25"
  ));

  print_r($pessoas[0]['nome']);


?>