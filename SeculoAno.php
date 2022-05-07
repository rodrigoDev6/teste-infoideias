<?php

  function SeculoAno($ano){
    
    $seculo = $ano / 100;

    if(is_float($seculo)){
      $seculo = intval($seculo + 1);
    };

    echo("Ano ".$ano." = século ".$seculo);

    return;
  }

  SeculoAno(1975);
  
  echo('<br>');

  SeculoAno(1620);
  

?>
