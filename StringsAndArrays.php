<?php

// 1
$string = "Hello, world!";

$punctuationMarks = [',', ':', ';', '-', '!', '?'];

for($i = 0; $i < strlen($string); $i++){
    foreach($punctuationMarks as $mark){
        if($string[$i] == $mark){
            $string[$i] = '.';
            break;
        }
    }
}
echo $string . PHP_EOL;

// 2
$array = [1, "41 4ff", 56.3, true, "fff", 6];

$min_element = $array[0];
for($i = 1; $i < count($array); $i++){
    $element = (is_numeric($array[$i])) ? $array[$i] : (int)$array[$i];
    if($element < $min_element){
        $min_element = $element;
    }
}
echo $min_element . PHP_EOL;

// 3
$array = [1, "41 4ff", 56.3, true, "fff", 6];

$max_element = 0;
foreach($array as $var){
    $element = (is_numeric($var)) ? $var : (int)$var;
    if($element > $max_element){
        $max_element = $element;
    }
}
echo $max_element . PHP_EOL;

// 4
$array = [1, "41 4ff", 56.3, true, "fff", 6];

$sum = 0;
foreach($array as $var){
    $element = (is_numeric($var)) ? $var : (int)$var;
    $sum += $element;
}

$avg = $sum / count($array);
echo $avg . PHP_EOL;