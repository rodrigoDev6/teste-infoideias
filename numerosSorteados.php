<?php

$numSorteados = [];

function sorteiaNumeros(&$sorteados)
{
  for($i = 1; $i <= 20; $i++)
  {
    $numero = rand(1, 10);
    echo $numero . " | ";
    $sorteados[$i] = $numero;
    
  }
}

echo "Os números sorteados foram: " . PHP_EOL;
sorteiaNumeros($numSorteados);

echo "<br>";


function verificaDuplicados(&$arrayComDuplicados)
{
  $unicos = array_unique($arrayComDuplicados);
  $duplicados = array_diff_assoc($arrayComDuplicados, $unicos);
  $diferenca = array_diff($unicos, $duplicados);
  print_r($diferenca);
}

echo "Os números não repetidos foram: " . PHP_EOL;
verificaDuplicados($numSorteados);
