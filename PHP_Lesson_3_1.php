<?php

$massive1 = [1,3,5,7,9,11,13,15,17,19];
$massive2 = [2,4,6,8,10,12,14,16,18,20];

$Result = [];
foreach($massive1 as $key1 => $massive1_i){
    $Result[$key1]=$massive1_i*$massive2[$key1];
}

print_r($Result);
