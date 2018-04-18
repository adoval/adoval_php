<?php

$array = [1, -1, 2, -2, 3, -3];

function sortArray(array $array) {
    foreach ($array as $key => $value) {
        if ($value > 0) {
            continue;
        } else {
            array_splice($array, $key, 1);
            array_unshift($array, $value);
        }
    }
};

var_dump(sortArray($array));










//$array = [4, 2, 2, 0, 1, 2, 3];
//$sum = 0;
//
//foreach ($array as $value) {
//  if ($value % 2 === 0) {
//      $sum += $value;
//  } else {
//      break;
//  }
//};
//
//echo $sum;









//printType(1);
//
//function printType($variable) {
//    switch (gettype($variable)){
//    case 'integer':
//        echo 'This variable is integer: ' . $variable;
//        break;
//        case 'double':
//            echo 'This variable is double: ' . $variable;
//        break;
//        case 'boolean':
//        echo 'This variable is boolean: ' . $variable;
//        break;
//        case 'null':
//        echo 'This variable is null: ' . $variable;
//        break;
//        }
//}
//
//echo($kintamasis);