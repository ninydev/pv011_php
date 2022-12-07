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
        echo "<ul>";
        foreach ($arr as $key => $value) {
            echo "<li>";
            if(is_array($value)) {
                echo $key;
                doR($value);
            }
            else {
                echo $value;
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<li>" . $arr . "</li>";
    }
}


doR($address);