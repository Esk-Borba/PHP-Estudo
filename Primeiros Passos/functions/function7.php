<?php

//função anonima
//não possui nome, return

function teste($callBack)
{
  $callBack();
}


teste(function () {
  echo "Terminou";
});

echo '<br>';


$fn  = function($a){
  var_dump($a);
};

$fn("Oi");