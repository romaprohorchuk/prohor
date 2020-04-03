<?php
ini_set('display_errors', 1);
/*Задание:
Вывести твое имя и фамилию
Если встречается буква О, выводить ее в верхнем регистре
Если встречается буква Р, выводить после нее тире
Иначе выводить в нижнем регистре

На вход можно подать строку в любом регистре*/
$str = "Zhenya Vaschuk pIKapil bab";
$arr = str_split($str);
for($i=0; $i<(count($arr)); $i++){
    if($arr[$i] === "K" || $arr[$i] === "k"){
        echo (strtoupper($arr[$i]));
        continue;
    }elseif($arr[$i] === "I" || $arr[$i] === "i"){
        echo ($arr[$i] . "-");
        continue;
    }
        echo (strtolower($arr[$i]));
}
