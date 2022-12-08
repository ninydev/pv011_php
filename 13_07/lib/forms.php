<?php

/**
 * Функция выводит форму для пользователя
 * @param $user - Данные пользователя
 * @return void
 */
function echoForm ($user){
    ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label> Email <input name="email" type="email" value="<?=$user['email']?>"></label><br>
        <label> Name <input name="name" type="text" value="<?=$user['name']?>"></label><br>
        <input type="submit">
    </form>
<?php
}