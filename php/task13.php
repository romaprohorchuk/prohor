<?php
error_reporting(E_ALL);

/*Задание:
Есть строка "Телочки - это наше все".

Нужно пройти в цикле по элементам строки и:
- вывести все буквы на новой строке
- если это буквы 'a' или 'е', выводить их на той же строке(без переноса)(тут не учитывать регистр)
- если это буквы 'т' и после нее идет буква 'е' - заменить ее на букву 'Б'

Результат:
- cохранить в файл
- запушить в гит
- вывести на http://localhost:80/php/task13.php*/

    /*$str = utf8_encode ("Телочки - это наше все");
    $arr = str_split($str);
    for($i=0; $i<(count($arr)-1); $i++){
        if($arr[$i]==="а" || $arr[$i]==="е"){
            echo($arr[$i]);
        }elseif($arr[$i]==="т" & $arr[$i+1]==="е" ){
            $arr[$i]="Б";
            echo("<br/>" . $arr[$i]);
        }else{
            echo("<br/>" . $arr[$i]);
        }
    }*/

$str = utf8_encode ("Girls hate us");
$arr = str_split($str);
for($i=0; $i<(count($arr)-1); $i++){
if($arr[$i]==="a" || $arr[$i]==="e"){
    echo($arr[$i]);
}elseif($arr[$i]==="t" && $arr[$i+1]==="e" ){
    $arr[$i]="X";
    echo("<br/>" . $arr[$i]);
}else{
    echo("<br/>" . $arr[$i]);
}
}