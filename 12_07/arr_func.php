<pre>
<?php
$array = [
    'имя',
    'почта',
    'телефон',
    // 'дом' => ['Одесса'] //
];
var_dump($array);


$str = implode(",", $array);
var_dump($str);

$jsonStr = json_encode($array);
echo "\n\n" . "$jsonStr" . "\n\n ";

$explodeArr = explode(",", $str);
var_dump($explodeArr);

$jsonArr = json_decode($jsonStr);
var_dump($jsonArr);


echo '$str ';
echo `$str `;
echo "$str ";

?>
</pre>
