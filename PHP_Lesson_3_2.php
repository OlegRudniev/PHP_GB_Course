<?php
$noun = ["счастья ", "здоровья ", "комфорта ", "настроения "];
$ajective = ["большого ", "крепкого ", "настоящего ", "прочного "];
$birthday_boy = readline("Введите имя имениника");
$random_1 = implode([$ajective[array_rand($ajective)], $noun[array_rand($noun)]]);
$random_2 = implode([$ajective[array_rand($ajective)], $noun[array_rand($noun)]]);
$random_3 = implode([$ajective[array_rand($ajective)], $noun[array_rand($noun)]]);

echo "Дорогой $birthday_boy, от всего сердца пордравляем Тебя с Днем Рождения! Желаем $random_1, $random_2 и $random_3 !";

