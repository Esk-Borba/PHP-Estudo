<?php 

  for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
  }
  for($i = 0; $i <= 1000; $i+=5){

    if($i >= 200 && $i <= 800) continue;//não executa o echo que corresponde ao intervalo
    
    if($i === 900) break;//para a execução a partir de 900  
    echo $i . "<br>";
  }
  echo "<select>";
    for($i = date("Y"); $i >= date("Y")-100; $i--){
      echo '<option value="'.$i.'">'.$i.'</option>';
    }
  echo "</select>";

?>