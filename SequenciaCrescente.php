<?php

function SequenciaCrescente($array)
{
    $sorted = $array;
    sort($sorted, SORT_NUMERIC);
    $arrayDois = $array;
    $arraySort = $sorted;

    foreach ($array as $key => $value) {
        $array = $arrayDois;
        $sorted = $arraySort;
        unset($array[$key]);
        unset($sorted[array_search($value, $arraySort)]);
        $sorted = array_values(array_unique($sorted));
        $array = array_values($array);
        
        if ($array === $sorted)
            return print "Sequência é crescente: true <br>";
    }
    return print "Sequência é crescente: false  <br>";
}

SequenciaCrescente([1, 3, 2, 1]);     
SequenciaCrescente([1, 3, 2]);  
SequenciaCrescente([1, 2, 1, 2]);  
SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
SequenciaCrescente([1, 1, 2, 3, 4, 4]);
SequenciaCrescente([1, 4, 10, 4, 2]); 
SequenciaCrescente([10, 1, 2, 3, 4, 5]); 
SequenciaCrescente([1, 1, 1, 2, 3]); 
SequenciaCrescente([0, -2, 5, 6]); 
SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
SequenciaCrescente([40, 50, 60, 10, 20, 30]);
SequenciaCrescente([1, 1]); 
SequenciaCrescente([1, 2, 5, 3, 5]);
SequenciaCrescente([1, 2, 5, 5, 5]);
SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
SequenciaCrescente([1, 2, 3, 4, 3, 6]); 
SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]); 
SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]); 
SequenciaCrescente([3, 5, 67, 98, 3]);
