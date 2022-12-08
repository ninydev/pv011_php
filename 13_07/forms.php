<?php
/**
 * Model
 */
$user = [
  'email' => 'gueet@super.com',
  'name' => 'Vasya Pupkin'
];

/**
 * VM - Наполнение данными
 */
if(isset($_GET['email']))
    $user['email'] = $_GET['email'];
if(isset($_GET['name'])) {
    if (strlen($_GET['name']) < 3) {
        echo " Имя не может быть короче 2 символов";
    } else {
        $user['name'] = htmlentities($_GET['name']);
    }
}
?>

<!-- View - построение представления -->
<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
    <label> Email <input name="email" type="email" value="<?=$user['email']?>"></label><br>
    <label> Name <input name="name" type="text" value="<?=$user['name']?>"></label><br>
    <input type="submit">
</form>

<script>
    let frm = document.forms[0]
    frm.onsubmit = function (event) {
        console.log(frm)
     if (frm.elements['name'].value.length < 3) {
         // console.log(frm.elements['name'].value)
         alert("Имя не может быть короче 2 символов")
         event.preventDefault()
         return false
     } else {

     }
     return true
 }
</script>


<?php
?>

