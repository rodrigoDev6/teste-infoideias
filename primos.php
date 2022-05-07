<?php

function Primos($inicial, $final)
{
  for($i = ($inicial + 1); $i <= ($final - 1); $i++)
  { 
  $primo = true;

  for($var = 2; $var <= $i - 1; $var++)
  {

    if(is_int($i / $var))
    {
    $primo = false;
    }
  }
  
    if($primo){
    echo($i." | ");
  }
  }

  return;
}

echo "Numeros primos entre 10 e 29: <br>";
Primos(10, 29);
