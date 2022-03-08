<?php
include_once 'index.php';
$dbInstance=db_connect('groups');
?>
<form method=post>
    <button type="submit" name="bouton">-5</button>
    <button type="submit" name="bouton">+5</button>
</form>
<?php
$a=0;
$b=5;

if (isset($_POST["bouton"])){
    $a=$a-5;
    $b=$b+5;
}
$sql='SELECT firstname, lastname FROM USER limit '.$a.','.$b.';';
$statement=$dbInstance->query($sql);
foreach ($statement as $user){
    echo $user['firstname'].' '.$user['lastname'];
    echo '<br>';
    echo '<br>';
}
?>
