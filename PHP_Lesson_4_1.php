<?php

$numbers = [2,4,6,8,10];

$result = array_map(function (int $number) {
  $check = $number %2;
  if($check==0){
    return "четное";
  } else{
    return "нечетное";
  }
}, $numbers); // Для удобства, разобьем на разные строки

print_r($result);
