<?php
placeToReturn:
$war_year=readline("Ведите правильный год начала Второй мировой войны \n a)1939 \n b)1941 \n c)1945");
if($war_year==1939){
    echo("Вы правы");
} elseif($war_year==1941 || $war_year==1945){
    echo("Вы ошиблись \n");
    goto placeToReturn;
} else{
    echo("Вы не выбрали один из вариантов \n");
    goto placeToReturn;
}


