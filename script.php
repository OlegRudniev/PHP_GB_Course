<?php
$name=readline("Введите свое имя\n");
$question1=readline("Какая первая задача дня у  Вас сегодня?\n");
$question1_1=readline("Сколько времени Вам надо на 1ю задачу?\n");
$question2=readline("Какая вторая задача дня у  Вас сегодня?\n");
$question2_1=readline("Сколько времени Вам надо на 2ю задачу?\n");
$question3=readline("Какая третья задача дня у  Вас сегодня?\n");
$question3_1=readline("Сколько времени Вам надо на 1ю задачу?\n");
$result=$question1_1+$question2_1+$question3_1;
echo"$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $question1 ($question1_1 ч)\n
- $question2 ($question2_1 ч)\n
- $question3 ($question3_1 ч)\n
Примерное время выполнения плана = $result ч\n";
