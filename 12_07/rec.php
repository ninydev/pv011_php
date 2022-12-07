<?php


$address = [
    "Одесса" => [
        "Садовая" =>[3 , 14],
        "Дерибасовская" => [2,5]
    ],
    "Николаев" => [
        "Лягина" => [4],
        "Соборная" => [4]
    ],
    10
];


function doR ($arr) {
    if (is_array($arr)) {
        echo "<ul><li>";
        foreach ($arr as $key => $value) {
            echo $key;
            doR($value);
        }
        echo "</li></ul>";
    }
}


doR($address);