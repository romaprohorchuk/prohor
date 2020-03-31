<?php
declare(strict_types = 1);
/*Cоздать отдельный файл /home/roman/projects/prohor/php/task10.php
Создать 4 цикла. Каждый выводит на экран числа от 0 до 5.
Все циклы должны использовать разные операторы инкремента/декремента(см. ссылки)*/
for ($i=0; $i<=5; $i++){
    echo $i;
}
echo "<br/>";
for ($i=0; $i<=5; ++$i){
    echo $i;
}
echo "<br/>";
for ($i=5; $i>=0; $i--) {
    echo $i;
}
echo "<br/>";
for ($i=5; $i>=0; --$i){
    echo $i;
}
echo "<br/>";

