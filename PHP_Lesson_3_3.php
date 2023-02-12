<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Сергеев Сергей' => 4,
        'Олегов Олег' => 3,
        'Степанов Степан' => 2,
        'Тимофеев Тимофей' => 3
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Григорьев Григорий' => 2,
        'Вадимов Вадим' => 5,
        'Алексеев Алексей' => 3,
        'Евгениев Евгений' => 5,
        'Андреев Андрей' => 4
    ]
 ];

//  $result = [];
//  foreach($students as $group_name => $student_name){
//     foreach($student_name as $student_name_i => $mark){
//         $result[$group_name][$student_name_i]=array_sum($mark);
//     }
//  }
// 
$students_0 = array_sum($students['ИТ20'])/count($students['ИТ20']);
$students_1 = array_sum($students['БАП20'])/count($students['БАП20']);

echo $students_0 . PHP_EOL;
echo $students_1 . PHP_EOL;

if($students_0 > $students_1){
    echo "ИТ20 имеет результат оценок выше";
}elseif($students_1 > $students_0){
    echo "БАП20 имеет результат оценок выше";
} 
else{ 
    echo "группы равноценны по оценкам"; 
}