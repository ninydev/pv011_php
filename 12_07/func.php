
<pre>
<?php

//function funName2 (int $funArg) : string  {
//    echo "in Fun ";
//    var_dump($funArg);
//    return $funArg;
//}
//echo "now => ";
//funName2( "eed");
//echo " \n\n ";



function funName ($funArg){
    return $funArg;
}


var_dump(funName(1));echo "\n\n";
var_dump(funName("1"));echo "\n\n";
var_dump(funName([1,2,3]));echo "\n\n";
var_dump(funName(true));echo "\n\n";
var_dump(funName(1.5));echo "\n\n";
var_dump(funName(null));echo "\n\n";
?>
</pre>
