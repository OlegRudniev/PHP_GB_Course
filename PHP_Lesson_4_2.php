<?php

function operation($numbers){
    $min = min($numbers);
    $max = max($numbers);
    $averrage = array_sum($numbers)/count($numbers);

    // $massiveN = [
    //     [0] => $min,
    //     [1] => $max,
    //     [2] => $averrage 
    // ];
    $massiveN = [];
    array_push($massiveN,$min,$max,$averrage);
        return $massiveN;
}

$massiveLength = (int)readline( "введите желаемое количество цифр в массиве ");
for($i=1;$i<=$massiveLength;$i++){
    // $massiveNumbers = [];
    $number = (int)readline("введите любое число");
    $massiveNumbers[] = $number;
}

$result = operation($massiveNumbers);
print_r($result);