<?php
$Quantuty_Requirements = readline("Введите количество задач на сегодня");
$Task_and_Time = "";
$Sum_Time = 0;
for($i=1;$i<=$Quantuty_Requirements;$i++){
    $Task = readline("Введите задачу $i");
    $Task_Time = readline("Ведите время задачи $i");
    $Task_and_Time.=$Task." ".(string)$Task_Time." часов"."\n";
    $Sum_Time+=$Task_Time;
}

echo $Task_and_Time;
echo ("Общее время всех задач ".$Sum_Time);
