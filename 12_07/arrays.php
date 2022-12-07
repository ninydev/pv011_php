<?php

echo "<pre>";


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

foreach ($address as $key => $val) {
    echo $key . " => ";
    if(is_array($val)) {
        foreach ($val as $str => $dom) {
            echo $str . " ";
            foreach ($dom as $d) {
                echo $d . " ";
            }
            echo "\n";
        }

    } else {
        echo  $val . "\n";
    }
}

echo "</pre>";

//echo "<pre>";
//var_dump($address);
//echo "</pre>";


//$array1 = array(
//    "a",
//    "key" => "b",
//    "fun" => [
//        0,1,4,6
//        ],
//    "cc",
//    6 => "c",
//    "d",
//);
//var_dump($array1);

//$array = array(
//    "foo" => "bar",
//    "bar" => "foo",
//    100   => -100,
//    -100  => 100,
//);
//var_dump($array);

//$array = array(
//    1    => "a",
//    "1"  => "b",
//    1.5  => "c",
//    false => "d",
//);
//var_dump($array);



// $arr = [];

// Классика
//$arr[0] = 0;
//
//$arr[20] = 20;
//
//echo " sizeof = " . sizeof($arr) . "<br>";
//echo " arr[0] " . $arr["0"] . "<br>";
//echo " arr[20] " . $arr["20"] . "<br>";
//
//echo " arr[15] " . $arr["15"] . "<br>";
//
//
//for ($i = 0; $i < sizeof($arr); $i++) {
//    echo $arr[$i] . " <br>";
//}
