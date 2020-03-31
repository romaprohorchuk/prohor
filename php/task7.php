<?php
/*Cоздать отдельный файл /home/roman/projects/prohor/php/task7.php
Создать переменные, содержащие все типы существующие в PHP.
Также математически посчитать:
- сумму boolean(true) и строки "lsdkfjkd"
- сумму boolean(false) и строки "1dfsdfds"
- сумму строки "123alnf33" и строки "sdlfkjsdfk456"
- сумму строки "s123" и null
- сумму integer 123 и null
- сумму integer 15 и строки "15"
Залить в репозиторий*/

$a = 666;//integer
$b = "word"; //string
$c = 6.66; //float
$d = array (1, 2, 3); //array
$obj = (object)$d; //object
$e = null; //null
$f = true;

$sum1 = true . "lsdkfjkd";
echo $sum1;
$sum2 = false . "1dfsdfds";
echo $sum2;
$sum3 = "123alnf33" . "sdlfkjsdfk456";
echo $sum3;
$sum4 = "s123" . null;
echo $sum4;
$sum5 = 123 . null;
echo $sum5;
$sum6 = 15 . "15";
echo $sum6;

