<?php
$color = "#ffffff";
if (isset($_GET['color']))
    $color = $_GET['color'];
?>

<div style="background-color: <?php echo $color; ?>; padding: 20px; margin: 20px;">
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input name="color" type="color">
    <input type="submit">
</form>
</div>
<?php
