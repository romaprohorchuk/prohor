<?php
/*Cоздать отдельный файл /home/roman/projects/prohor/php/task11.php
Есть строки:
"I", "love", "PHP"
Сконкатенировать их двумя способами описанными в уроке(cм. ссылки)

Залить в репозиторий*/

$str1 = "I";
$str2 = "love";
$str3 = "PHP";

//First way
$str_sum = $str1 . " " . $str2 . " " . $str3;
echo $str_sum;
echo "<br/>";
//Second way
$str_sum2 .= "$str1 $str2 $str3";
echo $str_sum2;