
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" >
    <h1>Отошлите значение переменной</h1>
    <input type="text" name="varName">
    <input type="submit" value="send Var">
</form>

<?php

if(!isset($_POST['varName'])) {
    echo "<p> Пользователь ничего не передал</p>";
    die(" Ожидаю ввод данных");
}

$varName = $_POST['varName'];
echo "<h3>$varName</h3>";

//*-----------------------------
if(is_bool($varName)) {
    echo "<p>Это логическая переменная </p>";
} else {
    echo "<p>Это НЕ логическая переменная </p>";
}

if(is_numeric($varName)) {
    echo "<p> Численное </p>";
}

if(is_string($varName)) {
    echo "<p> Строка </p>";
}

////*-----------------------------
//if(is_bool($varName)) {
//    echo "<p>Это логическая переменная </p>";
//} else {
//    echo "<p>Это НЕ логическая переменная </p>";
//}