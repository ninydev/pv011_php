
<form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
    <h1>Method Get</h1>
    <input type="text" name="varNameGet">
    <input type="hidden" name="userId" value="FFAA123">
    <input type="submit" value="send Get">
</form>


<form action="<?php echo $_SERVER['PHP_SELF'];?>?varNameGet=getValue" method="post" >
    <h1>Method Post</h1>
    <input type="text" name="varNamePost">
    <input type="hidden" name="userId" value="FFAA123">
    <input type="submit" value="send Post">
</form>

<?php
echo "<p>" . __FILE__ . " (" . __LINE__ . ") => " . $_SERVER['PHP_SELF'] . "</p>\n";


echo "<h3> Get vars </h3>";
var_dump($_GET);
echo "\n<hr>\n";

echo "<h3> Post vars </h3>";
var_dump($_POST);
echo "\n<hr>\n";