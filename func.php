<?php
require 'array.php';
print_r ($example_persons_array);
echo "<br>";
foreach ($example_persons_array as $value1) {
    foreach ($value1 as $key => $value) {
        echo "$value\n" . "<br>";
    }
}
echo "<br>";



// Возвращает как результат массив из трёх элементов с ключами ‘name’, ‘surname’ и ‘patronomyc’
function getPartsFromFullname ($str) {
    $arr = array();
    list($surname, $name, $patronomyc) = explode (' ', $str);
    $arr['surname'] = $surname;
    $arr['name'] = $name;
    $arr['patronomyc'] = $patronomyc;
    return $arr;
}

foreach ($example_persons_array as $value) {
    // echo $value['fullname'] . "<br>";
    print_r(getPartsFromFullname($value['fullname']));
}
// Возвращает как результат фамилию, имя и отчество, но склеенные через пробел
function getFullnameFromParts() {

}

// Принимает как аргумент строку, содержащую ФИО вида «Иванов Иван Иванович» и возвращающую строку вида «Иван И.»
function getShortName() {

}

// Функция определения пола по ФИО
function getGenderFromName() {

}