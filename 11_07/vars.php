<?php

$someVars = "Some Value";

$a = "2";
$b = 2;

?>

<div>
<?php
    echo "Для формирования строк a=$a и b=$b что бы было удобно писать";
?>
</div>



<div>
<?php
echo " A + B = ";
echo $a + $b;
echo "\n";
?>
</div>
<div>
<?php
echo " B + A = ";
echo $b + $a;

echo "\n";

?>
</div>
<div>
<?php

echo " A.B = " . $a . $b;
echo "\n";
?>
</div>


